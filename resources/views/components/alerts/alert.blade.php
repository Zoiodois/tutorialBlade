
@if($type !== '')
  <div class="alert alert-{{ $type }}" role="alert">
    {{ $slot}}
    </div>


@else 

  <div class="alert alert-{{ $get_color }}" role="alert">
    {{ $slot}}
  </div>



@endif

