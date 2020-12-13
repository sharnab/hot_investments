<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use File;

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

        return view('client.properties.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('client.properties.index');
        return view('client.properties.create');
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
            // dd($request->file('file')[0]->getClientOriginalName());
            $propertyList = $this->addProperty($token, $request);
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
        if($token=$this->getToken())
        {
            $propertyData = $this->getPropertyByPropertyId($token, $id);
            $data = $propertyData['property'] ;
        }

        return view('client.properties.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($token=$this->getToken())
        {
            $propertyData = $this->getPropertyByPropertyId($token, $id);
            // dd($propertyList['property']);
            $data = $propertyData['property'] ;
        }

        return view('client.properties.edit', compact('data'));
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
        return 'approve';
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

    private function addProperty($token, Request $data)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/createProperty";

        $header=array(
            // 'Content-Type:application/json',
            'Content-Type:multipart/form-data',
            'Authorization: Bearer '.$token,
        );
        // $location = array(
        //     'description' => $data->input('location_name'),
        //     'type' => 'Point',
        //     'address' => $data->input('address'),
        //     'coordinates' => array($data->input('lat'),$data->input('lng'))
        // );
        // $requestData=array(
        //     'title'           =>$data->input('title'),
        //     'description'     =>$data->input('description'),
        //     'price'           =>$data->input('price'),
        //     'photos'          =>'',
        //     'lotSize'         =>$data->input('lotSize'),
        //     'location'        =>$location
        //     // 'location'=>$data->input('location'),
        // );
        // $requestDataJson=json_encode($requestData);

        $requestData=array(
                    'title'                     => 'Test Data' ,
                    'description'               => 'Apartment with really good environment.' ,
                    'price'                     => '12000' ,
                    'location[description]'     => 'Texas, USA' ,
                    'location[address]'         => '1 Haven for Hope Way, San Antonio, TX 78207' ,
                    'location[coordinates][0]'  => '-98.5027167' ,
                    'location[coordinates][1]'  => '29.4383793' ,
                    'lotSize'                   => '1000' ,
                    'propertySize'              => '800',
                    'yearBuilt'                 => '2015',
                    'propertyType'              => 'Duplex' ,
                    'facing'                    => 'West',
                    'bedrooms'                  => '2',
                    'totalMonthlyRent'          => '600',
                    'walkability'               => '5',
                    'crimeScore'                => '1',
                );
        // $requestData=array(
        //     'title'                     => $data->input('title_name') ,
        //     'description'               => $data->input('desc') ,
        //     'price'                     => $data->input('price') ,
        //     'location[description]'     => $data->input('location_name') ,
        //     'location[address]'         => $data->input('address') ,
        //     'location[coordinates][0]'  => $data->input('lat') ,
        //     'location[coordinates][1]'  => $data->input('lng') ,
        //     'lotSize'                   => $data->input('area') ,
        //     'propertySize'              => $data->input('propertySize'),
        //     'yearBuilt'                 => $data->input('yearBuilt'),
        //     'propertyType'              => $data->input('propertyType') ,
        //     'facing'                    => $data->input('facing'),
        //     'bedrooms'                  => $data->input('bedrooms'),
        //     'totalMonthlyRent'          => $data->input('totalMonthlyRent'),
        //     'walkability'               => $data->input('walkability'),
        //     'crimeScore'                => $data->input('crimeScore'),
        // );

        // $i=0;
        // foreach($data->file('file') as $image){
        //     $path = $image->getRealPath();
        //     $requestData["photos[$i]"] = "@/".$path;
        //     $i++;
        // }

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $requestData);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        // dd($ch);
        $result = curl_exec($ch);dd($result);
        curl_close($ch);

        $allProperty = json_decode($result,true);
        echo "<pre>";
        print_r($allProperty);dd();
        if(isset($allProperty['status']) && $allProperty['status'])
            return $allProperty['data'];
        else
            return false;
    }

    public function addBookmark($id)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/bookmarkProperty";

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

    public function imageStorage(Request $request){
        $globals['images'] = $request->file->getClientOriginalExtension();
    }

    public function getSingleProperty($id)
    {
        if($token=$this->getToken())
        {
            $propertyData = $this->getPropertyByPropertyId($token, $id);
        }
        return $propertyData;
    }

    private function getPropertyByPropertyId($token, $propertyID)
    {
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/getSingle/$propertyID";

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
        $propertyData = json_decode($result,true);
        // echo "<pre>";
        // print_r($allProperty);dd();
        if(isset($propertyData['status']) && $propertyData['status'])
            return $propertyData['data'];
        else
            return false;
    }
}
