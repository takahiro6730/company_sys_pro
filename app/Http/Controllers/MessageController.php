<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Message;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageNotification;

class MessageController extends Controller
{
    //
    public function index()
    {
        //$sel_userIds = Message::distinct()->pluck('receiver_id');
        //$sel_users = User::whereIn('id', $sel_userIds)->get();
        $sel_users = User::all();
        $roles = Role::all();

        return view("message.index", compact('sel_users', 'roles'));
    }

    public function get_chat(Request $request)
    {
        $userId = $request->current_user;
        $results = Message::where('receiver_id', $userId)
            ->orWhere('sender_id', $userId)
            ->orderBy('created_at', 'asc')
            ->get();

        $current_user = User::find($userId);
        $origin_user = User::find(Auth::user()->id);

        $chat_messages = [];

        foreach ($results as $result) {
            if ($result->del_flag == 1)
                continue;
            $direction = "left";
            if ($result->sender_id == $userId) {
                $direction = "right";
            }
            $avatar_url = 'assets/images/users/default.png';
            if ($direction == "right" && $current_user->avatar)
                $avatar_url = $current_user->avatar;
            if ($direction == "left" && $origin_user->avatar)
                $avatar_url = $origin_user->avatar;
            $chat_message = array(
                'content' => $result->content,
                'direction' => $direction,
                'created_at' => Carbon::parse($result->created_at)->format('Y年m月d日 H:i'),
                'updated_at' => Carbon::parse($result->updated_at)->format('Y年m月d日 H:i'),
                'avatar_url' => $avatar_url
            );
            array_push($chat_messages, $chat_message);
        }
        return $chat_messages;
    }

    public function send(Request $request)
    {
        $origin_user = User::find(Auth::user()->id);
        $receive_user = User::find($request->current_user);
        $message_content = $request->sending_message;
        $newMessage = new Message();
        $newMessage->content = $message_content;
        $newMessage->sender_id = Auth::user()->id;
        $newMessage->receiver_id = $request->current_user;
        $newMessage->first_sentence = "first_sentence";
        $newMessage->del_flag = false;
        $success =$newMessage->save();

        $this->message_notification($newMessage, $origin_user, $receive_user);

        $avatar_url = 'assets/images/users/default.png';
        if ($origin_user->avatar) $avatar_url = $origin_user->avatar;

        if ($success) {
            $add_message = array(
                'content' => $newMessage->content,
                'direction' => "left",
                'created_at' => Carbon::parse($newMessage->created_at)->format('Y年m月d日 H:i'),
                'updated_at' => Carbon::parse($newMessage->updated_at)->format('Y年m月d日 H:i'),
                'avatar_url' => $avatar_url
            );
            return $add_message;
        } else {
            echo "エラーが発生しました。";
        }
    }

    public function message_notification($message, $origin_user, $receive_user)
    {
        // Mail::to($receive_user->email)->send(new MessageNotification($message, $origin_user, $receive_user));
    }
}
