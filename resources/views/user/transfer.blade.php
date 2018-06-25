@extends('layouts.header')

@section('content')
    <div class="container">
        <form>
            @csrf
            <div class="ui container" name="fundtransfer">
                <h2 class="ui dividing header">Fund Transfer</h2>
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
                                <input type="text" name="account_num" value="" class="ui input" placeholder="Input Account Number">
                            </td>
                        </tr>
                        {{-- Amount --}}
                        <tr>
                            <td>Amount</td>
                            <td>
                                <input type="text" name="amount" value="" class="ui input" placeholder="Input Amount">
                            </td>
                        </tr>
                        {{-- Remarks --}}
                        <tr>
                            <td>Remarks</td>
                            <td>
                                <input type="text" name="remark" value="" class="ui input" placeholder="Comments">
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
