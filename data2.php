<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo= $_POST['indo'];
    $inggris=$_POST['inggris'];
    $mtk = $_POST['mtk'];
    $produktif = $_POST['produktif'];
    $total=0;
    $ratarata=0;

  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
          <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>Produktif</th>
            <th>Total Nilai</th>
            <th>Rata Rata</th>
            <th>Status</th>
          </tr>

          <?php
          for($a=0; $a<count($nis); $a++){
            ?>

            <tr>
              <td><?php echo $nis[$a]; ?></td>
              <td><?php echo $nama[$a]; ?></td>
              <td><?php echo $kelas[$a]; ?></td>
              <td><?php echo $indo[$a]; ?></td>
              <td><?php echo $inggris[$a]; ?></td>
              <td><?php echo $mtk[$a]; ?></td>
              <td><?php echo $produktif[$a]; ?></td>
              <td><?php echo $totalnilai = $indo[$a] + $inggris[$a] + $mtk[$a] + $produktif [$a];  ?></td>
              <td> <?php echo $ratarata = $totalnilai / 4; ?></td>
              <td><?php
                if($ratarata >= 75 && $ratarata <= 100){
                    echo "Lulus";
                }
                elseif ($ratarata <= 75 && $ratarata <= 0){
                    echo"Tidak Lulus";
                }
            }?>  </td>
            </tr>   
      </center>

    </body>
    </html>