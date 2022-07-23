<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function GetClients(){
        $clients = Client::all();
        return $clients;
    }

    public function InsertClient(Request $request){
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->address = $request->address;

        $client->save();
        return $request;
    }
}
