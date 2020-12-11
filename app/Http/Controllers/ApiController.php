<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Model\Bank;

use Response;
use DB;

class ApiController extends Controller
{
    protected $statusCode = 200;

    public function __construct()
    {

    }

    public function getLocations()
    {
        $data = Bank::get();

        return response()->json($data);
    }

    public function getProperties()
    {
        if($token=$this->getToken())
        {
            $propertyList = $this->getAllProperty($token);
            // dd($propertyList['property']);
            $data['propertyList'] = $propertyList['property'];

            // return $data;
        }
        // $data = Bank::paginate(6);
        return $data;
    }

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

    /**
     * Getter for statusCode
     *
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     *
     * Setter for statusCode
     *
     * @param int $statusCode Value to set
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     *
     * @param array $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {

        array_walk_recursive($data, function (&$item, $key) {
            $item = null === $item ? '' : $item;
        });

        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     *
     * @param string $message
     * @return mixed
     */
    public function respondWithSuccess($message, $data = array() )
    {

        return $this->respond([

                'status'    => 'success',
                'message'   => $message,
                'data'      => $data,

        ]);
    }

    /**
     *
     * @param string $message
     * @return mixed
     */
    public function respondWithError($message, $data = array() )
    {

        return $this->respond([

                'status'    => 'failed',
                'message'   => $message,
                'error'     => $data

        ]);
    }

    /**
     *
     * @param string $message
     * @return mixed
     */
    public function respondWithErrorGoElsewhere($message, $next = '', $data = array() )
    {

        return $this->respond([

                'status' => 'failed',
                'message' => $message,
                'next' => $next,
                'data' => $data

        ]);
    }

    /**
     *
     * @param string $message
     * @return mixed
     */
    public function respondWithDataForAppHomeScreen($message, $data = array() )
    {

        return $this->respond([

                'status' => 'failed',
                'message' => $message,
                'data' => $data

        ]);
    }

    /**
     * Response 402 HTTP header
     * @param array $validationErrors
     * @return mixed
     */
    public function respondWithValidationError($validationErrors)
    {

        $response = [];
        $sl = 0;
        foreach ($validationErrors as $key => $value) {
            $response[$sl][$key] = $value[0];
            $sl ++;
        }

        return $this->setStatusCode(200)->respond([

                'status'    => 'failed',
                'message'   => 'Validation failed',
                'error'     => $response

        ]);
    }

