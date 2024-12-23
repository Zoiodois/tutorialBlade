{{-- same effect of a constructor in a component class  --}}
@props([
    'color' => 'green', 
    'message' => '', 
    'colors' => [
        'green' => 'success', 
        'red' => 'danger', 
        'orange' => 'warning', 
        'blue' => 'info', 
    ]
])


@if(isset($colors))

    <div class="alert alert-{{ $colors[$color] ?? 'success'}}" role="alert">

@else

    <div class="alert alert-success" role="alert">

@endif

    {{ $slot}}
    {{ $message }}
</div>