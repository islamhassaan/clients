<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    // Display a listing of the clients.
    public function index()
    {
        $clients = Client::orderBy('full_english_name', 'asc')->paginate(5);
        return view('index', ['clients' => $clients]);
    }


    // Show the form for creating a new client.
    public function create()
    {
        return view('create');
    }


    // Store a new client
    public function store(Request $request)
    {
        $client = new Client($request->all());
        $client->save();
        return redirect()->route('clients.index');
    }


    // How search input work
    public function search(Request $request)
    {

        $clients = Client::where('full_english_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('full_arabic_name', 'LIKE', '%' . $request->search . '%')->paginate();

        return view('index', ['clients' => $clients]);
    }

}