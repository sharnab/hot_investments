<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($token=$this->getToken())
        {
            $propertyList = $this->getAllProperty($token);
            // dd($propertyList['property']);
            $data['propertyList'] = $propertyList['property'] ;
        }


        return view('sbadmin.property.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sbadmin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($token=$this->getToken())
        {
            $propertyList = $this->addProperty($token);
            // dd($propertyList['property']);
            // $data['propertyList'] = $propertyList['property'] ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $bank = Bank::find($id);

        $validatedData = $request->validate([
            "name"          => "required",
            "active_status" => "required",
        ]);

        $data = array(
            "name"          => $request->input('name'),
            "active_status" => $request->input('active_status'),
            "updated_by"    => Auth::id()
        );

        $BankData = Bank::where('id',$id)->update($data);

        session()->flash('message', 'Bank Updated Successfully !');
        session()->flash('class', '1');
        return redirect()->route('bank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function approve($id)
    {
        if($token=$this->getToken())
        {
            $propertyList = $this->approveProperty($token,$id);
            if ($propertyList) 
                return 'approve';
            else
                return redirect()->back();
        }
    }

    private function getToken()
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/users/login";

        $fireID = '4aaFPVT6o7OzxvWTWzwPgmtWwYN2';
        $requestData=array(
            'firebaseUID'=>$fireID
        );          
        $requestDataJson=json_encode($requestData);
        $header=array(
            'Content-Type:application/json',
            // 'authorization: '.$token,
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
            return $tokenInfo['token'];
        else
            return false;
    }

    private function getAllProperty($token)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/admin/getAllProperty";
      
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

    private function addProperty($token)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/createProperty";
      
        $header=array(
            'Content-Type:application/json',
            'Authorization: Bearer '.$token,
        );
        $location = array(
            'description' => 'Vegas, USA',
            'type' => 'Point',
            'address' => '301 Biscayne Blvd, Vegas, FL 33132, US',
            'coordinates' => array(-115.2306538,36.1797013)
        );
        $requestData=array(
            'title'=>'New Apartment',
            'description'=>'Apartment with good neighbours',
            'price'=>'14000',
            'photos' => '',
            'location'=>$location
        ); 
        $requestDataJson=json_encode($requestData);
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $requestDataJson);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        
        $result = curl_exec($ch);
        $allProperty = json_decode($result,true);
        echo "<pre>";
        print_r($allProperty);dd();
        if(isset($allProperty['status']) && $allProperty['status'])
            return $allProperty['data'];
        else
            return false;
    }

    private function approveProperty($token,$id)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/admin/approveProperty";

        $header=array(
            'Content-Type:application/json',
            // 'Content-Type:multipart/form-data',
            'Authorization: Bearer '.$token,
        );
        $requestData=array(
            'id'           => $id ,
        );
        $requestDataJson=json_encode($requestData);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $requestDataJson);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        // dd($ch);
        $result = curl_exec($ch);

        $allProperty = json_decode($result,true);
        
        if(isset($allProperty['status']) && $allProperty['status'])
            return $allProperty['message'];
        else
            return false;
    }


}
