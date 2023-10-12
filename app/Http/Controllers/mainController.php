<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function name()
    {
        $jsonString = '{"message": "ნიკა}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    public function lastName()
    {
        $jsonString = '{"message": "ყაულაშვილი"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    public function hobby()
    {
        $jsonString = '{"message": "ნადირობა, თევზაობა"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    public function university()
    {
        $jsonString = '{"message": "ბიზნესის და ტექნოლოგიების"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    public function age()
    {
        $jsonString = '{"message": "21 წლის"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function post()
    {
        $jsonString = '{"message": "დამატება"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function put()
    {
        $jsonString = '{"message": "რედაქტირება"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function delete()
    {
        $jsonString = '{"message": "წაშლა"}';
        $jsonData = json_decode($jsonString);

        return view('your.blade.view', ['jsonData' => $jsonData]);
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
