<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=", initial-scale=1.0">
    <title>Laravel Project 2</title>
</head>
<body>
    <h1>Hello beautiful world !</h1> 
    <h1>Demo page</h1>
    @if($name=='Anik')
        {{$name}} 
        {{$Id}}
    @else 
        {{'This is not Anik Barua'}}
    @endif
</body>
</html>