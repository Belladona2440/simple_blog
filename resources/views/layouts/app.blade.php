<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>  --}}
    <title>Document</title>
    @if (session('logoutSuccess'))
      <script>
        window.logoutSuccess = "{{ session('logoutSuccess') }}";
      </script>
    @endif
    @vite('resources/js/app.js')
  </head>
  <body>
    <x-nav></x-nav>
      @yield('content')
    <x-footer></x-footer>
    @yield('scripts')
{{--     <script> 
      ClassicEditor
        .create(document.querySelector('#content'), 
        {
          ckfinder: {
            uploadUrl:"{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
          }
        })
        .catch(error => {
          console.error(error);
        });
    </script> --}}  
  </body>
</html>