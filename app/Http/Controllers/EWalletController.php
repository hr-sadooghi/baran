<?php

namespace App\Http\Controllers;

use App\EWallet;
use Illuminate\Http\Request;

class EWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EWallet::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function show(EWallet $eWallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(EWallet $eWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EWallet $eWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EWallet  $eWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(EWallet $eWallet)
    {
        //
    }
}
