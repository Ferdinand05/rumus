<?php

if (isset($_POST["submit"])) {

    $nilaiSatu = $_POST["nilai1"];
    $nilaiDua = $_POST["nilai2"];

    $rumus = $_POST["rumus"];
    if ($rumus == "segitiga") {
        $hasil = 1 / 2 * ($nilaiSatu * $nilaiDua);
        $rumusDipilih = "Segitiga";
    } elseif ($rumus == "persegi") {
        $hasil = $nilaiSatu * $nilaiDua;
        $rumusDipilih = "Persegi Panjang";
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumus Perhitungan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="card mt-3 shadow border border-primary ">
            <h1 class="text-center  border-bottom border-primary p-2 bg-info rounded-top"> Rumus - Rumus <i class="bi bi-calculator-fill"></i></h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold"> Nilai <i class="bi bi-1-circle"></i> :
                        </label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nilai1" required placeholder="Masukan nilai...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-semibold">Nilai <i class="bi bi-2-circle"></i> :
                        </label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nilai2" required placeholder="Masukan nilai...">
                    </div>
                    <div class="mb-4 text-center">
                        <input class="form-check-input " type="radio" name="rumus" id="flexRadioDefault1" value="segitiga">
                        <label class="form-check-label fw-semibold" for="flexRadioDefault1">
                            Segitiga
                        </label>
                        <input class="form-check-input ms-3" type="radio" name="rumus" id="flexRadioDefault2" value="persegi">
                        <label class="form-check-label fw-semibold" for="flexRadioDefault2">
                            Persegi Panjang
                        </label>
                    </div>
                    <div class=" text-center">
                        <button type="submit" name="submit" class=" me-3 btn btn-primary shadow-sm">Submit</button>
                        <button type="reset" name="reset" class="btn btn-primary shadow-sm">Reset</button>
                    </div>
                </form>

            </div>

        </div>
        <div class="card mt-4 me-4 ms-4 shadow-sm">
            <div class="card-header">
                <h4 class="text-center">Hasil Perhitungan <i class="bi bi-coin"></i></h4>
            </div>

            <div class="card-body fw-semibold">
                <?php if (isset($rumusDipilih) && isset($nilaiSatu) && isset($nilaiDua) && isset($hasil)) {
                    echo "Rumus : " . $rumusDipilih;
                    echo " <br> Nilai 1 : " . $nilaiSatu;
                    echo " <br> Nilai 2 : " . $nilaiDua;
                    echo " <br> Hasil : " . $hasil;
                } else {
                    echo "<h5 class='text-center'>Masukan Nilai</h5>";
                }
                ?>
            </div>
        </div>
        <p class="text-center">Ferdinand / 19220032</p>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>