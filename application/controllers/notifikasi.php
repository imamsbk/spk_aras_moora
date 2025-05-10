<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
    Swal.fire({
        icon: '<?= $status ?>', // success, error, warning, info
        title: '<?= ucfirst($status) ?>!',
        text: '<?= $message ?>',
        showConfirmButton: false,
        timer: 2000
    }).then(() => {
        window.location.href = '<?= $redirect ?>';
    });
</script>
</body>
</html>
