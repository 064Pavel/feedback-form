<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CreateController extends Controller
{
    public function __invoke()
    {

        $this->authorize('viewAny', Auth::user());

        $userId = Auth::id();
        return Inertia::render('Applications/Create', compact('userId'));

    }
}
