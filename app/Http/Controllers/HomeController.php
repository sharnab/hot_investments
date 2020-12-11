<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use \GuzzleHttp\Client as GuzzleClient;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // api for home page goes here
        return view('client.home.index', compact('propertyList'));
    }

    public function login()
    {
        return view('sbadmin.login');
    }

}
