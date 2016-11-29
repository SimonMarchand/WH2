<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('user')->get();
        return view('client/index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('client/create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->firstName = $request->get('firstName');
        $user->lastName = $request->get('lastName');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->save();
        $client = new Client();
        $client->city = $request->get('city');
        $client->postalCode = $request->get('postalCode');
        $client->address1 = $request->get('address1');
        $client->user_id = $user->id;
        $client->save();
        return redirect(route('clients.index'));
    }

    public function show($idClient)
    {
        $client=Client::with('user')->findOrFail($idClient);
        dd($client);
    }

}
