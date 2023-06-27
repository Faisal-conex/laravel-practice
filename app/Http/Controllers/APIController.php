<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    //

    function getApi()
    {

        $req = Http::async()->get('https://dummy.restapiexample.com/api/v1/employees?results=');
        $response = $req->wait();
        $jsonContent = $response->body();
        $data = '';

        echo $response->status();

        if (!empty($jsonContent)) {
            $jsonObject = json_decode($jsonContent);

            if ($jsonObject !== null && isset($jsonObject->data)) {
                $data = $jsonObject->data;
                // Use the 'data' property as needed
                return view('apiview', ['collection' => $data]);
            } else {
                // Handle the case when 'data' property is missing or null
                return view('apiview', ['collection' => $data]);
            }
        } else {
            // Handle the case when the response body is empty
            return "body is empty";
        }
    }
}
