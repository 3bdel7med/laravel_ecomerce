<?php

namespace App\Http\Controllers;
use App\Events\ChatMessageEvent;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = ChatMessage::all();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $message = ChatMessage::create([
            'message' => $request->input('message'),
            'user_id' => auth()->user()->id,
        ]);

        broadcast(new ChatMessageEvent($message, auth()->user()))->toOthers();

        return response()->json([
            'message' => $message,
        ]);
    }
}