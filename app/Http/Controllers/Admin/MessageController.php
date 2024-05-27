<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function index()
    {
        $Messages = Message::All();
        return view('admin.messages.index', [
            'Messages' => $Messages,
        ]);
    }

    public function unread()
    {
        $Messages = Message::All();
        return view('admin.messages.unread', [
            'Messages' => $Messages,
        ]);
    }

    public function unreplied()
    {
        $Messages = Message::All();
        return view('admin.messages.unreplied', [
            'Messages' => $Messages,
        ]);
    }

    public function show($id)
    {
        $Message = Message::find($id);
        $Message->status = "read";
        $Message->save();

        return view('admin.messages.show', [
            'Message' => $Message
        ]);
    }

    public function store(Request $request, $id)
    {
        $data = Message::find($id);
        $data->reply = $request->reply;
        $data->status = "replied";
        $data->save();
        return redirect()->route('admin.messages');
    }

    public function destroy($id)
    {
        $data =Message::find($id);
        $data->delete();
        return redirect()->route('admin.messages');
    }
}
