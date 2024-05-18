<?php

namespace App\Http\Controllers;

use App\Mail\ResponseMessageMail;
use Exception;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create_message(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|min:9|max:20',
            'message' => 'required|string|min:10',
        ]);

        ContactUs::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $messages = ContactUs::all();
        return view('pages.messages', ['messages' => $messages]);
    }

    public function send($id, Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'title' => 'required|string',
        ]);

        $user = ContactUs::find($id);

        if ($user) {
            Mail::to($user->email)->send(new ResponseMessageMail($user->username, $request->title, $request->message));
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $message = ContactUs::find($id);

        if ($message) {
            $message->delete();
            return redirect()->back();
        }

        return redirect()->back();
    }
}
