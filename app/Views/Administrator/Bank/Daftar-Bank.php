<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Data Kegiatan</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dists/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <?= view('Administrator/Template-Admin/Header') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= view('Administrator/Template-Admin/Sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Bank</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Daftar Bank</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="float-right">
                        <button onclick=" location.href=' <?= base_url() ?>/Tambah-Rekening-Bank'" style="border-radius: 15px;" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Rekening Bank</button>
                    </div>
                </div>
                <br>
                <br>

                <div class="card card-outline card-warning" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="Table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th align="center">Nama Bank</th>
                                        <th align="center">Rekening Bank</th>
                                        <th align="center">Status</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <tr>
                                        <td>b</td>
                                        <td>c</td>
                                        <td>d</td>
                                        <td>e</td>
                                        <td>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Berita-Event'" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></button>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Edit-Berita-Event'" class="btn btn-warning btn-sm"><i class="fa fa-pen-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal Edit Version
            <div class="modal fade" id="editVersion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content" style="border-radius: 15px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><span id="titleModalDetail"></span> Kamar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <label for="">Nomor Versi<sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" id="editnomorVersi" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Link Update<sup><span class="text-danger">*</span></sup></label>
                                            <textarea class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini..." name="linkupdate" id="editlinkUpdate" cols="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="">Deskripsi<sup><span class="text-danger">*</span></sup></label>
                                            <textarea class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini..." name="deskripsi" id="editdeskripsi" cols="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button id="submitDetails" type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        </div>
        <!-- /.content-wrapper -->
        <?= view('Administrator/Template-Admin/Footer') ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/pages/dashboard.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script type="module">
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
        import {
            getDatabase,
            ref,
            onValue,
            set,
            update
        } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js";
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCBM7EKr0XU_nbfbX9vAliU9gPBTlgBhNw",
            authDomain: "traveland-429a6.firebaseapp.com",
            databaseURL: "https://traveland-429a6-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "traveland-429a6",
            storageBucket: "traveland-429a6.appspot.com",
            messagingSenderId: "569185605053",
            appId: "1:569185605053:web:b8bfa6b71ff890fe98eed4"
        };
        const app = initializeApp(firebaseConfig);
        const db = getDatabase();

        var localDataDetail = [];
        var posisiData;

        var parseJsonBerita = [];
        var table = $('#Table').DataTable({
            "lengthChange": false,
            "language": {
                search: '',
                searchPlaceholder: "Pencarian...",
                "paginate": {
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                "lengthMenu": "Tampilkan _MENU_ entri",
                "infoEmpty": "Menampilkan 0 hingga 0 of 0 entri",
                "infoFiltered": "(disaring dari _MAX_ total entri)",
                "zeroRecords": "Tidak ada data yang cocok ditemukan",
                "emptyTable": "Tidak ada data di dalam tabel",
            }
        });
        LoadData()

        function LoadData() {
            const starCountRef = ref(db, 'Master-Data-Bank');
            onValue(starCountRef, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Bank/' + keys[isi]);
                    onValue(ValueItem, (kontein) => {
                        let PostD = {
                            IDkey: keys[isi],
                            NamaBank: kontein.val().NamaBank,
                            Rekening: kontein.val().RekeningBank,
                            CaraPembayaran: kontein.val().CaraPembayaran,
                            StatusBank: kontein.val().StatusBank,
                            GambarBank: kontein.val().GambarBank
                        };
                        parseJsonBerita.push(PostD)
                    })
                }



                for (let i = 0; i < parseJsonBerita.length; i++) {

                    let StatusData = '';
                    let ActionData = '';

                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    if (parseJsonBerita[i].StatusBank == 0) {
                        StatusData = `<span class="badge badge-secondary">Tidak Aktif</span>`;
                        ActionData =
                            // `<button type="button"  class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                            `<button type="button" onclick="location.href='<?= base_url() ?>/Detail-Data-Bank/${parseJsonBerita[i].IDkey}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                            <button data-id="${parseJsonBerita[i].IDkey}" id="PowerCustomer" type="button" class="aktif btn btn-success btn-sm"><i class="bi bi-dash-circle"></i></button>
                    `;
                    } else {
                        StatusData = `<span class="badge badge-success">Aktif</span>`;
                        ActionData =
                            // `<button type="button"  class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                            `<button type="button" onclick="location.href='<?= base_url() ?>/Detail-Data-Bank/${parseJsonBerita[i].IDkey}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                            <button type="button" id="editVersionAndroid" onclick="location.href='<?= base_url() ?>/Edit-Data-Bank/${parseJsonBerita[i].IDkey}'" class="btn btn-warning btn-sm m-1"><i class="bi bi-pencil-square"></i></button>
                            <button data-id="${parseJsonBerita[i].IDkey}" id="PowerCustomer" type="button" class="tidakatif btn btn-danger btn-sm m-1"><i class="bi bi-dash-circle"></i></button>
                    `;
                    }

                    table.row.add([
                        parseJsonBerita[i].NamaBank,
                        parseJsonBerita[i].Rekening,
                        StatusData,
                        ActionData
                    ]).draw(false)

                }
            })
        }

        $(document).on('click', '.tidakatif', function() {
            var idData = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Non Aktifkan Bank Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Bank/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            NamaBank: kontenn.val().NamaBank,
                            RekeningBank: kontenn.val().RekeningBank,
                            CaraPembayaran: kontenn.val().CaraPembayaran,
                            StatusBank: 0,
                            GambarBank: kontenn.val().GambarBank,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: kontenn.val().TanggalUpdate
                        };
                        const updates = {};
                        updates['/Master-Data-Bank/' + idData] = PostD;
                        update(ref(db), updates);
                        // table.row.reload();

                        Swal.fire(
                            'Berhasil!',
                            'Data berhasil di non aktifkan.',
                            'success'
                        )
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data berhasil di non aktifkan.',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Okey'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })

                        // LoadData()
                    })




                }
            })
        })

        $(document).on('click', '.aktif', function() {
            var idData = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Aktifkan Kegiatan Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const ValueItem = ref(db, 'Master-Data-Bank/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {

                            NamaBank: kontenn.val().NamaBank,
                            RekeningBank: kontenn.val().RekeningBank,
                            CaraPembayaran: kontenn.val().CaraPembayaran,
                            StatusBank: 1,
                            GambarBank: kontenn.val().GambarBank,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: kontenn.val().TanggalUpdate

                        };
                        const updates = {};
                        updates['/Master-Data-Bank/' + idData] = PostD;
                        update(ref(db), updates);
                        // table.row.reload();
                        Swal.fire(
                            'Berhasil!',
                            'Data berhasil di aktifkan.',
                            'success'
                        )
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data berhasil di aktifkan.',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Okey'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })

                        // LoadData()
                    })
                }
            })
        })
    </script>

</body>

</html>