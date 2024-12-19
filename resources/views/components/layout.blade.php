{{-- This is a Component whit a Class. So you need to use $Slot to render the view inside it --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   @vite(['resources/js/app.js'])
   
   
   
    {{-- Exemple: IF NOT DECLARED $title need be accessed this way  --}}
    {{-- <title>{{ $attributes->get('title') }}</title> --}}


    {{-- Exemple: In this case $title must be declared in the construc function in layout's class --}}
    {{-- Obs: Better way, can be set a default value on constructor --}}
    <title>{{ $title }}</title>

</head>
<body>

  


    {{-- Exemple: Slot passed with component --}}
    <x-header class="fs-5 text-center text-white" title="headerFromComponents-Pass for a  SLOT "/>
    

    <div class="menu">
        @if(isset($menu))
        {{ $menu ?? ''}}
        @endif
    </div>


    
    {{-- Exemple: Slot with name --}}
    {{-- Obs: Not a good way to deal with headers and footers --}}
    {{-- {{ $header }} --}}

    <div class="container">
        {{-- Slot without name --}}
        {{ $slot }}  
    </div>

      {{-- Exemple: Slot with name --}}
          {{-- Obs: Not a good way to deal with headers and footers --}}
    {{-- {{ $footer }} --}}

    <x-footer></x-footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>