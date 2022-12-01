<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function get()
    {
        $messages = DB::select("select * from messages");
        return view("index",['messages' => $messages]);
    }
}
