<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Beranda Mitra</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-auto-replace-svg="nest"></script>
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
                            <h1 class="m-0">Beranda</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <?php if (session()->get('Jenis') == "Mitra-Wisata") { ?>
                        <div class="row">
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3 id="sudah-terbayar">0</h3>
                                        <p>Pemesanan yang Terbayar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3 id="belum-terbayar">0</h3>
                                        <p>Pemesan belum Terbayar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3 id="jum-trans">0</h3>
                                        <p>Total Pembelian Tiket</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-cart"></i>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3 id="jum-bulanan">0</h3>

                                        <p>Penjualan Tiket Perbulan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>

                                </div>
                            </div>

                            <!-- ./col -->
                        </div>
                    <?php } ?>

                    <?php if (session()->get('Jenis') == "Mitra-Hotel") { ?>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>150</h3>

                                        <p>Pemesanan Kamar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion bi bi-door-open-fill"></i>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                                        <p>Pengunjung</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Pengunjung Perbulan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion bi bi-cash"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-6">

                            </div>
                            <!-- ./col -->
                        </div>
                    <?php } ?>

                    <?php if (session()->get('Jenis') == "Mitra-Rental") { ?>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>150</h3>

                                        <p>Pemesanan Mobil</p>
                                    </div>
                                    <div class="icon">

                                        <i class="fas fa-car"></i>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                                        <p>Penyewa</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion ion-person"></i>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Penyewa perbulan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->

                            </div>
                            <!-- ./col -->
                        </div>
                    <?php } ?>

                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Sales
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                            <!-- Map card -->
                            <div class="card bg-gradient-primary">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        Visitors
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                                            <i class="far fa-calendar-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <div class="card-body">
                                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                                </div>
                                <!-- /.card-body-->
                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <div id="sparkline-1"></div>
                                            <div class="text-white">Visitors</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <div id="sparkline-2"></div>
                                            <div class="text-white">Online</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <div id="sparkline-3"></div>
                                            <div class="text-white">Sales</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.card -->

                            <!-- solid sales graph -->
                            <div class="card bg-gradient-info">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="fas fa-th mr-1"></i>
                                        Sales Graph
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">Mail-Orders</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">Online</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">In-Store</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->

                            <!-- Calendar -->
                            <div class="card bg-gradient-success">
                                <div class="card-header border-0">

                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <!-- tools card -->
                                    <div class="card-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pt-0">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= view('Mitra/Template-Mitra/Footer') ?>

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

    <Script type="module">
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

        <?php if (session()->get('Jenis') == "Mitra-Wisata") { ?>
            CekDataWisata();


            function CekDataWisata() {
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


        <?php } ?>

        <?php if (session()->get('Jenis') == "Mitra-Hotel") { ?>
            CekDataHotel();

            function CekDataHotel() {
                let tanggalHariIni = new Date().getTime();
                let tableTransaksi = ref(db, 'Transaction-Hotel');
                onValue(tableTransaksi, (snapTrans) => {
                    let posData = snapTrans.val();
                    let keysID = Object.keys(posData);
                    let couns = [];
                    let counsTRANSAKSI = [];
                    for (let loop in keysID) {
                        let tableDetailTransaksi = ref(db, 'Transaction-Hotel/' + keysID[loop]);
                        onValue(tableDetailTransaksi, (snapDetailTrans) => {
                            let postDataDetilTransaksi = snapDetailTrans.val();
                            let tanggalBuat = postDataDetilTransaksi.TanggalBuat;
                            let dateBuatArray = tanggalBuat.split(" ");
                            let onlyTanggal = dateBuatArray[0].split("/");
                            let nowTrans = new Date(Number(onlyTanggal[2]), Number(onlyTanggal[1]) - 1, Number(onlyTanggal[0]))

                            if (nowTrans.getTime() < tanggalHariIni && postDataDetilTransaksi.StatusTransaksi == "1" && postDataDetilTransaksi.IdMitra == "<?= session()->get('IDKelola') ?>") {

                                // postDataDetilTransaksi.StatusTransaksi = "2";
                                // postDataDetilTransaksi.TanggalUpdate = new Date().toString("ID");
                                // const loadData = {};
                                // loadData['/Transaction-Hotel/' + keysID[loop]] = postDataDetilTransaksi;
                                // update(ref(db), loadData);
                                counsTRANSAKSI.push(keysID[loop])

                                if (couns.length == 0) {
                                    let objData = {
                                        idKamar: postDataDetilTransaksi.IdKamar,
                                        jumlah: (Number(postDataDetilTransaksi.JumlahKamar)),
                                        idTrans: couns.length
                                    }
                                    couns.push(objData)
                                } else if (couns.find(c => c.idKamar == postDataDetilTransaksi.IdKamar)) {
                                    let TempSementara = couns.find(c => c.idKamar == postDataDetilTransaksi.IdKamar);
                                    let index = couns.indexOf(TempSementara);
                                    TempSementara.jumlah = "" + (Number(TempSementara.jumlah) + Number(postDataDetilTransaksi.JumlahKamar))
                                    couns[index] = TempSementara;

                                } else {
                                    let objData = {
                                        idKamar: postDataDetilTransaksi.IdKamar,
                                        jumlah: (Number(postDataDetilTransaksi.JumlahKamar)),
                                        idTrans: couns.length
                                    }
                                    couns.push(objData)
                                }
                            }
                        })
                    }

                    console.log(counsTRANSAKSI)
                    let arrayCountTRANS = []
                    let hha = 0;
                    for (let h = 0; h < counsTRANSAKSI.length; h++) {
                        let tempsUPDATEETRANS = {};
                        let dbTRAS = ref(db, 'Transaction-Hotel/' + counsTRANSAKSI[h]);
                        onValue(dbTRAS, (snaptransaksiii) => {
                            let tam = snaptransaksiii.val();

                            if (arrayCountTRANS.includes(counsTRANSAKSI[h]) == false) {

                                tam.StatusTransaksi = "2";
                                tam.TanggalUpdate = new Date().toString("ID");


                                arrayCountTRANS.push(counsTRANSAKSI[h])
                                tempsUPDATEETRANS['/Transaction-Hotel/' + counsTRANSAKSI[h]] = tam;
                                update(ref(db), tempsUPDATEETRANS);
                            }
                        })
                    }

                    let arrayCount = []
                    let gg = 0;
                    for (let i = 0; i < couns.length; i++) {
                        gg = 0;
                        let updateCount = {}
                        let tableMaster = ref(db, 'Master-Data-Hotel-Detail/' + couns[i].idKamar);
                        onValue(tableMaster, (snapMS) => {
                            let temp = snapMS.val();

                            if (arrayCount.includes(couns[i].idTrans) == false) {
                                let jumlahData = Number(temp.JumlahKamar) + Number(couns[i].jumlah)

                                let temss = {
                                    FasilitasKamar: temp.FasilitasKamar,
                                    HargaKamar: temp.HargaKamar,
                                    IdHotel: temp.IdHotel,
                                    JumlahKamar: "" + jumlahData,
                                    MaksimalMenginap: temp.MaksimalMenginap,
                                    NamaKamar: temp.NamaKamar,
                                    StatusKamar: temp.StatusKamar,
                                    TanggalBuat: temp.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID"),
                                    fotoKamar: temp.fotoKamar
                                }

                                arrayCount.push(couns[i].idTrans)
                                // console.log(couns[i].idTrans)
                                updateCount['/Master-Data-Hotel-Detail/' + couns[i].idKamar] = temss;
                                update(ref(db), updateCount);
                            } else {
                                // console.log(couns[i].idTrans)
                            }



                        })

                        // update(ref(db), updateCount);
                    }
                    // update(ref(db), updateCount);
                })
            }
        <?php } ?>

        <?php if (session()->get('Jenis') == "Mitra-Rental") { ?>
            CekDataRental();

            function CekDataRental() {
                const cekData1 = ref(db, 'Transaction-Rental');
                onValue(cekData1, (snapshot) => {
                    const cek = snapshot.val();
                    const keys = Object.keys(cek);

                    for (const isi in keys) {
                        const cekData2 = ref(db, 'Transaction-Rental/' + keys[isi]);
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
                                        loadData['/Transaction-Rental/' + keys[isi]] = cek1;
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
        <?php } ?>
    </Script>
</body>

</html>