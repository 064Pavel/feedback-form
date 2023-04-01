<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Resources\Application\ApplicationResource;
use App\Jobs\ReplyFromModeratorJob;
use App\Mail\Application\ReplyFromModeratorMail;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use PHPUnit\Exception;

class SendReplyController extends Controller
{
    public function send(Request $request)
    {
        $id = $request->id;
        $user_email = $request->user_email;
        $reply = $request->reply;

        Application::where('id', $id)->update(['is_active' => false]);

        dispatch(new ReplyFromModeratorJob($user_email, $reply));

        $applications = Application::where('is_active', true)->get();
        $applications = ApplicationResource::collection($applications)->resolve();
        return Inertia::render('Applications/Index', compact('applications'));
    }
}
