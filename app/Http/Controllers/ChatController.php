<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Chat::with('user')->get();
        return view('chat', compact('messages'));
    }
    public function send(Request $request)
    {
        auth()->user()->chats()->create(['message' => $request->message, 'sent_at' => now()]);
        return redirect()->route('chat.index')->with('success', 'Message sent successfully');
    }
}
