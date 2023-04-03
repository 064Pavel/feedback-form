<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\StoreRequest;
use App\Models\Application;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $this->authorize('viewAny', Auth::user());

        $data = $request->validated();

        $images = $data['images'];
        unset($data['images']);

        $application = Application::create($data);


        foreach ($images as $image){
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension());
            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);

            Image::create([
                "path" => $filePath,
                "url" => url("/storage/".$filePath),
                "application_id" => $application->id,
            ]);
        }

        return Inertia::location(route('application.successfully.created'));

    }
}
