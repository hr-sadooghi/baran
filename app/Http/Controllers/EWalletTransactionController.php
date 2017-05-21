<?php

namespace App\Http\Controllers;

use App\EWalletTransaction;
use Illuminate\Http\Request;

class EWalletTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EWalletTransaction::where('e_wallet_id', 1)->get();
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
     * @param  \App\EWalletTransaction  $eWalletTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(EWalletTransaction $eWalletTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EWalletTransaction  $eWalletTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(EWalletTransaction $eWalletTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EWalletTransaction  $eWalletTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EWalletTransaction $eWalletTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EWalletTransaction  $eWalletTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(EWalletTransaction $eWalletTransaction)
    {
        //
    }
}
