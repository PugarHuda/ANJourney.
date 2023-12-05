<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "header.php";
include "koneksi.php";
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <a href="./add_berita.php" class="small-box-footer">
            <div class="small-box bg-green">
                <div class="inner">
                    <H5>Tambah Berita <i class="fa fa-arrow-circle-right"></i></H5>
                    <div class="icon">
                        <i class="fa fa-plus circle"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Berita</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>DESKRIPSI</th>
                                        <th>TANGGAL</th>
                                        <th>PENGUPLOAD</th>
                                    </tr>
                                </thead>
                
<tbody>
    <?php
$nomor = 1;
$results = mysqli_query($conn, "SELECT * FROM berita ORDER BY id_berita DESC");

while ($rows = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    if (strlen($rows['deskripsiBerita']) > 50) {
        $str = substr($rows['deskripsiBerita'], 0, 46) . 'read more...';
    } else {
        $str = $rows['deskripsiBerita'];
    }
?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $rows['judulBerita']; ?></td>
        <td><?php echo $str; ?></td>
        <td><?php echo $rows['tanggalBerita']; ?></td>
        <td><?php echo $rows['penguploadBerita']; ?></td>
        <td>
            <a style="color: white;" href="update_berita.php?id=<?php echo $rows['id_berita']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a>
            <a style="color: white;" href="proses_hapus_berita.php?id=<?php echo $rows['id_berita']; ?>"><button class="btn btn-danger btn-sm btn-delete-row">Delete</button></a>
        </td>
    </tr>
<?php
    $nomor = $nomor + 1;
}
?>

</tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": false,
            "scrollX": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $("body").on("click", ".btn-delete-row", function (e) {
            if (confirm("Apakah anda yakin ingin menghapus?") === false) {
                e.preventDefault();
            }
        });
    });
</script>
</body>
</html>
