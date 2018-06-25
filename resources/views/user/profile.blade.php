@extends('layouts.header')
@section('content')
    <div class="ui container" name="settings">
        <h2 class="ui dividing header">Settings</h2>
    
        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="2">Change Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Old Password </td>
                    <td>
                        <input type="text" name="oldpass" value="" class="ui input" placeholder="Input Old Password">
                    </td>
                </tr>
                <tr>
                    <td>New Password </td>
                    <td>
                        <input type="text" name="newpass" value="" class="ui input" placeholder="Input New Password">
                    </td>
                </tr>
                <tr>
                    <td>Confirm New Password </td>
                    <td>
                        <input type="text" name="confirmpass" value="" class="ui input" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <input type="submit" name="changepass" value="Change Password" class="ui primary button">
                </tr>
                
            </tbody>
        </table>
    
        <table class="ui single line table">
            <thead>
                <tr>
                <th colspan="3">Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mobile Number</td>
                    <td>123456789</td>
                    <td>
                        <input type="text" name="newnumber" value="" class="ui input" placeholder="Input New Number">
                    </td>
                </tr>
                <tr>
                    <td>Email Address </td>
                    <td>sampleemail@gmail.com</td>
                    <td>
                        <input type="text" name="newemail" value="" class="ui input" placeholder="Input New Email">
                    </td>
                </tr>
                <tr>
                    <td>Alternate Email Address </td>
                    <td>samplealternateemail@gmail.com</td>
                    <td>
                        <input type="text" name="newaltemail" value="" class="ui input" placeholder="Input New Alternate Email">
                    </td>
                </tr>
                <tr>
                    <input type="submit" name="changeinfo" value="Update" class="ui primary button">
                </tr>
            </tbody>
        </table>
    </div>
    
    <br>
    <br>
    <br>    
@endsection
