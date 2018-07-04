@extends('layouts.header')

@section('content')
<br><br><br>

<div class="ui container" name="timedeposit">

	{{--  Error Handling, please style this part  --}}
	@if($errors->any())
		<h2>
			<b> {{ $errors->first('messages') }} </b>
		</h2> 
	@endif
 
	<form action="{{ route('user-timedeposit-query') }}" method="POST">
		@csrf
		<h2 class="ui dividing header">Time Deposit</h2>

		<table class="ui single line table">
			<thead>
				<tr>
				<th colspan="2">Time Deposit Details</th>
				</tr>
			</thead>
			<tbody>
				{{--  Payment method  --}}
				<tr>
					<td>Mode</td>
					<td>Cash</td>
				</tr>
				<tr>
					<td>Withhold Duration (min. 2 years)</td>
					<td>
						<input type="number" class="ui input" name="min_year" placeholder="Duration" min="2" value="2"> 
					</td>
				</tr>
				<tr>
					<td>Amount (min. Pesos 1,000)</td>
					<td>
						<input type="number" name="initial_amount" value="1000" class="ui input" placeholder="Input Amount" min="1000">
					</td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<center><input type="submit" name="timedepositmoney" value="Deposit Money" class="ui primary button"></center>
	</form>	
</div>

<br><br><br>    
@endsection
