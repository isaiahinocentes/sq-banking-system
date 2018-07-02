@extends('layouts.header')

@section('content')
<br><br><br>


<div class="ui container" name="deposit">

	 {{--  Error Handling, please style this part  --}}
	 @if($errors->any())
		<h2>
			<b> {{ $errors->first('messages') }} </b>
		</h2> 
	 @endif
	 
	<h2 class="ui dividing header">Deposit Money</h2>
	<form action={{ route('user-deposit-query') }} method="POST">
		@csrf
		<table class="ui single line table">
			<thead>
				<tr>
					<th colspan="3">Deposit Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Account No.</td>
				<td>
					{{--  account_num  --}}
					<input type="text" name="account_no" value="{{ old('account_num') }} " class="ui input" placeholder="Input Account Number">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					{{--  name  --}}
					<input type="text" name="name" value="{{ old('name') }}" class="ui input" placeholder="Input Account Holder's Name">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Type of Deposit</td>
				<td>Cash</td>
			</tr>
			<tr>
				<td>Amount</td>
				<td>
					{{--  amount  --}}
					<input type="number" name="amount" value="{{ old('amount') }}" class="ui input" placeholder="Input Amount">
				</td>
				<td></td>
			</tr>
		</tbody>
		</table>
	
		<br><br>

		<center><input type="submit" name="deposit" value="Deposit Money" class="ui primary button"></center>
	</form>
	
</div>

<br><br><br>
    
@endsection
