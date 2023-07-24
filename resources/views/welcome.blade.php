<!DOCTYPE html>
<html>
<head>
    <style>
        #divElement{
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -50px;
            width: 100px;
            height: 100px;
        }​
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Livewire Counter Example</title>
    @livewireStyles
</head>
    <body>
        <h3 class="mt-3 ms-3"> Counter using Livewire </h3>
        
        <livewire:counter />
    
        @livewireScripts
    </body>
</html>
