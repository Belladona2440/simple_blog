@props(['type' => 'checkbox', 'name', 'id' => $name, 'label'])

<div class="col-12">
  <div class="form-check">
    <input class="form-check-input" type="{{ $type }}" value="" name="{{ $name }}" id="{{ $name }}">
    <label class="form-check-label text-secondary" for="{{ $id }}">
      {{ $label }}
    </label>
  </div>
</div>