<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Opportunity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $accounts = Account::all();
        $opportunities = Opportunity::all();
        return view('home', compact('accounts', 'opportunities'));
    }
}
