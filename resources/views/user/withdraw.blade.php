@extends('layouts.header')

@section('content')
<br><br><br>

<div class="ui container" name="withdraw">

	<h2 class="ui dividing header">Withdraw Money</h2>

	<table class="ui single line table">
		<thead>
			<tr>
			<th colspan="2">Withdraw Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Account</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="current">Current</option>
						<option value="savings">Savings</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>PIN </td>
				<td>
					<input type="password" name="pin" value="" class="ui input" placeholder="Input PIN">
				</td>
			</tr>
			<tr>
				<td>Amount</td>
				<td>
					<input type="number" name="amount" value="" class="ui input" placeholder="Input Amount">
				</td>
			</tr>
		</tbody>
	</table>

	<br><br>


	<center><input type="submit" name="withdraw" value="Withdraw Money" class="ui primary button"></center>
	
</div>

<br><br><br>    
@endsection
