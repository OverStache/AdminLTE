<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $kon = koneksi();
                $link = 'SELECT * FROM tbl_transaksi ORDER BY idTransakai ASC';
                $query = mysqli_query($kon, $link);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['idTransakai']; ?></td>
                    <td><?php echo $row['namaMuzakki']; ?></td>
                    <td><?php echo $row['hp']; ?></td>
                    <td><?php echo $row['jumlahZakat']; ?></td>
                    <!-- <td>
                      <a href="index.php?page=ubah_pelanggan&id=<?= $row['id_pelanggan']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="javascript:hapus(<?= $row['id_pelanggan']; ?>)" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    </td> -->
                  </tr>
                <?php
                }
                tutupkoneksi($kon);
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>