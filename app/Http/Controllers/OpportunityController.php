<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    //
    public function store(Request $request)
    {
        $accounts = new \App\Opportunity;
        $accounts->name_of_acc = request('name_of_acc');
        $accounts->stage = request('stage');
        $accounts->amount = request('amount');
        $accounts->opportunity = request('opportunity');
        $accounts->save();
        return redirect()->back();
    }
}
