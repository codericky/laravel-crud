<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendMessage($user, $subject, $content = null)
    {
        $msg = new \App\Message;
        $msg->user_id = $user->id;
        $msg->sender_id = \Auth::user()->id;
        $msg->code = str_random(30);
        $msg->subject = $subject;
        $msg->content = $content;
        $msg->save();

        try {
            \Mail::to($user)->send(new \App\Mail\NewMessage($user));
        } catch (\Exception $e) {
            \Log::error("Error kirim email ke user id ".$user->id);
        }

        return $msg;
    }
}