    /**
     *
     * Response 400 HTTP header
     * and a given message.
     * @return  Response
     */
    public function respondWrongArgs($message = 'Wrong Arguments')
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }

    /**
     *
     * Response 401 HTTP header
     * and a given message.
     * @return  Response
     */
    public function respondUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    /**
     *
     * Response 403 HTTP header
     * and a given message.
     * @return  Response
     */
    public function respondForbidden($message = 'Forbidden')
    {
        return $this->setStatusCode(403)->respondWithError($message);
    }

    /**
     *
     * Response 404 HTTP header
     * and a given message.
     * @return  Response
     */
    public function respondNotFound($message = 'Not found')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     *
     * Response 500 HTTP header
     * and a given message.
     * @return  Response
     */
    public function respondInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    // public function respondWithSuccess($message,$data,$statuscode,$header = [])
    // {
    //     $status = "success";
    //     return Response::json([
    //         'status'    => $status,
    //         'message'   => $message,
    //         'data'      => $data
    //     ],$statuscode,$header);
    // }

    // public function respondWithError($message,$data,$statuscode,$header = [])
    // {
    //     $status = "failed";
    //     return Response::json([
    //         'status'    => $status,
    //         'message'   => $message,
    //         'error'     => $data
    //     ],$statuscode,$header);
    // }






    public function sendFCM($fcmids,$message)
    {
        #API access key from Google API's Console
        $API_ACCESS_KEY = env('PUSH_NOTIFICATION_API_ACCESS_KEY') ;
        $API_URL        = env('PUSH_NOTIFICATION_SEND_URL') ;
        // define( 'API_ACCESS_KEY', 'YOUR-SERVER-API-ACCESS-KEY-GOES-HERE' );
        $registrationIds = $fcmids;
        #prep the bundle

        $fields = array
                (
                    // 'to'                => $FCMID // for single device push
                    'registration_ids'  => $registrationIds , // for multiple deice push
                    'data'              => $message
                );
        $headers = array
                (
                    'Authorization: key=' . $API_ACCESS_KEY,
                    'Content-Type: application/json'
                );
        #Send Reponse To FireBase Server
        $ch = curl_init();
        // curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_URL, $API_URL );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        #Echo Result Of FireBase Server
        return  json_decode($result);
    }

    public function pushtest()
    {
        #API access key from Google API's Console
        define( 'API_ACCESS_KEY', 'YOUR-SERVER-API-ACCESS-KEY-GOES-HERE' );
        // $userinfo = Userinfo::find(9);
        $registrationIds = array( 'fK43k8Vv0JU:APA91bHVMQSzvd9jCaMId8TBlw1OaNskJ0BDvzF87zB4rHfbZUhY9CkOL_SyeEkWP01PiWsEX-C87UOv6d3_NYZhfdElrdZwEX0Ug_EcLT5YAMKnEazEaRMPvB_mMjpPH5l86pjdradV' ,
    'fK43k8Vv0JU:APA91bHVMQSzvd9jCaMId8TBlw1OaNskJ0BDvzF87zB4rHfbZUhY9CkOL_SyeEkWP01PiWsEX-C87UOv6d3_NYZhfdElrdZwEX0Ug_EcLT5YAMKnEazEaRMPvB_mMjpPH5l86pjdradV');
        // $registrationIds = array( $userinfo->gcmid );
        #prep the bundle
         $msg = array
              (
            'body'  => 'Test Push notification',
            'title' => 'Test Push',
            'tag'   => 'new_order_placed'
            // 'icon'  => 'myicon',/*Default Icon*/
            // 'sound' => 'mySound'/*Default sound*/
              );

        $ttl = array('ttl' => '3s');
        $fields = array
                (
                    // 'to'                => $GCMID // for single device push
                    'registration_ids'  =>  $registrationIds , // for multiple deice push
                    'data'              => $msg,
                    "android"           => $ttl
                );


        $headers = array
                (
                    // 'Authorization: key=' . 'AAAAdN6q8pk:APA91bFFO44qgVLfPoT3aj572-cGhkvzalAw_VYF_dl3IC3QIkzJ-b_cW2o8w78lJWDQzVuY1i1uQp2v0YnGklYtRiz0nD-U8CARSOq3ECmTAR-QZc3oQeyAOX4A95RgRB6FmCyNpF5v',
                    'Authorization: key=' . env('PUSH_NOTIFICATION_API_ACCESS_KEY'),
                    'Content-Type: application/json'
                );
        #Send Reponse To FireBase Server
        $ch = curl_init();
        // curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_URL, env('PUSH_NOTIFICATION_SEND_URL') );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        #Echo Result Of FireBase Server
        // echo $result;
        $jsonResult = json_decode($result);
        // dd($jsonResult->results);

        // logNotification(1,$registrationIds,$msg,$jsonResult->results,'new_order_placed');
    }


    // public function sendSMS($userid,$mobile_no, $message,$smstype) {

    //     $encodedMessage= urlencode($message);
    //     $contextOptions = array(
    //         "ssl" => array(
    //             "verify_peer" => FALSE,
    //             "verify_peer_name" => FALSE,
    //         ),
    //     );

    //     // $cliNumber = "01729024921" ;
    //     $URL = "https://gpcmp.grameenphone.com/gpcmpapi/messageplatform/controller.home?username=BANGLATRAC&password=BtracPsd@321&apicode=1&msisdn=$mobile_no&countrycode=880&cli=TIFFINBOX&messagetype=1&message=$encodedMessage&messageid=0";
    //     // https://gpcmp.grameenphone.com/gpcmpapi/messageplatform/controller.home?username=BANGLATRAC&password=BanglaTracPSD@32&apicode=1&msisdn=$destination&countrycode=880&cli=Seemo.&messagetype=1&message=$msg&messageid=0

    //     $results = file_get_contents($URL, FALSE, stream_context_create($contextOptions));

    //     $str = explode(",", $results);
    //     $status = $str[0];

    //     #SMSTYPE 2 for forgetpassword
    //     if ($status == 200) {
    //         $this->smslog($userid,$mobile_no,$message,$smstype,1);
    //         return true;
    //     } else {
    //         $this->smslog($userid,$mobile_no,$message,$smstype,0);
    //         return false;
    //     }
    // }

    public function sendSMS($userid,$mobile_no,$message,$smstype) {

        $message = getSMSBody($smstype,$message);
        $encodedMessage= urlencode($message);

        $contextOptions = array(
            "ssl" => array(
                "verify_peer" => FALSE,
                "verify_peer_name" => FALSE,
            ),
        );

        $cli = "TIFFINBOX";
        // $cli = "Seemo.";

        $URL = "http://103.9.185.211/smsSendApi.php?mobile=$mobile_no&message=$encodedMessage&cli=$cli";

        $results = file_get_contents($URL, FALSE, stream_context_create($contextOptions));

        $results = json_decode($results,true);
        if ( $results['success'] )
        {
            $str = explode(",", $results['result']);
            $status = $str[0];

            if ($status == 200) {
                $this->smslog($userid,$mobile_no,$message,$smstype,1);
                return true;
            } else {
                $this->smslog($userid,$mobile_no,$message,$smstype,0);
                return false;
            }
        }
        else
        {
            $this->smslog($userid,$mobile_no,$message,$smstype,0);
            return false;
        }
    }

    private function smslog($userid,$mobile_no,$message,$smstype,$status){
        $data = array(
            'touser_id'   => $userid,
            'mobile_no'   => $mobile_no,
            'message'     => $message,
            'sms_type'    => $smstype,
            'status'      => $status
        );
        SMSLog::insert($data);
    }

    public function getSignleProperty($id)
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
