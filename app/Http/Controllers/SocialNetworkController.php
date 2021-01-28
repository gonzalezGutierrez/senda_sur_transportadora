<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{

    public function addUpdate(Request $request)
    {
        $socialNetworks = SocialNetwork::first();

        if ($socialNetworks == null){
            $socialNetworks = new SocialNetwork();
        }


        return view('administracion.social_network.addUpdate',compact('socialNetworks'));
    }

    public function storeUpdate(Request $request) {

        $socialNetworks = SocialNetwork::first();

        if ($socialNetworks == null) {
            $socialNetworks = new SocialNetwork();
        }

        $socialNetworks->facebook_url = $request->facebook_url;
        $socialNetworks->whatsaap     = $request->whatsaap;
        $socialNetworks->instagram_url = $request->instagram_url;
        $socialNetworks->email         = $request->email;

        $socialNetworks->save();

        return back();

    }

}
