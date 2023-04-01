<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\Application\ApplicationResource;
use App\Models\Application;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        $this->authorize('view', Auth::user());

        $applications = Application::all();

        $applications = ApplicationResource::collection($applications)->resolve();

        return Inertia::render('Applications/Index', compact('applications'));


    }
}
