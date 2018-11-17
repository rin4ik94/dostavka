<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Telegram;
use Carbon\Carbon;
use Exception;
use Telegram\Bot\Api;

class TelegramController extends Controller
{
    //

    protected $telegram;
    protected $chat_id;
    protected $username;
    protected $text;

    public function __construct()
    {
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN', '757827713:AAE56ntnp5cf-NNGI8vMcsTsC0ycwGGu_h4'));
    }
 

    public function getMe()
    {
        $response = $this->telegram->getMe();
        return $response;
    }

    public function setWebHook()
    {
        $url = 'https://alomarket.uz/' . env('TELEGRAM_BOT_TOKEN', '757827713:AAE56ntnp5cf-NNGI8vMcsTsC0ycwGGu_h4') . '/webhook';
        $response = $this->telegram->setWebhook(['url' => $url]);
        return $response == true ? redirect()->back() : dd($response);
    }
 
    public function handleRequest(Request $request)
    {
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];
 
        if ($this->text == '/start') {
                $this->showText();
        }
    }

        public function showText()
    {
        $message = 'Hello Alomarket';
        $this->sendMessage($message);
    }

    protected function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];
 
        if ($parse_html) $data['parse_mode'] = 'HTML';
 
        $this->telegram->sendMessage($data);
    }
}


