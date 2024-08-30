<?php 
    require_once "koneksi.php";

    // inisialisasi object GpaDetails

    $gpa_details = new GpaDetails();
    $data = $gpa_details->tampil();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<!-- memanggil navbar -->
<?php require_once "header.php"; ?>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">ID GPA Details</th>
                <th scope="col">ID GPA</th>
                <th scope="col">Semester</th>
                <th scope="col">Semester GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Menampilkan data dari tabel gpa_details

                $no = 1;
                foreach($data as $row) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['id_gpa_detail'] ?></td>
                <td><?= $row['id_gpa'] ?></td>
                <td><?= $row['semester'] ?></td>
                <td><?= $row['semester_gpa'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <h4>Lihat sebagai <a href="gpa_details_students.php">students</a></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>