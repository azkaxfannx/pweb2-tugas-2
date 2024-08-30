<?php 
    
?>

<?php 
    require_once "koneksi.php";

    // inisialisasi object ReportsStudents

    $reports_students = new ReportsStudents();
    $data = $reports_students->tampil();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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
                <th scope="col">ID Warnings</th>
                <th scope="col">ID GPA Detail</th>
                <th scope="col">ID Guidance</th>
                <th scope="col">ID Achievement</th>
                <th scope="col">ID Scholarship</th>
                <th scope="col">ID Student Withdrawals</th>
                <th scope="col">ID Tuition Areas</th>
                <th scope="col">Report Date</th>
                <th scope="col">Status</th>
                <th scope="col">Has Acc Academic Advisor</th>
                <th scope="col">Has Acc Head of Program</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Menampilkan data dari tabel report dengan status = Approved

                $no = 1;
                foreach($data as $row) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['id_warnings'] ?></td>
                <td><?= $row['id_gpa_detail'] ?></td>
                <td><?= $row['id_guidance'] ?></td>
                <td><?= $row['id_achievments'] ?></td>
                <td><?= $row['id_sholarship'] ?></td>
                <td><?= $row['id_student_withdrawls'] ?></td>
                <td><?= $row['id_tuition_areas'] ?></td>
                <td><?= $row['report_date'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['has_acc_academic_advisor'] ?></td>
                <td><?= $row['has_acc_head_of_program'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>