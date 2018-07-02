@extends('layouts.header')

@section('content')
<br><br><br>

<div class="ui container" name="withdraw">

	 {{--  Error Handling, please style this part  --}}
	 @if($errors->any())
		<h2>
			<b> {{ $errors->first('messages') }} </b>
		</h2> 
	 @endif

	<h2 class="ui dividing header">Withdraw Money</h2>
	<form action="{{ route('user-withdraw-query') }}" method="POST" >
		@csrf
		<table class="ui single line table">
			<thead>
				<tr>
					<th colspan="2">Withdraw Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Account</td>
				<td>Savings</td>
			</tr>
			<tr>
				<td>PIN </td>
				<td>
					<input type="password" name="password" value="" class="ui input" placeholder="Input PIN">
				</td>
			</tr>
			<tr>
				<td>Amount</td>
				<td>
					<input type="number" name="amount" value="{{ old('amount') }}" class="ui input" placeholder="Input Amount">
				</td>
			</tr>
		</tbody>
		</table>
		
		<br><br>
		
		
		<center><input type="submit" name="withdraw" value="Withdraw Money" class="ui primary button"></center>
	</form>
	
</div>

<br><br><br>    
@endsection
