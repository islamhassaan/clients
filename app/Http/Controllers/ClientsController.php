<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientsController extends Controller
{

    // Display a listing of the clients.
    public function index()
    {
        $clients = Client::orderBy('full_english_name', 'asc')->paginate(5);

        foreach ($clients as $client) {
            $client->setAttribute('temp', $this->getWeather($client->country));
        }

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

    // Edit a client
    public function update(Request $request, Client $client)
    {

        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        return view('edit', ['client' => $client]);
    }


    // How search input work
    public function search(Request $request)
    {

        $clients = Client::where('full_english_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('full_arabic_name', 'LIKE', '%' . $request->search . '%')->paginate();

        return view('index', ['clients' => $clients]);
    }


    // Get the country weather using guzzlehttp
    public function getWeather($country)
    {
        $response = Http::get("http://api.weatherapi.com/v1/current.json?key=54a624731e7a487b9f7105124220307&q=$country&aqi=no");
        $weather = $response->json();

        return $weather['current']['temp_c'];
    }

}