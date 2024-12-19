<div>
   {{-- Exemple: Using $attributes -> Can't be initialized with the constructor --}}
   {{-- <form {{ $attributes}}> --}}
   
   <form action="{{$action}}" method="{{$method}}" >
    @csrf

  {{ $slot }}

   </form>
</div>