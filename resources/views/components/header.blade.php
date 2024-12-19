@php
    dump($attributes)
@endphp

{{-- Exemple: Merge new Classes to the class Attribute, passed by the <x-header> call --}}
<div {{ $attributes->merge(['class' => 'bg-dark']) }} >


    {{-- Exemple: $attributes is a ComponentAttributesBag and have methods --}}
    {{-- If title is not declared in construtor of Class:component-header --}}
    @if($attributes->has('title'))
    <p>{{ $attributes->get('title') }}</p>
    @endif

    <p>{{ $title}} --> has been declared on component class </p>


</div>