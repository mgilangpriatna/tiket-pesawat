<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIKET ONLINE INDONESIA - MALAYSIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
        body.dark-mode {
            background-color: #000;
            color: #fff;
        }

        .btn-dark-mode {
            background-color: #333;
            border-color: #555;
        }
    </style>
</head>
<body>
<div class="container pt-5">
    <div class="border border-3 rounded p-3 px-5">
        <div class="row">
            <div class="col-12 text-right">
                <button id="darkModeToggle" class="btn btn-dark-mode">
                    <i class="fas fa-moon"></i> <!-- Icon of a crescent moon -->
                </button>
            </div>
        </div>
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="text-center">TIKET ONLINE INDONESIA - MALAYSIA</h3>
            </div>
            <div class="col-6">
                <form action="<?php echo base_url('tiket/proses'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for "kode" class="form-label">Kode Pesawat</label>
                        <select class="form-select" name="kode">
                            <option selected>Pesawat</option>
                            <option value="Garuda">GRD</option>
                            <option value="Merpati">MPT</option>
                            <option value="Batavia">BTV</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="eksekutif" value="eksekutif">
                            <label class="form-check-label" for="eksekutif">Eksekutif</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="bisnis" value="bisnis">
                            <label class="form-check-label" for="bisnis">Bisnis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelas" id="ekonomi" value="ekonomi">
                            <label class="form-check-label" for="ekonomi">Ekonomi</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Tiket</label>
                        <select class="form-select" name="jumlah">
                            <option selected>Jumlah Tiket</option>
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <input type="reset" value="Batal" class="btn btn-secondary ml-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
    });
</script>
</body>
</html>
