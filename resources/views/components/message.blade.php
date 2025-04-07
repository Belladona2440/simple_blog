@if (session()->has('message'))
  <h2>{{ session('message')}}</h2>
@endif