<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ApplicationSuccessfullyCreatedController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Applications/ApplicationSuccessfullyCreated');
    }
}
