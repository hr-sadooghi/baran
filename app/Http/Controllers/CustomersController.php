<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index()
    {
    	return view('customers.index');
    }

	public function store()
	{
		dd(request()->all());
	}

	public function create()
	{
		return view('customers.create');
	}

}
