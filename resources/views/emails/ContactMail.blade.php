<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <br>
    <h4>Filipe you've received the following email: </h4><br>
<p>Name: {{$details['name']}}</p>
<p>Email: {{$details['email']}}</p>
<p>Message: {{$details['msg']}}</p>
</body>
</html>
