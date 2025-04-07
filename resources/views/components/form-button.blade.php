<button {{ $attributes->merge(['class' => 'btn btn-dark', 'type' => 'submit']) }}>
  {{ $slot }}
</button>