<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Ip2Region;
use Illuminate\Http\Request;

class IPController extends Controller
{
    public function getIpRegion($ip = null)
    {
        $ip2region = new Ip2Region();
        $result = $ip2region->simple($ip);
        

        // Optionally, you can return the result as a JSON response
        return response()->json($result);
    }
    public function show(Request $request, $ip = null)
    {
        
        $ip2region = new Ip2Region();
        $result = $ip2region->simple($ip);
        return view('welcome', [
            "message" => $result,
            "IP" => $ip
        ]);
    }
}
