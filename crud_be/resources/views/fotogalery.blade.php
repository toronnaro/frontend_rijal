<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <button class="btn btn-danger">Log Out</button>
    </div>

    <h1 class="text-center mt-4 mb-4">Foto Galery</h1>

    <div class="container">
        <button class="btn btn-success mb-4">Tambah +</button>
        <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt=""
                            style="width:90px">
                        <div class="card-body">
                            <h5 class="card-title">Judul Foto</h5>
                            <td>Deskripsi Foto</td>
                            <td>WE MAR 2024</td>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-primary">edit</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
