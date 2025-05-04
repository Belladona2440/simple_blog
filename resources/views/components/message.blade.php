@props(['type' => 'success'])

@php
  $alertType = match ($type) {
    'error' => 'danger',
    'warning' => 'warning',
    'info' => 'info',
    default => $type
  }
@endphp

@if (session($type))
  <div class="alert alert-{{ $alertType }} alert-dismissible fade show small" role="alert">
    {{ session($type) }}
    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif