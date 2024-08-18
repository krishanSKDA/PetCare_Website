<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchasedRequest;
use App\Http\Requests\UpdatePurchasedRequest;
use App\Models\Purchased;

class PurchasedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchased = Purchased::paginate();

        return view('purchased',compact('purchased'));
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
    public function store(StorePurchasedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchased $purchased)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchased $purchased)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchasedRequest $request, Purchased $purchased)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchased $purchased)
    {
        //
    }
}
