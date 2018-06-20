<?php

namespace App\Http\Controllers;
use App\Customer;

use App\Results;
use Illuminate\Http\Request;

class RetrieveController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()

    {
        $customers = Customer::all()->toArray();

        return view('final', compact('customers'));
    }
}