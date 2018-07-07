@extends('layouts.header')

@section('content')
	<div class="ui message" style="width: 100%;">
		<div class="header center">
			Welcome, {{ auth()->user()->name }}
		</div>
	</div>
    <br/>
	<div class="ui container" name="notifications">
		<h2 class="ui dividing header">Notifications</h2>
		<div class="ui segments">
			@foreach($data['deposits'] as $d)
                <div class="ui segment">
                    <p>Deposited: {{ $d->amount }} at <i>{{ $d->created_at }}</i></p>
                </div>
            @endforeach

            @foreach($data['withdraws'] as $d)
                <div class="ui segment">
                    <p>Withdrew: {{ $d->amount }} at <i>{{ $d->created_at }}</i></p>
                </div>
            @endforeach

            @foreach($data['timedeposits'] as $d)
                <div class="ui segment">
                    <p>Time Deposited: {{ $d->intial_amount }} at <i>{{ $d->created_at }}</i></p>
                </div>
            @endforeach

            @foreach($data['receives'] as $d)
                <div class="ui segment">
                    <p>
                        Received: {{ $d->amount }}
                        from {{ App\Library\ClassFactory::model('User')->find($d->sender_id)->name }}
                        at <i>{{ $d->created_at }}</i>
                    </p>
                </div>
            @endforeach

            @foreach($data['transfers'] as $d)
                <div class="ui segment">
                    <p>
                        Transferred Funds: {{ $d->amount }}
                        to {{ App\Library\ClassFactory::model('User')->find($d->recipient_id)->name }}
                        at <i>{{ $d->created_at }}</i>
                    </p>
                </div>
            @endforeach
		</div>
	</div>

	<br><br><br>

	<div class="ui container" name="savings">
		<h2 class="ui dividing header">Savings and Time Deposits</h2>
		<table class="ui single line table">
			<thead>
				<tr>
                    <th>Currency</th>
                    <th>Account Type</th>
                    <th>Current Balance</th>
                    <th>Date Created</th>
				</tr>
			</thead>
			<tbody>
                <tr>
					<td>PHP</td>
					<td>Savings</td>
					<td>{{ auth()->user()->balance }}</td>
					<td>{{ auth()->user()->created_at }}</td>
				</tr>
                @foreach(auth()->user()->timedeposits()->get() as $td)
				<tr>
					<td>PHP</td>
					<td>Time Deposit</td>
					<td>{{ $td->initial_amount }}</td>
					<td>{{ $td->created_at }}</td>
				</tr>
                @endforeach
			</tbody>
		</table>
	</div>

	<br>
	<br>
	<br>

@endsection
