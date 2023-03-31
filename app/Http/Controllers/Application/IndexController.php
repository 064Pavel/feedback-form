<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\Application\ApplicationResource;
use App\Models\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        $applications = Application::all();

        $applications = ApplicationResource::collection($applications);

        return Inertia::render('DashboardForModerator', compact('applications'));
    }
}
