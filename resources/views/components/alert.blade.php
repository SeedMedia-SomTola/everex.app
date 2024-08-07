@if (Session::has('success'))
    <script>
        swal.fire("Successfully", "{{ session::get('success') }}", "success", {
            button: true,
            button: "OK",
            timer: 3000,
            dangerMode: true
        });
    </script>
@endif
@if (Session::has('error'))
    <script>
        swal.fire("Error", "{{ session::get('error') }}", "error", {
            button: true,
            button: "OK",
            timer: 3000,
            dangerMode: true
        });
    </script>
@endif
