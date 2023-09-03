<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Messages();
        $message->name = $request->input("name");
        $message->company = $request->input("company");
        $message->number = $request->input("number");
        $message->email = $request->input("email");
        $message->service = $request->input("service");
        $message->message = $request->input("message");
        if ($message->save()) {
            return redirect('/');
        }
        else {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if (Auth::check() && Auth::user()->id == 1) {
            return view('dashboard')->with('messages', Messages::all());
        }
    }

    public function getDetails($id) {
        return response()->json(Messages::where("id", "=", $id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
