@extends('layouts.header')

@section('content')
    <div class="container">
        
        {{--  Error Handling, please style this part  --}}
        @if($errors->any())
            <h2>
                <b> {{ $errors->first('messages') }} </b>
            </h2> 
        @endif

        <form action="{{ route('user-query') }}" method="POST">
            @csrf
            <div class="ui container" name="fundtransfer">
                <h2 class="ui dividing header">Fund Transfer</h2>
                
                {{-- table  --}}
                <table class="ui single line table">
                    <thead>
                        <tr>
                            <th colspan="3">Transfer Details</th>
                        </tr>
                    </thead>
                    
                    {{-- Table Body --}}
                    <tbody>
                
                        {{-- Balance --}}
                        <tr>
                            <td>BALANCE</td>
                            <td colspan="2">
                                <h1>
                                    PHP {{ auth()->user()->balance}}
                                </h1>
                            </td>
                        </tr>

                        {{-- Account Number --}}
                        <tr>
                            <td>Transfer To </td>
                            <td colspan="2">
                                <input type="text" name="recipient_id" value="{{ old('recipient_id')}}" class="ui input" placeholder="Input Account Number" required autofocus>
                            </td>
                        </tr>
                        
                        {{-- Amount --}}
                        <tr>
                            <td>Amount</td>
                            <td>
                                <input type="number" name="amount" value="{{ old('amount') }}" class="ui input" placeholder="Input Amount" required>
                            </td>
                        </tr>
                        
                        {{-- Remarks --}}
                        <tr>
                            <td>Remarks</td>
                            <td>
                                <input type="text" name="remarks" value="{{ old('remarks') }}" class="ui input" placeholder="Comments" required>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <br>
        
                <center>
                    <input type="submit" name="transfer" value="Transfer Money" class="ui primary button">
                </center>
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>
    
@endsection
