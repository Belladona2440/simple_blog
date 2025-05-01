{{-- <button {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}>
  {{ $slot }}
</button> --}} 

<button
  {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}
  @if ($attributes->get('data-confirm-delete'))
    onclick="confirmDelete()"
  @endif
  >
  {{ $slot }}
</button> 
