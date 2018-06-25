@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="ui container" name="fundtransfer">
        <h2 class="ui dividing header">Fund Transfer</h2>
        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="3">Transfer Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Transfer From </td>
                    <td>
                        <select class="ui dropdown">
                            <option value="">Choose One</option>
                            <option value="1234567891234">123456789123(SA-PHP-Living Expenses)</option>
                        </select>
                    </td>
                    <td><a>View Balance</a></td>
                </tr>
                <tr>
                    <td>Transfer To </td>
                    <td>
                        <select class="ui dropdown">
                            <option value="">Choose One</option>
                            <option value="345678912345">345678912345</option>
                            <option value="input">Input Account No. </option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="accountnum" value="" class="ui input" placeholder="Input Account Number">
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input type="text" name="amount" value="" class="ui input" placeholder="Input Amount">
                    </td>
                </tr>
                <tr>
                    <td>Remarks</td>
                    <td>
                        <input type="text" name="remarks" value="" class="ui input" placeholder="Comments">
                    </td>
                </tr>
            </tbody>
        </table>


        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="3">Transfer Schedule</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="ui radio checkbox">
                            <input type="radio" name="radio" checked="checked">
                            <label>Immediately</label>
                        </div>
                    </td>
                    <td>
                        <div class="ui radio checkbox">
                            <input type="radio" name="radio" checked="checked">
                            <label>Later Date</label>
                        </div>
                    </td>
                    <td>
                        <input type="date" name="date" value="" class="ui input">
                    </td>
                </tr>
                
            </tbody>
        </table>

        <table class="ui single line table">
            <thead>
                <tr>
                    <th colspan="2">Add To My Transfers</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Save to My Transfers As
                    </td>
                    <td>
                        <input type="text" name="date" value="" class="ui input" placeholder="Input Name">
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
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    </div>
@endsection
