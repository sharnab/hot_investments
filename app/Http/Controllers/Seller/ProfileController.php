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
        // $property = Property::find($id);
        // return view('client.profile.edit', compact('property'));
        return view('client.profile.edit');
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


}
