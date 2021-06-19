<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function index($kf = null)
    {
        $response = Http::get('https://webapi.bps.go.id/v1/api/list/model/subject/domain/3215/page/'.$kf.env('BPS_WEBAPI_KEY'))->json();
        return $response['data'][1];

    }


}
