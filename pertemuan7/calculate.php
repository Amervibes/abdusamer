<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perhitungan Gaji</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Hasil Perhitungan Gaji</h2>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get input values from the form
      $name = $_POST['name'];
      $basic_salary = $_POST['basic_salary'];
      $allowance = $_POST['allowance'];

      // Calculate the total salary
      $total_salary = $basic_salary + $allowance;
    ?>
      <p>Nama Karyawan: <?php echo $name; ?></p>
      <p>Gaji Pokok: <?php echo $basic_salary; ?></p>
      <p>Tunjangan: <?php echo $allowance; ?></p>
      <h3>Total Gaji: <?php echo $total_salary; ?></h3>
    <?php
    } else {
      echo "<p>Data tidak valid.</p>";
    }
    ?>
    <a href="index.html">Kembali</a>
  </div>
</body>
</html>
