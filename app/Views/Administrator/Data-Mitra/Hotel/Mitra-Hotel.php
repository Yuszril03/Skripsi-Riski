<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Mitra Hotel</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />
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

    <!-- Select2 CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->

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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Mitra Hotel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Mitra Hotel</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="float-right">
                        <button onclick="location.href='<?= base_url() ?>/Tambah-Mitra-Hotel'" class="btn btn-success" style="border-radius: 15px;">
                            <i class="fa fa-plus-circle"></i> Tambah Mitra
                        </button>
                    </div>
                    <br><br>
                    <div class="card card-outline card-warning" style="border-radius: 15px;">
                        <div class="card-body">
                            <!-- 
                            <select class="form-control js-states" multiple name="coba" id="coba">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3 </option>
                            </select> -->

                            <div class="table-responsive">
                                <table id="Table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Mitra</th>
                                            <th>Nama Hotel</th>
                                            <th>Alamat Hotel</th>
                                            <th>Status Mitra</th>
                                            <th>Status Hotel</th>
                                            <th>Aksi </th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>
                                                <button onclick="location.href='<?= base_url() ?>/Detail-Mitra-Wisata'" class="btn btn-info btn-sm" title="Detail Data"><i class="fa fa-info-circle"></i></button>
                                                <button onclick="location.href='<?= base_url() ?>/Edit-Mitra-Wisata'" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-pen-alt"></i></button>
                                                <button class="btn btn-danger btn-sm" title="Hapus Data"><i class="fas fa-power-off"></i></button>
                                            </td>
                                        </tr>
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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

    <!-- Select2 -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            // table
            //     .clear()
            //     .draw(false);
            var parseJsonMitra = [];
            const starCountRef = ref(db, 'Master-Data-Mitra/');
            onValue(starCountRef, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Mitra/' + keys[isi]);
                    onValue(ValueItem, (kontenn) => {

                        // console.log(kontenn.val().NamaMitra)

                        const ValueAcccount = ref(db, 'Master-Data-Account-Mitra/' + keys[isi]);
                        onValue(ValueAcccount, (DataAccount) => {

                            if (DataAccount.val().JenisMitra == "Mitra-Hotel") {

                                const ValueWisata = ref(db, 'Master-Data-Hotel/' + DataAccount.val().IDKelolaMitra);
                                onValue(ValueWisata, (DataWisata) => {

                                    // console.log(DataWisata.val().NamaWisata)
                                    let PostD = {
                                        IDMitra: keys[isi],
                                        NamaMitra: kontenn.val().NamaMitra,
                                        Wisata: DataWisata.val().NamaHotel,
                                        Alamat: DataWisata.val().AlamatHotel,
                                        Status: DataWisata.val().StatusHotel,
                                    };
                                    // parseJsonMitra.push(PostD)
                                    let StatusData = '';
                                    let StatusDataMitra = '';
                                    let ActionData = '';


                                    if (DataWisata.val().StatusHotel == 1) {
                                        StatusData = `<span class="badge badge-success">Aktif</span>`;
                                        if (kontenn.val().StatusMitra == 1) {
                                            StatusDataMitra = `<span class="badge badge-success">Aktif</span>`;
                                            ActionData = `
                    <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                                            <button type="button" onclick="location.href='<?= base_url() ?>/Edit-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-warning btn-sm m-1"><i class="bi bi-pencil-square"></i></button>
                                            <button Title="Blokir Hotel" data-id="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="tidakatifHotel btn btn-danger btn-sm m-1"><i class="bi bi-dash-circle"></i></button>
                                            <button  Title="Blokir Mitra" data-mitra="${keys[isi]}" data-hotel="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="tidakatifMitra btn btn-danger btn-sm m-1"><i class="bi bi-person-x"></i></button>
                                            `;
                                        } else {
                                            StatusDataMitra = `<span class="badge badge-secondary">Tidak Aktif</span>`;
                                            ActionData = `
                                        <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                                            
                                            <button  Title="Aktif Mitra" data-mitra="${keys[isi]}" data-hotel="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="aktifMitra btn btn-success btn-sm m-1"><i class="bi bi-person-x"></i></button>
                                            `;
                                        }

                                    } else {
                                        StatusData = `<span class="badge badge-secondary">Tidak Aktif</span>`;
                                        if (kontenn.val().StatusMitra == 1) {
                                            StatusDataMitra = `<span class="badge badge-success">Aktif</span>`;
                                            ActionData = `
                                          <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                                           <button type="button" onclick="location.href='<?= base_url() ?>/Edit-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-warning btn-sm m-1"><i class="bi bi-pencil-square"></i></button>
                                            <button Title="Aktif Hotel" data-id="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="aktifHotel btn btn-success btn-sm m-1"><i class="bi bi-dash-circle"></i></button>
                                            <button  Title="Blokir Mitra" data-mitra="${keys[isi]}" data-hotel="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="tidakatifMitra btn btn-danger btn-sm m-1"><i class="bi bi-person-x"></i></button>
                                            `;
                                        } else {
                                            StatusDataMitra = `<span class="badge badge-secondary">Tidak Aktif</span>`;
                                            ActionData = `
                                         <button type="button" onclick="location.href='<?= base_url() ?>/Detail-Mitra-Hotel/${keys[isi]}/${DataAccount.val().IDKelolaMitra}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                                           
                                            <button  Title="Aktif Mitra" data-mitra="${keys[isi]}" data-hotel="${DataAccount.val().IDKelolaMitra}" id="PowerCustomer"  type="button" class="aktifMitra btn btn-success btn-sm m-1"><i class="bi bi-person-x"></i></button>
                                            `;
                                        }
                                    }

                                    table.row.add([
                                        kontenn.val().NamaMitra,
                                        DataWisata.val().NamaHotel,
                                        DataWisata.val().AlamatHotel,
                                        StatusDataMitra,
                                        StatusData,
                                        ActionData
                                    ]).draw(false)

                                })
                            }
                            // console.log(DataAccount.val().IDKelolaMitra)

                        })
                    })
                }

            });
        }



        $(document).on('click', '.tidakatifMitra', function() {
            var idDataRental = $(this).data('hotel');
            var idDataMitra = $(this).data('mitra');



            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Non Aktifkan Mitra Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Mitra/' + idDataMitra);
                    onValue(ValueItem, (kontenn) => {
                        let PostMitra = {
                            NamaMitra: kontenn.val().NamaMitra,
                            EmailMitra: kontenn.val().EmailMitra,
                            StatusMitra: 0,
                            TelefonMitra: kontenn.val().TelefonMitra,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toString("ID")
                        };
                        const updates = {};
                        updates['/Master-Data-Mitra/' + idDataMitra] = PostMitra;
                        update(ref(db), updates);
                        // table.row.reload();

                        const ValueItemWista = ref(db, 'Master-Data-Hotel/' + idDataRental);
                        onValue(ValueItemWista, (kontennWisata) => {


                            let PostD = {
                                NamaHotel: kontennWisata.val().NamaHotel,
                                AlamatHotel: kontennWisata.val().AlamatHotel,
                                StatusHotel: 0,
                                DeskripsiHotel: kontennWisata.val().DeskripsiHotel,
                                TanggalBuat: kontennWisata.val().TanggalBuat,
                                TanggalUpdate: new Date().toString("ID"),
                                fotoHotel: kontennWisata.val().fotoHotel,
                                Longlitude: kontennWisata.val().Longlitude,
                                Latitude: kontennWisata.val().Latitude
                            };
                            const updatesRental = {};
                            updatesRental['/Master-Data-Hotel/' + idDataRental] = PostD;
                            update(ref(db), updatesRental);
                            // table.row.reload();

                            // Swal.fire(
                            //     'Berhasil!',
                            //     'Data berhasil di non aktifkan.',
                            //     'success'
                            // )
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

                        // LoadData()
                    })




                }
            })
        })


        $(document).on('click', '.aktifMitra', function() {
            var idDataRental = $(this).data('hotel');
            var idDataMitra = $(this).data('mitra');



            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Aktifkan Mitra Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Mitra/' + idDataMitra);
                    onValue(ValueItem, (kontenn) => {

                        let PostMitra = {
                            NamaMitra: kontenn.val().NamaMitra,
                            EmailMitra: kontenn.val().EmailMitra,
                            StatusMitra: 1,
                            TelefonMitra: kontenn.val().TelefonMitra,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toString("ID")
                        };
                        const updates = {};
                        updates['/Master-Data-Mitra/' + idDataMitra] = PostMitra;
                        update(ref(db), updates);

                        const ValueItemWista = ref(db, 'Master-Data-Hotel/' + idDataRental);
                        onValue(ValueItemWista, (kontennWisata) => {

                            let PostD = {
                                NamaHotel: kontennWisata.val().NamaHotel,
                                AlamatHotel: kontennWisata.val().AlamatHotel,
                                StatusHotel: 1,
                                DeskripsiHotel: kontennWisata.val().DeskripsiHotel,
                                TanggalBuat: kontennWisata.val().TanggalBuat,
                                TanggalUpdate: new Date().toString("ID"),
                                fotoHotel: kontennWisata.val().fotoHotel,
                                Longlitude: kontennWisata.val().Longlitude,
                                Latitude: kontennWisata.val().Latitude
                            };
                            const updatesRental = {};
                            updatesRental['/Master-Data-Hotel/' + idDataRental] = PostD;
                            update(ref(db), updatesRental);
                            // table.row.reload();

                            // Swal.fire(
                            //     'Berhasil!',
                            //     'Data berhasil di non aktifkan.',
                            //     'success'
                            // )
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

                        // LoadData()
                    })




                }
            })
        })

        $(document).on('click', '.tidakatifHotel', function() {
            var idData = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Non Aktifkan Hotel Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Hotel/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            NamaHotel: kontenn.val().NamaHotel,
                            AlamatHotel: kontenn.val().AlamatHotel,
                            StatusHotel: 0,
                            DeskripsiHotel: kontenn.val().DeskripsiHotel,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toString("ID"),
                            fotoHotel: kontenn.val().fotoHotel,
                            Longlitude: kontenn.val().Longlitude,
                            Latitude: kontenn.val().Latitude
                        };
                        const updates = {};
                        updates['/Master-Data-Hotel/' + idData] = PostD;
                        update(ref(db), updates);
                        // table.row.reload();

                        // Swal.fire(
                        //     'Berhasil!',
                        //     'Data berhasil di non aktifkan.',
                        //     'success'
                        // )
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

        $(document).on('click', '.aktifHotel', function() {
            var idData = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Untuk Aktifkan Hotel Ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Batal'
            }).then((result) => {

                if (result.isConfirmed) {

                    const ValueItem = ref(db, 'Master-Data-Hotel/' + idData);
                    onValue(ValueItem, (kontenn) => {
                        let PostD = {
                            NamaHotel: kontenn.val().NamaHotel,
                            AlamatHotel: kontenn.val().AlamatHotel,
                            StatusHotel: 1,
                            DeskripsiHotel: kontenn.val().DeskripsiHotel,
                            TanggalBuat: kontenn.val().TanggalBuat,
                            TanggalUpdate: new Date().toString("ID"),
                            fotoHotel: kontenn.val().fotoHotel,
                            Longlitude: kontenn.val().Longlitude,
                            Latitude: kontenn.val().Latitude
                        };
                        const updates = {};
                        updates['/Master-Data-Hotel/' + idData] = PostD;
                        update(ref(db), updates);
                        // table.row.reload();

                        // Swal.fire(
                        //     'Berhasil!',
                        //     'Data berhasil di aktifkan.',
                        //     'success'
                        // )
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

        // $(document).on('click', '.aktif', function() {
        //     var idData = $(this).data('id');

        //     Swal.fire({
        //         title: 'Apakah Anda Yakin?',
        //         text: "Untuk Aktifkan Customer Ini ?",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Iya!',
        //         cancelButtonText: 'Batal'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             const ValueItem = ref(db, 'Master-Data-Customer/' + idData);
        //             onValue(ValueItem, (kontenn) => {
        //                 let PostD = {
        //                     NamaCustomer: kontenn.val().NamaCustomer,
        //                     Gender: kontenn.val().Gender,
        //                     TelefonCustomer: kontenn.val().TelefonCustomer,
        //                     StatusCustomer: 1,
        //                     EmailCustomer: kontenn.val().EmailCustomer,
        //                     fotoCustomer: kontenn.val().fotoCustomer,
        //                     TanggalLahirCustomer: kontenn.val().TanggalLahirCustomer,
        //                     AlamatCustomer: kontenn.val().AlamatCustomer,
        //                     TanggalBuat: kontenn.val().TanggalBuat,
        //                     TanggalUpdate: new Date().toLocaleString("id-ID"),
        //                 };
        //                 const updates = {};
        //                 updates['/Master-Data-Customer/' + idData] = PostD;
        //                 update(ref(db), updates);
        //                 // table.row.reload();
        //                 Swal.fire(
        //                     'Berhasil!',
        //                     'Data berhasil di aktifkan.',
        //                     'success'
        //                 )
        //                 Swal.fire({
        //                     title: 'Berhasil',
        //                     text: 'Data berhasil di aktifkan.',
        //                     icon: 'success',
        //                     showCancelButton: false,
        //                     confirmButtonColor: '#3085d6',
        //                     cancelButtonColor: '#d33',
        //                     confirmButtonText: 'Okey'
        //                 }).then((result) => {
        //                     if (result.isConfirmed) {
        //                         location.reload();
        //                     }
        //                 })

        //                 // LoadData()
        //             })
        //         }
        //     })
        // })
    </script>

</body>

</html>