<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SiteController extends Controller
{
      //intro
      public function index(Request $request)
      {
            $response = Http::get('http://laravel_workspace_api_one/api/get-api');
            dd($response->json());
      }
}