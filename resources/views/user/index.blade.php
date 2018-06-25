@extends('layouts.header')

@section('content')
	<br>
	<br>
	<br>

	<div class="ui message" style="width: 70%; margin-left: 8%;">
		<div class="header">
			Welcome, INSERT USERNAME! 
		</div>
		<br>
		<p>Your last log in was INSERT DATE/TIMESTAMP.</p>
		<p>You have INSERT NUMBER invalid login attempt(s).</p>
	</div>

	<br>
	<br>

	<div class="ui container" name="notifications">
		<h2 class="ui dividing header">Notifications</h2>
		<div class="ui segments">
			<div class="ui segment">
			<p>Sample Notification</p>
			</div>
			<div class="ui segment">
			<p>Sample Notification</p>
			</div>
			<div class="ui segment">
			<p>Sample Notification</p>
			</div>
		</div>	
	</div>

	<br><br><br>

	<div class="ui container" name="savings">
		<h2 class="ui dividing header">Savings and Checking</h2>
		<table class="ui single line table">
			<thead>
				<tr>
				<th>Currency</th>
				<th>Account Type</th>
				<th>Nickname</th>
				<th>Account No.</th>
				<th>Current Balance</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>PHP</td>
					<td>SA</td>
					<td>Living Expenses</td>
					<td>123456789123</td>
					<td>55555.55</td>
				</tr>
				<tr>
					<td>USD</td>
					<td>SA</td>
					<td>Future Savings</td>
					<td>345678912345</td>
					<td>777777.77</td>
				</tr>
			</tbody>
		</table>
	</div>

	<br>
	<br>
	<br>

@endsection
