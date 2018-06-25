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
                <tr>
                    <td>BALANCE</td>
                    <td>
                        <h1> PHP {{ auth()->user()->balance }} </h1>
                    </td>
                </tr>
                <tr>
                    <td>ACCOUNT NUMBER</td>
                    <td>
                        <h1> {{ auth()->user()->id }} </h1>
                    </td>
                </tr>
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
                <tr>
                    <td>Alternate Email</td>
                    <td>
                        {{ auth()->user()->alt_email }}
                    </td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>
                        {{ auth()->user()->mobile }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <br>
    <br>
    <br>    
@endsection
