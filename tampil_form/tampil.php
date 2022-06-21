<table border='1'>
  <tr>
    <th>No</th>
    <th>NIK</th> 
    <th>Nama</th> 
    <th>Jurusan</th>
  </tr>
  <?php
    include "../koneksi.php";
    if (isset($_POST['jurusan'])) {
        $jurusan=$_POST['jurusan'];
    }else {
        $jurusan='';
    }
  
   
    $hasil=mysqli_query($kon,"select * from mahasiswa where jurusan='".$jurusan."'order by nim desc");
    $no=0;
    while ($data = mysqli_fetch_array($hasil)):
        $no++;
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nim']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
  </tr>
    <?php endwhile;?>
</table>