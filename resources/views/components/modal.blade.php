<div x-data="{
open(){
  const myModal = new bootstrap.Modal('#myModal');
  myModal.show();
  }
}" class="modal fade" {{$attributes }} tabindex="-1" @open.window="open" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          {{-- Exemples: --}}
          {{-- <p>{{$message}}</p>  uses the $message attributes, needs the constructor --}}
          {{-- <p>{{$slot}}</p>  uses inbetween x-modal tags --}}
          <p>{{$slot}}</p>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          @if($showModalSaveButton)
          <button type="button" class="btn btn-primary">Save changes</button>
          @endif
        </div>
      </div>
    </div>
  </div>