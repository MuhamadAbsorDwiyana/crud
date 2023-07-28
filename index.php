<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD BERHASIL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5 mt-3 bg-warning rounded">
        <div class="row">
            <div class="col-3">
            <h1 class="text-center mb-5">Create</h1>
                <form action="create.php" method="post" class="form">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control"><br>
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" id="nim" name="nim" class="form-control"><br>
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="form-control"><br>
                    <input type="submit" value="CREATE" name="CREATE" class="btn btn-info">
                </form>
            </div>

            <div class="col-3">
            <h1 class="text-center mb-5">Read</h1>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'read.php';
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-3">
            <h1 class="text-center mb-5">Update</h1>
            <form action="update.php" method="post" class="form">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control"><br>
                <label for="nim" class="form-label">Nim</label>
                <input type="text" id="nim" name="nim" class="form-control"><br>
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" id="kelas" name="kelas" class="form-control"><br>
                <label for="nimid" class="form-label">Nim Lama</label>
                <input type="text" id="nimid" name="nimid" class="form-control"><br>
                <input type="submit" value="UPDATE" name="UPDATE" class="btn btn-primary">
            </form>
            </div>

            <div class="col-3">
                <h1 class="text-center mb-5">Delete</h1>
                <form action="delete.php" method="post" class="form">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" id="nim" name="nim" class="form-control"><br>
                    <input type="submit" value="DELETE" name="DELETE" class="btn btn-danger">
                </form>
            </div>

        </div>
    </div>
</body>
</html>