@props(['type' => 'text', 'name', 'id' => $name, 'placeholder' => '', 'value', 'label'])

<div class="form-floating border border-dark rounded mb-3">
  <input type="{{ $type }}" class="form-control @error('{{ $name }}') is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name, $value ?? '') }}">
  <label for="{{ $id }}">{{ $label }}</label>
</div>
