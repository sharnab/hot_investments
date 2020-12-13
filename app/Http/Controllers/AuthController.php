<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyList = array();
        if($token=$this->getToken())
        {
            $propertyList = $this->getAllApprovedProperty($token);
            $data['propertyList'] = $propertyList['property'] ;
            // dd($propertyList['property']);
        }
        // api for home page goes here
        return view('client.properties.index', $data);
    }

    private function getAllApprovedProperty($token)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/getAllApprovedProperty";

        $header=array(
            'Content-Type:application/json',
            'Authorization: Bearer '.$token,
        );
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        $result = curl_exec($ch);
        $allProperty = json_decode($result,true);
        // echo "<pre>";
        // print_r($allProperty);dd();
        if(isset($allProperty['status']) && $allProperty['status'])
            return $allProperty['data'];
        else
            return false;
    }

    public function Login()
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/users/login";

        $fireID = '4aaFPVT6o7OzxvWTWzwPgmtWwYN2';
        $requestData=array(
            'firebaseUID'=>$fireID
        );
        $requestDataJson=json_encode($requestData);
        $header=array(
            'Content-Type:application/json',
        );
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $requestDataJson);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        $result = curl_exec($ch);
        $tokenInfo = json_decode($result,true);
        // echo "<pre>";
        // print_r($tokenInfo);dd();
        if(isset($tokenInfo['status']) && $tokenInfo['status'])
            session()->put('api_token',$tokenInfo['token']);
            // return $tokenInfo['token'];
        else
            return false;
    }

    public function login()
    {
        return view('sbadmin.login');
    }

}
