@extends('layouts.header')

@section('content')

    <br>
    <br>
    <br>

    <div class="ui container" name="transactiondetails">

        <h2 class="ui dividing header">My Transactions</h2>

        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="2">Search Transaction</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Currency </td>
                    <td>
                        <select class="ui dropdown">
                            <option value="all">ALL</option>
                            <option value="php">PHP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Transaction Type </td>
                    <td>
                        <select class="ui dropdown">
                            <option value="">Choose One</option>
                            <option value="1234567891234">123456789123</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Account No. </td>
                    <td>
                        <select class="ui dropdown">
                            <option value="">Choose One</option>
                            <option value="debit">Debit</option>
                            <option value="credit">Credit</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
        <br>
        
        <center>
            <input type="submit" name="search" value="Search" class="ui primary button">
        </center>	
    </div>

    <br>
    <br>
    <br>

@endsection