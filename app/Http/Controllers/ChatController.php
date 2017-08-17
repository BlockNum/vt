<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{

    var $user;
    var $chatChannel;

    const DEFAULT_CHAT_CHANNEL = 'chat';

    public function __construct()
    {
        
        $this->user = Session::get('user');
        $this->chatChannel = self::DEFAULT_CHAT_CHANNEL;
    }

    public function getIndex()
    {
        if(!$this->user)
        {
            return redirect('chat');
        }

        return view('chat', ['chatChannel' => $this->chatChannel]);
    }

    public function postMessage(Request $request)
    {
        $message = [
            'text' => e($request->input('chat_text')),
            'username' => $this->user->getNickname(),
            'timestamp' => (time()*1000)
        ];
        $this->trigger($this->chatChannel, 'new-message', $message);
    }
}