<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body style= "background-color:lightcoral;">
@include('css')
@yield('content')
<a> User </a>
</body>