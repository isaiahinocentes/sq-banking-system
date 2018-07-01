@extends('layouts.header')

@section('content')
<br><br><br>

<div class="ui container" name="timedeposit">

	<h2 class="ui dividing header">Time Deposit</h2>

	<table class="ui single line table">
		<thead>
			<tr>
			<th colspan="2">Time Deposit Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Reference No.</td>
				<td>
					SYSTEM GENERATED
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Mode</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="current">Cash on Hand</option>
						<option value="check">Check</option>
						<option value="savings">Savings/Current</option>
					</select>
				</td>
				<td>
					<input type="text" name="num" value="" class="ui input" placeholder="Input Check Number/Account Number">
				</td>
			</tr>
			<tr>
				<td>Withhold Duration</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="2">2 years</option>
						<option value="5">5 years</option>
						<option value="8">8 years</option>
						<option value="11">11 years</option>
					</select>
				</td>
				<td></td>
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


	<center><input type="submit" name="timedepositmoney" value="Deposit Money" class="ui primary button"></center>
	
</div>

<br><br><br>    
@endsection
