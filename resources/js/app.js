import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault();

            Swal.fire({
                title: form.dataset.title,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: form.dataset.confirm,
                cancelButtonText: form.dataset.cancel
            }).then(result => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    if (window.successMessage) {
        Swal.fire({
            icon: 'success',
            title: window.successTitle,
            text: window.successMessage
        });
    }
});
