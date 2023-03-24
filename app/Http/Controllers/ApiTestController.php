<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientType;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $clientTypes = [
        //     ['name' => 'Individual'],
        //     ['name' => 'Business'],
        //     ['name' => 'Government']
        // ];

        // foreach ($clientTypes as $clientType) {
        //     $newClientType = new ClientType();
        //     $newClientType->name = $clientType['name'];
        //     $newClientType->save();
        // }

        //clientType olustur
        $clientType = ClientType::create(['name' => 'Individual']);

        //client olustur
        $client = Client::create(
            [
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'johndoe@example.com',
                'password' => 'secret',
                'client_type_id' => $clientType->id
            ],
        );

        return $client;
       // return Client::all();



        //property type olustur


        //property olustur



        //property image olustur



        //feature olustur


        //property feature olustur

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
