@extends('layouts.header')

@section('content')
<br><br><br>


<div class="ui container" name="deposit">

	<h2 class="ui dividing header">Deposit Money</h2>

	<table class="ui single line table">
		<thead>
			<tr>
			<th colspan="3">Deposit Details</th>
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
				<td>Account No.</td>
				<td>
					<input type="text" name="accountnum" value="" class="ui input" placeholder="Input Account Number">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" value="" class="ui input" placeholder="Input Account Holder's Name">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Type of Deposit</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="current">Cash</option>
						<option value="savings">Check</option>
					</select>
				</td>
				<td>
					<input type="text" name="checknum" value="" class="ui input" placeholder="Input Check Number">
				</td>
			</tr>
			<tr>
				<td>Amount</td>
				<td>
					<input type="number" name="amount" value="" class="ui input" placeholder="Input Amount">
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>

	<br><br>


	<center><input type="submit" name="deposit" value="Deposit Money" class="ui primary button"></center>
	
</div>

<br><br><br>
    
@endsection
