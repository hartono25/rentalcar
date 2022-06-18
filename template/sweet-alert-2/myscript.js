const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    if (flashData === "Congratulation!") {
        Swal.fire({
            title: flashData,
            text: 'Congratulation! your account has been created. Please Login',
            icon: 'success',
        });
    } else if(flashData === "Oops!") {
        Swal.fire({
            icon: 'error',
            title: flashData,
            text: 'Username is not registered'
        });
    } else if (flashData === "Not Active!") {
        Swal.fire({
            icon: 'warning',
            title: flashData,
            text: 'This username has not been activated!'
        });
    } else if (flashData === "Wrong Password!") {
        Swal.fire({
            icon: 'error',
            title: flashData,
            text: "This password is doesn't exist"
        });
    }else if (flashData === "Logout!") {
        Swal.fire({
            title: flashData,
            text: 'You have been logged out!',
            icon: 'success'
        });
    }else if (flashData === "Success") {
        Swal.fire({
            title: flashData,
            text: '',
            icon: 'success',
        });
    }else if (flashData === "Login") {
        Swal.fire({
            title: flashData,
            text: 'You successfully login!',
            icon: 'success'
        });
    
    }else if (flashData === "Pembayaran") {
        Swal.fire({
            title: flashData,
            text: 'Nilai Bayar tidak sesuai!',
            icon: 'error'
        });
    }else if (flashData === "Upload Gagal!") {
        Swal.fire({
            title: flashData,
            text: '',
            icon: 'error'
        });
    }
}

$('.logout').on('click',function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure?',
        text: "You will be logged out",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })
});

$('.delete').on('click',function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    const rowid = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href+"/"+rowid;
        }
      })
});
