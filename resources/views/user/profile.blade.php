@extends('layouts.header')
@section('content')
    <div class="ui container" name="settings">

        <h2 class="ui dividing header">Your Profile</h2>

        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="2">Personal Information</th>
                </tr>
            </thead>
            <tbody>
                {{--  Account Number  --}}
                <tr>
                    <td>ACCOUNT NUMBER</td>
                    <td>
                        <h1> {{ auth()->user()->id }} </h1>
                    </td>
                </tr>

                {{--  Balance  --}}
                <tr>
                    <td>BALANCE</td>
                    <td>
                        <h1> PHP {{ auth()->user()->balance }} </h1>
                    </td>
                </tr>

                {{--  Time Deposit  --}}
                <tr>
                    <td>TIME DEPOSIT</td>
                    <td>
                        <ul>
                            @foreach($data['timedeposits'] as $td)
                            <li>
                                Initial Amount: {{ $td->initial_amount }}
                                <br/>
                                Interest Rate: {{ $td->interest_rate }}
                                <br/>
                                Year/s: {{ $td->min_year }}
                                <br/>

                                {{--  Compute for Expected Amount  --}}
                                @php
                                    $expected = 0;
                                    for($i = 0; $i < $td->min_year; $i++){
                                        $expected += ($td->initial_amount * ( 1 + $td->interest_rate));
                                    }
                                @endphp

                                Expected Amount: {{ $expected }}
                            </li>

                            @endforeach
                        </ul>
                    </td>
                </tr>

                {{--  Name  --}}
                <tr>
                    <td>Name </td>
                    <td>
                        {{ auth()->user()->name }}
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        {{ auth()->user()->email }}
                    </td>
                </tr>
                {{--<tr>--}}
                    {{--<td>Alternate Email</td>--}}
                    {{--<td>--}}
                        {{--{{ auth()->user()->alt_email }}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Mobile Number</td>--}}
                    {{--<td>--}}
                        {{--{{ auth()->user()->mobile }}--}}
                    {{--</td>--}}
                {{--</tr>--}}
            </tbody>
        </table>
    </div>

    <br>
    <br>
    <br>
@endsection
