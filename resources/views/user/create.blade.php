{{-- Exemple: Using layout from compnents --}}

<x-layout title="User Create">  
    <x-slot name="title">User Create</x-slot> 
    
    {{-- <x-slot name="menu">
        <ul>
        <li>Home</li>    
        <li>About</li>    
        <li>Contact</li>    
        </ul>    
        
    </x-slot> --}}

    <h2>User Create</h2>

    <x-form method="post" action=" {{ route('user.store') }}">
        
        <x-form.input-text name="name" label="Name" placeholder="Name..." />
        <x-form.input-text name="email" label="Email" placeholder="Seu email" type="email"/>
        <x-form.input-text name="password" label="Password" placeholder="" type="password" />
    
        <x-form.button type="submit" label="Create"></x-form.button>
    </x-form>

</x-layout>


{{-- Exemple: Using no Slots, Just extending the layout that included header and footer by @include --}}
{{-- @extends('layout')

@section('content')

    <h2>User Create</h2>
@endsection --}}



{{-- Exemple: Using named slots --}}
{{-- Obs: Not a good way to deal with headers and footers --}}
{{-- <x-layout>

    <x-slot name="header">
        <h2>Header</h2>
    </x-slot>

    <h2>Home</h2>

    <x-slot name="footer">
        <h2>Footer</h2>
    </x-slot>
</x-layout> --}}


