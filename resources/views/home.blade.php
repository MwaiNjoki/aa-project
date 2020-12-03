@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background:green;color:white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card" style="margin-top:50px;background:yellow;color:greens">
                <div class="card-header">Create Accounts</div>

                <div class="card-body">
                    <form action="/account" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="accountName">Account Name</label>
                            <input type="text" name="acc_name" class="form-control" id="accountName" aria-describedby="accountHelp" required>

                        </div>
                        <div class="form-group">
                            <label for="addresss">Address</label>
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                        <button type="submit" class="btn" style="background:green;color:white">Create Account</button>
                    </form>
                </div>
            </div>
            <div class="card" style="margin-top:50px;margin-bottom:40px;background:green;color:yellow">
                <div class="card-header">Create Opportunities</div>

                <div class="card-body">
                    <form action="/opportunities" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name-of-acc">Account Name</label>
                            <select class="form-control form-control-lg" name="name_of_acc" required>
                                @foreach($accounts as $account)
                                <option value="{{$account->acc_name}}">{{$account->acc_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="opportunity">Opportunity</label>
                            <input type="text" name="opportunity" class="form-control" id="opportunity" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" id="amount" required>
                        </div>
                        <div class="form-group">
                            <label for="stage">Stage</label>
                            <select class="form-control form-control-lg" name="stage" required>
                                <option>Select</option>
                                <option>Discovery</option>
                                <option>Proposal Shared</option>
                                <option>Negotiations</option>
                            </select>
                        </div>

                        <button type="submit" class="btn" style="background:yellow">Create Account</button>
                    </form>
                </div>
            </div>
            <div>
                <h4>All Opportunities</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Opportunity</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Stage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($opportunities as $opportunity)
                    <tr>
                        <td>{{$opportunity->id}}</td>
                        <td>{{$opportunity->name_of_acc}}</td>
                        <td>{{$opportunity->opportunity}}</td>
                        <td>{{$opportunity->amount}}</td>
                        <td>{{$opportunity->stage}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection