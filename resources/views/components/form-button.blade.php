{{-- <button {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}>
  {{ $slot }}
</button> --}}

<button
  {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}
  @if ($attributes->get('data-confirm-delete'))
    onclick="return confirm('Are you sure you want to delete this post?')"
  @endif
>
  {{ $slot }}
</button>
