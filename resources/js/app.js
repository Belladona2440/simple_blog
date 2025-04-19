import './bootstrap';

import '../scss/app.scss';
import * as bootstrap from 'bootstrap';
import Swal from 'sweetalert2';
//window.Swal = Swal; //use globally

if (window.LogoutSuccess) {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    }
  });
  Toast.fire({
    icon: "success",
    title: "Signed in successfully"
  });
} 