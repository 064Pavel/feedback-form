<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\Application\ApplicationResource;
use App\Models\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(Application $application)
    {
        $application = new ApplicationResource($application);
        return Inertia::render('Applications/Show', compact('application'));
    }
}
