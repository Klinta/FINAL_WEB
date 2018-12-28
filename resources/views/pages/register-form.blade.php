<?php
    $title = 'Register form';
?>
@include('layouts/header')
<h1>Registration Form</h1>
Use tab keys to move from one input field to the next.
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form name="registration" method="POST" onSubmit="return formValidation();">
    {{ csrf_field() }}
    <ul>
        <li><label for="username">Name:</label></li>
        <li><input type="text" name="username" id="usernameid" size="50" /></li>
        <li><label for="passid">Password:</label></li>
        <li><input type="password" name="pass" id="passid" size="12" /></li>
        <li><label for="email">Email:</label></li>
        <li><input type="text" name="email" id="emailid" size="50" /></li>
        <li><input type="submit" name="submit" value="Submit" /></li>
    </ul>
    <div align="center">
    <iframe width="900" height="500" src="https://www.youtube.com/embed/y6mRXBwjocc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen;></iframe>
    </div>
    </form>

@include('layouts/footer')
