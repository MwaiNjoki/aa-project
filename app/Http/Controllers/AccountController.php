<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function store(Request $request)
    {
        $accounts = new \App\Account;
        $accounts->acc_name = request('acc_name');
        $accounts->address = request('address');
        $accounts->save();
        return redirect()->back();
    }
}
