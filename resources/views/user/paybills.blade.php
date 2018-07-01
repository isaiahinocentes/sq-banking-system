@extends('layouts.header')

@section('content')
<br><br><br>
<div class="ui container" name="paybills">

	<h2 class="ui dividing header">Pay Bills</h2>

	<table class="ui single line table">
		<thead>
			<tr>
			<th colspan="3">Billing Details</th>
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
				<td>Bill Account No.</td>
				<td>
					<input type="text" name="billaccountnum" value="" class="ui input" placeholder="Input Bill Account Number">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Merchant</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="meralco">Meralco</option>
						<option value="maynilad">Maynilad</option>
						<option value="pldt">PLDT</option>
					</select>
				</td>
				<td></td>
			</tr>
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
				<td>Account No</td>
				<td>
					<select class="ui dropdown">
						<option value="">Choose One</option>
						<option value="1234567891234">123456789123(SA-PHP-Living Expenses)</option>
						<option value="345678912345">345678912345(SA-PHP-Future Savings)</option>
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


	<center><input type="submit" name="paybill" value="Pay Bill" class="ui primary button"></center>
	
</div>
<br><br><br>
@endsection
