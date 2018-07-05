@extends('layouts.header')

@section('content')

    <br>
    <br>
    <br>

    <div class="ui container" name="transactiondetails">

        <h2 class="ui dividing header">My Transactions</h2>
        @foreach($data['transfers'] as $tr)
            @if($tr->sender_id == auth()->user()->id or 
                $tr->recipient_id == auth()->user()->id)
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">transaction id: {{ $tr->id }}</span>
                                <span class="card-body">
                                    <div>
                                        Sender ID: {{ $tr->sender_id }}
                                        <br/>
                                        Recipient ID: {{ $tr->recipient_id }}
                                        <br/>
                                        Amount: {{ $tr->amount }}
                                        <br/>
                                        Remarks: {{ $tr->remarks }}
                                    </div>
                                    <div>
                                        Date: {{ $tr->created_at }}
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        
        @foreach($data['withdraws'] as $wd)
            @if($wd->account_no == auth()->user()->id)
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Witdraw ID: {{ $wd->id }}</span>
                                <span class="card-body">
                                    <div>
                                        Account: {{ $wd->account }}
                                        <br/>
                                        Amount: {{ $wd->amount }}
                                    </div>
                                    <div>
                                        Date: {{ $wd->created_at }}
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach($data['deposits'] as $dp)
            @if($dp->account_no == auth()->user()->id)
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Deposit ID: {{ $dp->id }}</span>
                                <span class="card-body">
                                    <div>
                                        Name: {{ $dp->name }}
                                        <br/>
                                        Type: {{ $dp->type }}
                                        <br/>
                                        Amount: {{ $dp->amount }}
                                    </div>
                                    <div>
                                        Date: {{ $dp->created_at }}
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach($data['timedeposits'] as $td)
            @if($td->account_number == auth()->user()->id)
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Time Deposit ID:{{ $td->id }}</span>
                                <span class="card-body">
                                    <div>
                                        Initial Amount: {{ $td->intial_amount }}
                                        <br/>
                                        Intereset Rate: {{ $td->interest_rate }}%
                                        <br/>
                                        Year: {{ $td->min_year }}
                                        <br/>
                                        Status: {{ $td->status }}
                                    </div>
                                    <div>
                                        Date: {{ $td->created_at }}
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <br>
    <br>
    <br>

@endsection