<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Mail\Application\ReplyFromModeratorMail;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class SendReplyController extends Controller
{
    public function __invoke(Request $request)
    {
        $id = $request->id;
        $user_email = $request->user_email;
        Application::where('id',$id)->update(['is_active'=>true]);

        Mail::to($user_email)->send(new ReplyFromModeratorMail($request->reply));

        return Inertia::render('Applications/Index');
    }
}
