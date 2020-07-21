<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/jquery.redirect.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
$(document).on('click', '.logout-btn', function() {
    var url = "{{ url('logout') }}";
    var csrf = "{{ csrf_token() }}";

    swal({
        text: "Apakah anda yakin untuk keluar dari aplikasi ?" ,
        icon: "warning",
        dangerMode: true,
        buttons: {
            cancel: {
                text: "Batal",
                value: false,
                visible: true,
                className: "btn btn-sm btn-white"
            },
            confirm: {
                text: "Keluar",
                value: true,
                visible: true,
                className: "btn btn-sm btn-danger",
                closeModal: true
            }
        }
    }).then((value) => {
        if (value === true) {
            $.redirect(url, {"_token": csrf});
        }
        swal.close();
    });;
});
</script>
