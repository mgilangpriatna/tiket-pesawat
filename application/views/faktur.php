<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Faktur Tiket</title>
</head>
<body>
    <div class="container mt-5 ">
        <div class="border border-1 rounded p-3  px-5 ">
        <div class="row justify-content-center">
            <div class="col-8">
                ===================================================================
                <h2>PESANAN TIKET JAKARTA - KUALA LUMPUR</h2>
                ===================================================================
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <th>Nama Pesawat</th>
                            <td><?php echo $nama_pesawat; ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?php echo $kelas; ?></td>
                        </tr>
                        <tr>
                            <th>Harga Tiket</th>
                            <td><?php echo "Rp " . number_format($harga_tiket, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah Tiket</th>
                            <td><?php echo $jumlah_tiket; ?></td>
                        </tr>
                        <tr>
                            <th>Total Bayar</th>
                            <td><?php echo "Rp " . number_format($total, 0, ',', '.'); ?></td>
                        </tr>
                    </table>
                    ===================================================================
                    <div class="mt-3 text-end">
                        <a href="index" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>