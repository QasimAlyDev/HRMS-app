{{-- jquery link --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    .toast {
        min-height: 70px;
        /* Adjust the height as needed */
        display: flex;
        align-items: center;
        /* Vertically center the content */
    }

    .toast-success {
        background-color: #51a351;
        /* Example background color for success toasts */
    }

    .toast-message {
        font-size: 16px;
        /* Adjust the font size as needed */
    }
</style>

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
            toastr.success('{{ session('success') }}');
        });
</script>
@endif
@if(session('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
            toastr.error('{{ session('error') }}');
        });
</script>
@endif


{{-- jquery linkS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>