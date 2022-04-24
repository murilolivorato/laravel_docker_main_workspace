<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class SiteController extends Controller
{
      //intro
      public function index(Request $request)
      {
            $client        = new Client(['http_errors' => false,  'timeout' => 60,'verify' => false, 'verify_ssl' => false]);
            /*$http = new Guzzle;*/
            return $client->request('GET','http://laravel_workspace_api_one:80/api/get-api');
      }
}