<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>  --}}
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>
  <body>
    @include('sweetalert::alert')
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
    <script>
          function confirmDelete() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
          });
        }
      });
    }
    </script>
  </body>
</html>