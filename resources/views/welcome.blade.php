<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <title>Document</title>
</head>
<body>
    <h2>Hola mundo</h2>
    @livewire('hello-world') 


    <h2>Countries</h2>
    @livewire('countries')

    <h2>Nested (childs)</h2>
    @livewire('live-father') 

    <h2>Events (communication between two components)</h2>
    @livewire('time-container')

    @livewireScripts 
</body>
</html>