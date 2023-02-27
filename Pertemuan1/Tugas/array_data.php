<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $m_fruits = [
    ["name" => "Strawberry", "color" => "Merah", "stock" => 15, "price" =>  40000, "description" => "Strawberry merupakan sumber vitamin C dan mangan yang baik, serta mengandung folat (vitamin B9) dan potasium."],
    ["name" => "Apel", "color" => "Merah/Hijau", "stock" => 20, "price" => 26000, "description" => "Apel mempunyai mineral, vitamin dan nutrisi yang tinggi sehingga bagus guna menjaga kesehatan tubuh. "],
    ["name" => "Semangka", "color" => "Merah", "stock" => 25, "price" => 9000, "description" => "Semangka merupakan buah dengan kandungan air yang tinggi yakni mencapai 92 persen. Kandungan air dalam semangka membantu memenuhi kebutuhan air dalam tubuh dan mencegah dehidrasi."],
    ["name" => "Nanas", "color" => "Kuning", "stock" => 30, "price" => 16500, "description" => "Buah nanas memiliki kandungan antioksidan, yaitu vitamin C, yang memiliki khasiat untuk membantu meningkatkan daya tahan tubuh, khususnya dari berbagai penyakit."],
    ["name" => "Buah Naga", "color" => "Merah/Ungu", "stock" => 35, "price" => 27000, "description" => "Buah naga adalah buah yang hanya tumbuh di daerah tropis dan subtropis. Seperti namanya, buah ini memiliki kulit menyerupai sisik naga dan bentuk yang menyerupai kaktus besar. Buah ini pun kaya akan zat gizi sehingga menawarkan banyak manfaat untuk kesehatan, sekaligus membantu memenuhi kebutuhan gizi harian."]
  ];

  foreach ($m_fruits as $fruit) {
    echo '<li>' . $fruit["name"] . '</li>';
    echo '<li>' . $fruit["color"] . '</li>';
    echo '<li>' . $fruit["stock"] . '</li>';
    echo '<li>' . $fruit["price"] . '</li>';
    echo '<li>' . $fruit["description"] . '</li>';
    echo '<br>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

        $data=array('Strawberry'=>array('1', 'Strawberry', 'Merah', '15', '40.000/kg', 'Strawberry merupakan sumber vitamin C dan mangan yang baik, serta mengandung folat (vitamin B9) dan potasium.'),
                        'Apel'=>array('2', 'Apel', 'Merah/Hijau', '20', '26.000/kg', 'Apel mempunyai mineral, vitamin dan nutrisi yang tinggi sehingga bagus guna menjaga kesehatan tubuh. '),
                        'Semangka'=>array('3', 'Semangka', 'Merah', '25', '9.000/kg', 'Semangka merupakan buah dengan kandungan air yang tinggi yakni mencapai 92 persen. Kandungan air dalam semangka membantu memenuhi kebutuhan air dalam tubuh dan mencegah dehidrasi.'),
                        'Nanas'=>array('4', 'Nanas', 'Kuning', '30', '16.500/kg', 'Buah nanas memiliki kandungan antioksidan, yaitu vitamin C, yang memiliki khasiat untuk membantu meningkatkan daya tahan tubuh, khususnya dari berbagai penyakit.'),
                        'Buah Naga'=>array('5', 'Buah Naga', 'Merah/Ungu', '35', '27.000/kg', 'Buah naga adalah buah yang hanya tumbuh di daerah tropis dan subtropis. Seperti namanya, buah ini memiliki kulit menyerupai sisik naga dan bentuk yang menyerupai kaktus besar. Buah ini pun kaya akan zat gizi sehingga menawarkan banyak manfaat untuk kesehatan, sekaligus membantu memenuhi kebutuhan gizi harian.')
                        );

        echo "<tr>";
        foreach($data['Strawberry'] as $nama) {
            echo "<td table table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Apel'] as $nama) {
            echo "<td table table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Semangka'] as $nama) {
            echo "<td table table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Nanas'] as $nama) {
            echo "<td table table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Buah Naga'] as $nama) {
            echo "<td table table-striped table-hover>$nama</td>";
            }
        echo "</tr>"
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>