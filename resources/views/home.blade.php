
{{-- Exemple: Whit Component and no named slot --}}
{{-- <x-layout>
    <h2>Home</h2>
</x-layout> --}}

{{-- Exemple: Whitout Component and named slot --}}
{{-- Obs: Not a good way to deal with headers and footers --}}
{{-- Exemple: One way to pass the $title --}}
{{-- <x-layout title="Home"> --}}

{{-- Exemple: Another way to pass the $title --}}  
<x-layout>

    <x-alerts.alert type="success">Sucesso</x-alerts.alert>
    <x-alerts.alert type="danger">Deu Ruim</x-alerts.alert>
    <x-alerts.alert >Apenas Info - sem type - sem color</x-alerts.alert>
    <x-alerts.alert color="blue">Apenas Info $color blue</x-alerts.alert>
    
    {{-- Using classless components --}}
    {{-- Althought it dosen't have class, need to be create via "php artisan make:component "name" --view" --}}
    <x-class-less.flash message="message: success is everithing" color="orange" >Usando componente sem Classe </x-class-less.flash>
    <x-class-less.flash message="message: Que deselegante" >Usando componente sem Classe. </x-class-less.flash>
    <x-class-less.flash message="message: Usando valor color padrão" >Ohmmmm. </x-class-less.flash>


    <x-class-less.flash :message="$mensagem" color="red">Ohmmmm. </x-class-less.flash>

    



    
    {{-- Exemple Modal: Another way to pass the $message -> Needs to be initalize in the controller --}}  
    {{-- <x-modal title="meu modal" message="minha Mensagem" id="myModal" showModalSaveButton="false" /> --}}
    <x-modal title="meu modal" id="myModal" showModalSaveButton="false">
        Mensagem do modal; nao passado pelo atributo message
    </x-modal>

    
    <x-slot name="title">My Home</x-slot>

    <x-slot name="menu">
    <ul>
    <li>Home</li>    
    <li>About</li>    
    <li>Contact</li>    
    </ul>    
    
    </x-slot>
    {{-- <x-slot name="header">
        <h2>Header</h2>
    </x-slot> --}}

    <h2>Home</h2>

    {{-- <div x-data>
        <button @click="console.log('open modal')">Open Modal</button>
    </div> --}}
    <div x-data>
        <button @click="$dispatch('open')">Open Modal</button>
    </div>




{{-- 
    <x-slot name="footer">
        <h2>Footer</h2>
    </x-slot> --}}
</x-layout>





{{-- Exemple: Without Componenet classe. You can inhert the layout this way  --}}
{{-- @extends('layout')

@section('content')
    <h2>HOME</h2>
@endsection  --}}
