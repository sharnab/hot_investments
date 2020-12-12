<?php

namespace App\Http\Controllers\Seller;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        // return $this->middleware('auth');
    }

    public function index()
    {
        return view('client.chat.chat');
    }
}
