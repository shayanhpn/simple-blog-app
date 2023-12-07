$(document).ready(()=>{
    $(".alert").fadeOut(4000);
});
$(document).ready(() => {
    $('#logout').click((e) => {
        e.preventDefault();
        Swal.fire({
            confirmButtonColor: '#B31312',
            confirmButtonText: '#0766AD',
            title: "آیا میخواهید خارج شوید؟",
            html:'<i class="fa fa-sign-out fa-3x" aria-hidden="true"></i>',
            showCancelButton: true,
            confirmButtonText: "خروج",
            cancelButtonText: 'انصراف',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire("با موفقیت خارج شدید", "", "success");
                setTimeout(() =>{
                    window.location.href = '/logout';
                },2000)
            }
        });
    })
})

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
