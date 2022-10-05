<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator - Home</title>

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
        <?= view('Mitra/Template-Mitra/Header') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= view('Mitra/Template-Mitra/Sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pemesanan Wisata</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pemesanan Wisata</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="card card-outline card-warning" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="Table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Pemesanan</th>
                                            <th>Nama Wisata</th>
                                            <th>Nama Pemesan</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Pengunjung Dewasa</th>
                                            <th>Pengunjung Anak - Anak</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <!-- <tbody>
                                        <tr>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>
                                                <button onclick="location.href='<?= base_url() ?>/Detail-Mitra-Rental'" class="btn btn-info btn-sm" title="Detail Data"><i class="fa fa-info-circle"></i></button>
                                                
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
        <?= view('Mitra/Template-Mitra/Footer') ?>

        <!-- Control Sidebar -->
        <aside class=" control-sidebar control-sidebar-dark">
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

        CekData()

        function CekData() {
            const cekData1 = ref(db, 'Transaction-Wisata');
            onValue(cekData1, (snapshot) => {
                const cek = snapshot.val();
                const keys = Object.keys(cek);

                for (const isi in keys) {
                    const cekData2 = ref(db, 'Transaction-Wisata/' + keys[isi]);
                    onValue(cekData2, (snapshoot) => {
                        const cek1 = snapshoot.val();
                        if (snapshoot.val().IdMitra == "<?= session()->get('IDKelola') ?>") {

                            const tanggalHariIni = new Date().toLocaleDateString();
                            let datehariini = tanggalHariIni.split("/");

                            const tanggalBuat = snapshoot.val().TanggalBuat;
                            let dateBuatArray = tanggalBuat.split("/");

                            // console.log(Number(tanggalHariIni[0]));
                            // console.log(Number(dateBuatArray[0]));

                            if (snapshoot.val().StatusTransaksi == "1") {
                                // console.log(tanggalHariIni);
                                // console.log(tanggalBuat);
                                if (Number(tanggalHariIni[0]) > Number(dateBuatArray[0])) {
                                    // console.log("aaaa");
                                    cek1.StatusTransaksi = "2";
                                    cek1.TanggalUpdate = new Date().toString("ID");

                                    const loadData = {};
                                    loadData['/Transaction-Wisata/' + keys[isi]] = cek1;
                                    update(ref(db), loadData);

                                } else {
                                    // console.log("bbbb");
                                }
                            }

                        }
                    })
                }
            })
        }

        var parseJsonTransaksi = [];
        var table = $('#Table').DataTable({
            "lengthChange": false,
            "language": {
                search: '',
                searchPlaceholder: "Pencarian...",
                "paginate": {
                    "next": `<i class="bi bi-chevron-right"></i>`,
                    "previous": `<i class="bi bi-chevron-left"></i>`
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
            const database1 = ref(db, 'Transaction-Wisata');
            onValue(database1, (snapshot1) => {
                const dataTransaksi = snapshot1.val();
                const keysTransaksi = Object.keys(dataTransaksi);

                for (const isi in keysTransaksi) {
                    const database2 = ref(db, 'Transaction-Wisata/' + keysTransaksi[isi]);
                    onValue(database2, (snapshot2) => {
                        const dataWisata = snapshot2.val();

                        //User
                        const database3 = ref(db, 'Master-Data-Customer/' + dataWisata.IdCutomer);
                        onValue(database3, (snapshot3) => {
                            const dataCustomer = snapshot3.val();

                            //Nama Wisata
                            const database4 = ref(db, 'Master-Data-Wisata/' + dataWisata.IdMitra);
                            onValue(database4, (snapshot4) => {
                                if (snapshot2.val().IdMitra == "<?= session()->get('IDKelola') ?>") {
                                    let PostData = {
                                        IDKey: keysTransaksi[isi],
                                        fotoDB: snapshot2.val().BuktiTraksaksi,
                                        foto: null,
                                        NamaWisata: snapshot4.val().NamaWisata,
                                        NamaCustomer: snapshot3.val().NamaCustomer,
                                        TanggalBuat: snapshot2.val().TanggalBuat,
                                        JumlahDewasa: snapshot2.val().JumlahDewasa,
                                        JumlahAnak: snapshot2.val().JumlahAnak,
                                        TotalSemua: snapshot2.val().TotalSemua,
                                        StatusTransaksi: Number(snapshot2.val().StatusTransaksi)

                                    }

                                    let StatusData = '';
                                    let ActionData =
                                        // `<button type="button"  class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                                        `<button type="button" onclick="location.href='<?= base_url() ?>/Detail-Pemesanan-Tiket/${keysTransaksi[isi]}/${dataWisata.IdCutomer}/${dataWisata.IdMitra}/${dataWisata.JenisPembayaran}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                    `;

                                    const options = {
                                        weekday: 'long',
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    };

                                    if (Number(snapshot2.val().StatusTransaksi) == 1) {
                                        StatusData = `<span class="badge badge-warning">Belum Terbayar</span>`;
                                    } else if (Number(snapshot2.val().StatusTransaksi) == 2) {
                                        StatusData = `<span class="badge badge-danger">Pembayaran Dibatalkan</span>`;
                                    } else if (Number(snapshot2.val().StatusTransaksi) == 3) {
                                        StatusData = `<span class="badge badge-success">Sudah Terbayar</span>`;
                                    } else {
                                        StatusData = `<span class="badge badge-secondary">Tiket Sudah Digunakan</span>`;
                                    }

                                    table.row.add([
                                        keysTransaksi[isi],
                                        snapshot4.val().NamaWisata,
                                        snapshot3.val().NamaCustomer,
                                        snapshot2.val().TanggalBuat,
                                        snapshot2.val().JumlahDewasa + ' orang',
                                        snapshot2.val().JumlahAnak + ' orang',
                                        'Rp. ' + snapshot2.val().TotalSemua,
                                        StatusData,
                                        ActionData
                                    ]).draw(false)

                                    parseJsonTransaksi.push(PostData)
                                }
                            })


                        })



                    })
                }
                // console.log(parseJsonTransaksi)

                // for (let i = 0; i < parseJsonTransaksi.length; i++) {
                //     let StatusData = '';
                //     let ActionData =
                //         // `<button type="button"  class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                //         `<button type="button" id="editVersionAndroid" onclick="location.href='<?= base_url() ?>/Edit-Data-Version/${parseJsonTransaksi[i].IDkey}'" class="btn btn-info btn-sm m-1"><i class="bi bi-info-circle"></i></button>
                //     `;

                //     const options = {
                //         weekday: 'long',
                //         year: 'numeric',
                //         month: 'long',
                //         day: 'numeric'
                //     };

                //     if (parseJsonTransaksi[i].StatusTransaksi == 1) {
                //         StatusData = `<span class="badge badge-secondary">Belum Lunas</span>`;
                //     } else if (parseJsonTransaksi[i].StatusTransaksi == 2) {
                //         StatusData = `<span class="badge badge-danger">Pembayaran Dibatalkan</span>`;
                //     } else if (parseJsonTransaksi[i].StatusTransaksi == 3) {
                //         StatusData = `<span class="badge badge-success">Pembayaran Berhasil</span>`;
                //     } else {
                //         StatusData = `<span class="badge badge-warning">Tiket Sudah Digunakan</span>`;
                //     }

                //     table.row.add([
                //         parseJsonTransaksi[i].IDKey,
                //         parseJsonTransaksi[i].NamaWisata,
                //         parseJsonTransaksi[i].NamaCustomer,
                //         parseJsonTransaksi[i].TanggalBuat,
                //         parseJsonTransaksi[i].JumlahDewasa + ' orang',
                //         parseJsonTransaksi[i].JumlahAnak + ' orang',
                //         'Rp. ' + parseJsonTransaksi[i].TotalSemua,
                //         StatusData,
                //         ActionData
                //     ]).draw(false)

                // }
            })

        }
    </script>
</body>

</html>