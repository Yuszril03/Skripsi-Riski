<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Data Customer</title>

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
                            <h1 class="m-0">Data Customer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Home</a></li>
                                <li class="breadcrumb-item active">Data Customer</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="float-right">
                        <button onclick=" location.href=' <?= base_url() ?>/Tambah-Data-Customer'" style="border-radius: 15px;" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Customer</button>
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
                                        <th align="center">Nama Pengguna</th>
                                        <th align="center">Jenis Kelamin</th>
                                        <th align="center">No Telp</th>
                                        <th align="center">Email</th>
                                        <th align="center">Status</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                    <tr>
                                        <td>c</td>
                                        <td>d</td>
                                        <td>e</td>
                                        <td>f</td>
                                        <td>g</td>
                                        <td>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Data-Customer'" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></button>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Edit-Data-Customer'" class="btn btn-warning btn-sm"><i class="fa fa-pen-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </section>
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
        // Import the functions you need from the SDKs you need
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
            table
                .clear()
                .draw(false);
            var parseJsonCustomer = [];
            const starCountRef = ref(db, 'Master-Data-Customer/');
            onValue(starCountRef, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Customer/' + keys[isi]);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            IDkey: keys[isi],
                            Nama: kontenn.val().NamaCustomer,
                            Gender: kontenn.val().Gender,
                            Telefon: kontenn.val().TelefonCustomer,
                            Status: kontenn.val().StatusCustomer,
                            Email: kontenn.val().EmailCustomer,
                            fotoCustomer: kontenn.val().fotoCustomer
                        };
                        parseJsonCustomer.push(PostD)
                    })
                }



                for (let i = 0; i < parseJsonCustomer.length; i++) {
                    let StatusData = '';
                    let ActionData = '';
                    if (parseJsonCustomer[i].Status == 1) {
                        StatusData = `<span class="badge badge-success">Aktif</span>`;
                        ActionData = `
                    <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Data-Customer/${parseJsonCustomer[i].IDkey}'" class="btn btn-info btn-sm m-1"><i class="fa fa-info-circle"></i></button>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Edit-Data-Customer/${parseJsonCustomer[i].IDkey}'" class="btn btn-warning btn-sm m-1"><i class="fa fa-pen-alt"></i></button>
                                            <button data-id="${parseJsonCustomer[i].IDkey}" id="PowerCustomer"  type="button" class="tidakatif btn btn-danger btn-sm m-1"><i class="fas fa-power-off"></i></button>`;
                    } else {
                        StatusData = `<span class="badge badge-secondary">Tidak Aktif</span>`;
                        ActionData = `
                    <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Data-Customer/${parseJsonCustomer[i].IDkey}'" class="btn btn-info btn-sm m-1"><i class="fa fa-info-circle"></i></button>
                                            <button data-id="${parseJsonCustomer[i].IDkey}" id="PowerCustomer"  type="button" class="aktif btn btn-success btn-sm"><i class="fas fa-power-off"></i></button>`;
                    }

                    if (parseJsonCustomer[i].Gender == 1) {
                        table.row.add([
                            parseJsonCustomer[i].Nama,
                            "Laki-Laki",
                            parseJsonCustomer[i].Telefon,
                            parseJsonCustomer[i].Email,
                            StatusData,
                            ActionData
                        ]).draw(false)
                    } else {
                        table.row.add([
                            parseJsonCustomer[i].Nama,
                            "Perempuan",
                            parseJsonCustomer[i].Telefon,
                            parseJsonCustomer[i].Email,
                            StatusData,
                            ActionData
                        ]).draw(false)
                    }

                }



                if ((document.getElementById('Table').rows.length - 1) == 0) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Gagal Memuat Data.',
                        icon: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Okey'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })
                }


            });
        }



        $(document).on('click', '.tidakatif', function() {
            var idData = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Non Aktifkan Customer Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Customer/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            NamaCustomer: kontenn.val().NamaCustomer,
                            Gender: kontenn.val().Gender,
                            TelefonCustomer: kontenn.val().TelefonCustomer,
                            StatusCustomer: 0,
                            EmailCustomer: kontenn.val().EmailCustomer,
                            fotoCustomer: kontenn.val().fotoCustomer,
                            TanggalLahirCustomer: kontenn.val().TanggalLahirCustomer,
                            AlamatCustomer: kontenn.val().AlamatCustomer,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toLocaleString("id-ID"),
                        };
                        const updates = {};
                        updates['/Master-Data-Customer/' + idData] = PostD;
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
                text: "Untuk Aktifkan Customer Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const ValueItem = ref(db, 'Master-Data-Customer/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            NamaCustomer: kontenn.val().NamaCustomer,
                            Gender: kontenn.val().Gender,
                            TelefonCustomer: kontenn.val().TelefonCustomer,
                            StatusCustomer: 1,
                            EmailCustomer: kontenn.val().EmailCustomer,
                            fotoCustomer: kontenn.val().fotoCustomer,
                            TanggalLahirCustomer: kontenn.val().TanggalLahirCustomer,
                            AlamatCustomer: kontenn.val().AlamatCustomer,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toLocaleString("id-ID"),
                        };
                        const updates = {};
                        updates['/Master-Data-Customer/' + idData] = PostD;
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