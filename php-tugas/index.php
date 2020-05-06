<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container-md mt-5">
        <h1>Input data Mahasiswa</h1> <Br>

        <form action="proses.php" method="POST">
            <div class="form-group">
                <label for="Namalengkap" class="col-2 col-form-label">Nama lengkap</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="Name" name="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="NIM" class="col-2 col-form-label">NIM</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="NIM" name="NIM">
                </div>
            </div>
            <div class="form-group">
                <label for="Tlahir" class="col-2 col-form-label">Tanggal lahir</label>
                <div class="col-10">
                    <input type="date" class="form-control" id="Tlahir" name="Tlahir">
                </div>
            </div>
            <div class="form-group">
                <label for="tempatLahir" class="col-2 col-form-label">Tempat lahir</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                </div>
            </div>
            <div class="form-group">
                <label for="umur" class="col-2 col-form-label">Umur</label>
                <div class="col-10">
                    <input type="number" class="form-control" id="umur" name="umur">
                </div>
            </div>
            <div class="form-group">
                <label for="hobby" class="col-2 col-form-label">Hobby</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="hobby" name="hobby">
                </div>
            </div>
            <div class="form-group">
                <label for="Namalengkap" class="col-2 col-form-label">Keterangan</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="Keterangan" name="keterangan">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>

</body>

</html>