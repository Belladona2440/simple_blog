import './bootstrap';

import '../scss/app.scss';
import * as bootstrap from 'bootstrap';

function confirmDelete(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');  
    console.log(urlToRedirect); 
    swal({
        title: "Are you sure to cancel this product",
        text: "You will not be able to revert this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willCancel) => {
        if (willCancel) {


             
            window.location.href = urlToRedirect;
           
        }  


    });

    
} 

/*     function confirmDelete() {
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
    } */