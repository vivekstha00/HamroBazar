<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Client;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home(){
        return view('frontend.home');
    }
    public function clientRequest(Request $request){

        $request->validate([
            'client_name' => 'required|string|max:255',
            'shop_name' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|unique:clients,email',
            'address' => 'required|string|max:500',
            'terms' => 'required|accepted',
        ]);
        $client = new Client();
        $client->client_name = $request->input('client_name');
        $client->shop_name = $request->input('shop_name');
        $client->contact = $request->input('contact');
        $client->email = $request->input('email');
        $client->address = $request->input('address');
        $client->save();
        return redirect()->back()->with('success', 'Client request submitted successfully!');

    }
}
