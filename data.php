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
  <form method ="POST" action = "">
    <table>
       <br>
       <br>
       <br>
    <h3><font face= "Times New Roman">Data Nilai Ujian kelas XII RPL</font></h3>

      <tr>
        <td>Jumlah Siswa :</td>
        <td></td>
        <td><input type="number" name="jumlah" value=""></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><br><input type="submit" name="save" value="Proses"></td>
      </tr>
</center>
</table>
</form>
  </body>
</html>

  <?php
  echo "<center>";
  if (isset($_POST ['save'])){
    $pilih = $_POST ['jumlah'];
    echo "<form method =POST action = data2.php>";


    if ($pilih){
        for($siswa = 1; $siswa <= $pilih; $siswa++){
            echo "<table>";
            echo "<tr>";
            echo "<br>";
            echo "Data Siswa Ke-$siswa ";
            echo "<td>Nis : </td>";
            echo "<td><input type=number name=nis[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Nama : </td>";
            echo "<td><input type=text name=nama[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Kelas : </td>";
            echo "<td><input type=number name=kelas[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Indonesia : </td>";
            echo "<td><input type=number name=indo[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Bahasa Inggris : </td>";
            echo "<td><input type=number name=inggris[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Matematika : </td>";
            echo "<td><input type=number name=mtk[] value=></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Produktif : </td>";
            echo "<td><input type=number name=produktif[] value=></td>";
            echo "</tr>";
            echo "</table>";

        }
    }

    echo "<tr>";
    echo "<td></td>"; 
    echo "<br>";
    echo "<input type=submit name=simpan value=Simpan>";
    echo "</tr>";
    echo "</form>";
    

    


}
  ?>

</body>
</html>