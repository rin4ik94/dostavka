<?php

namespace App\Http\Controllers\Front;

use App\Models\Sms;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Soap\Request\TransmitSMS;
use App\Soap\Request\SMSArguments;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Soap\Request\ServiceArguments;
use App\Soap\Request\StatusSMSArguments;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\TransmitSMSArguments;

class SMSController extends Controller
{
    /**
     * Use the SoapWrapper
     */
    public function create(Request $request)
    {
        $params = [
            'authentication' => 'SOAP_AUTHENTICATION_DIGEST',
            'cache_wsdl' => 0,
            'trace' => true,
            'exceptions' => true,
            'stream_context' => stream_context_create([
                'ssl' => [
                // set some SSL/TLS specific options
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ],
            ])
        ];

        try {
            $params = [
                'authentication' => 'SOAP_AUTHENTICATION_DIGEST',
                'cache_wsdl' => 0,
                'trace' => true,
                'exceptions' => true,
                'stream_context' => stream_context_create([
                    'ssl' => [
                    // set some SSL/TLS specific options
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ],
                ])
            ];

            $client = new \SoapClient('https://89.236.254.24/httpsmsv1.php?wsdl', $params);

            /*
             *
             * Send SMS ( TransmitSMS )
             *
             * */
            if (!function_exists('TransmitSMS')) {
                function TransmitSMS(\SoapClient $soapClient, TransmitSMSArguments $arguments)
                {
                    return $soapClient->TransmitSMS($arguments);
                }
            }

            if (!function_exists('StatusSMS')) {
                function StatusSMS(\SoapClient $soapClient, StatusSMSArguments $arguments)
                {
                    return $soapClient->StatusSMS($arguments);
                }
            }
            $transmit = new TransmitSMSArguments();
            $transmit->username = config('delivery.sms.login');
            $transmit->password = config('delivery.sms.password');

            $service = new ServiceArguments();
            $service->service = 1;
            $transmit->service = $service;

            $messages = [];

            $message = new SMSArguments();
            $message->id = 1;
            $message->phone = $request->phone;
            $code = mt_rand(1000, 9999);
            $message->text = 'КОД АВТОРИЗАЦИИ TEZFOOD ' . $code;
            $messages[0] = $message;

            $transmit->messages = $messages;
            $transmit->count = count($messages); // 1

            // Send SMS
            $transmitResult = TransmitSMS($client, $transmit);
            if ($transmitResult->status == 0) {
                $sms = Sms::create(['phone' => $request->phone, 'type' => 'confirm', 'status' => 0, 'text' => $message->text, 'code' => $code]);
                return response(200);
            } else {
                $msg = 'Error: code=' . $transmitResult->status . ', Message=' . $transmitResult->errorMsg;
                return response($msg, 404);
            }
        } catch (SoapFault $e) {
            echo '<pre>';
            var_dump($e);
            echo '</pre>';
        }
    }

    public function getCheckCode(Request $request)
    {
        if (request()->has('its')) {
            if ($request->has('phone')) {
                $phone = '+' . $request->phone;
            }
            if ($sms = Sms::where('code', $request->code)->where('phone', $phone)->ofTime()->first()) {
                if ($client = Client::where('phone', $phone)->first()) {
                    try {
                        // attempt to verify the credentials and create a token for the user
                        if (!$token = JWTAuth::fromUser($client)) {
                            return response()->json(['error' => 'invalid_credentials'], 401);
                        }
                    } catch (JWTException $e) {
                        // something went wrong whilst attempting to encode the token
                        return response()->json(['error' => 'could_not_create_token'], 500);
                    }
                    $sms->status = '1';
                    $sms->save();
                    return response()->json([
                        'data' => $client,
                        'new' => 0,
                        'meta' => [
                            'token' => $token
                        ]
                    ], 200);
                } else {
                    $client = new Client;
                    $client->phone = $phone;
                    $client->save();
                    try {
                        // attempt to verify the credentials and create a token for the user
                        if (!$token = JWTAuth::fromUser($client)) {
                            return response()->json(['error' => 'invalid_credentials'], 401);
                        }
                    } catch (JWTException $e) {
                        // something went wrong whilst attempting to encode the token
                        return response()->json(['error' => 'could_not_create_token'], 500);
                    }
                    $sms->status = '1';
                    $sms->save();
                    return response()->json([
                        'data' => $client,
                        'new' => 1,
                        'meta' => [
                            'token' => $token
                        ]
                    ], 200);
                }

                return tap($sms)->update(['status' => 1]);
            } else {
                return response('Вы не правильно ввели код', 404);
            }
        } else {
            abort(404);
        }
    }

}
