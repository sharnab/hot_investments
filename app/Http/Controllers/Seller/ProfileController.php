<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

// use App\Model\Property;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyList = Http::get('http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/getAllApprovedProperty?distance=300&latlng=36.1797013,-115.2306538');
        dd($propertyList);
        return view('client.properties.index');//,compact('propertyList')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title_name"    => "required",
            "description"   => "required",
            "price"         => "required",
            "Location"      => "required",
            "address"       => "required",
            "status"        => "required",
        ]);

        $data = array(
            'title'=>$title_name,
            'description'=>$description,
            'price'=>$price,
            'location'["description"]=>$location,
            // 'photos'=>@/Users/hello/Downloads/property6.jpg',
            // 'photos'=>@/Users/hello/Downloads/property2.jpg',
            'location["address"]'=>$address,
            'location["coordinates"]'=>array(
                    [0]=>$lat,
                    [1]=>$long
            )
        );

        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjVmNTBjN2E3NTUxYWQ4MGJhMjI2MzYyNSIsImlhdCI6MTU5OTEyOTcxMSwiZXhwIjoxNjA2OTA1NzExfQ.p8iG1eorMOMSCKdIyyBaHFlmJTmvdUa7KHINWPtfNTg";
        $url = 'http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/createProperty';
        $ch = curl_init($url);
        $header=array(
            'Content-Type:application/json',
            'Authorization: Bearer '.$token
        );

        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        $propertyList = json_decode($result);

        session()->flash('message', 'New Property Created Successfully !');
        session()->flash('class', '1');
        return redirect()->route('property');
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
        $profileData=$this->getProfile($id);
        // return view('client.profile.edit', compact('property'));

        // $profileData = array(
        //     'id'=>'1',
        //     'title'=>'Mahedi',
        //     'email'=>'mahedi@gmail.com',
        //     'phone'=>'01981929182',
        //     'bio'=>'jfdjfhdsjfsd',
        //     'file_name'=>''
        // );
        return view('client.profile.edit', compact('profileData'));
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
        // $property = Property::find($id);

        $validatedData = $request->validate([
            "name"          => "required",
            "active_status" => "required",
        ]);

        $data = array(
            "name"          => $request->input('name'),
            "active_status" => $request->input('active_status'),
            "updated_by"    => Auth::id()
        );

        $PropertyData = Property::where('id',$id)->update($data);

        session()->flash('message', 'Property Updated Successfully !');
        session()->flash('class', '1');
        return redirect()->route('property');
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

    public function getProfile($id)
    {
        if($token=$this->getToken())
        {
            $profileData = $this->getProfileById($token, $id);
        }
        return $profileData['user'];
    }

    private function getProfileById($token, $propertyID)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/users/$propertyID";

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
        $profileData = json_decode($result,true);
        // echo "<pre>";
        // print_r($allProperty);dd();
        if(isset($profileData['status']) && $profileData['status'])
            return $profileData['data'];
        else
            return false;
    }


}
