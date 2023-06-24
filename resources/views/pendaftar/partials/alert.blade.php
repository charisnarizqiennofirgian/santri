<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            {{-- <img src="..." class="rounded me-2" alt="..."> --}}
            <i class="icon-check feather"></i>
            <strong class="me-auto"> Sukses</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session()->get('success') }}
        </div>
    </div>
</div>

<!-- Core Vendors JS -->
<script src="../../assets/js/vendors.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if (session('success'))
            showUpdateToast();
        @endif
    });

    var myAlert = document.getElementById('liveToast');
    var bsAlert = new bootstrap.Toast(myAlert);

    // Panggil fungsi ini saat berhasil melakukan update
    function showUpdateToast() {
        bsAlert.show();
    }
</script>
