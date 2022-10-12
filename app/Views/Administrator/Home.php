<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Beranda Administrator</title>

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
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 id="jum-cus">150</h3>

                                    <p>User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 id="jum-mit-wis">53</h3>

                                    <p>Mitra Wisata</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-map"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 id="jum-mit-hot">44</h3>

                                    <p>Mitra Hotel</p>
                                </div>
                                <div class="icon">
                                    <i class="ion bi bi-door-open-fill"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3 id="jum-mit-ren">65</h3>

                                    <p>Mitra Rental</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->



                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col connectedSortable">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Grafik Transaksi Tahun <?= date('Y') ?>
                                    </h3>

                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                        </section>
                        <!-- /.Left col -->

                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        CekDataWisata();
        CekDataHotel();
        CekDataRental();
        jumlahData();
        setGrafikPenggunaanAPP()

        function setGrafikPenggunaanAPP() {

            let myTanggal = new Date()

            console.log(myTanggal.getMonth())

            const labels = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];

            let dataListWIsata = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            let dataListHotel = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            let dataListRental = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

            let database1 = ref(db, 'Transaction-Wisata');
            onValue(database1, (snapWisata) => {
                const cekDataWisata = snapWisata.val();
                const keysWisata = Object.keys(cekDataWisata);
                for (let loop1 in keysWisata) {
                    let databaseWisata = ref(db, 'Transaction-Wisata/' + keysWisata[loop1]);
                    onValue(databaseWisata, (snapTransWisata) => {
                        let dataWisata = snapTransWisata.val();

                        let tanggalBuat = dataWisata.TanggalBuat;
                        let dateBuatArray = tanggalBuat.split(" ");
                        let onlyTanggal = dateBuatArray[0].split("/");

                        if (Number(onlyTanggal[2]) == myTanggal.getFullYear()) {
                            if ((Number(onlyTanggal[1]) - 1) == 0) {
                                dataListWIsata[0] = dataListWIsata[0] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 1) {
                                dataListWIsata[1] = dataListWIsata[1] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 2) {
                                dataListWIsata[2] = dataListWIsata[2] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 3) {
                                dataListWIsata[3] = dataListWIsata[3] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 4) {
                                dataListWIsata[4] = dataListWIsata[4] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 5) {
                                dataListWIsata[5] = dataListWIsata[5] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 6) {
                                dataListWIsata[6] = dataListWIsata[6] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 7) {
                                dataListWIsata[7] = dataListWIsata[7] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 8) {
                                dataListWIsata[8] = dataListWIsata[8] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 9) {
                                dataListWIsata[9] = dataListWIsata[9] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 10) {
                                dataListWIsata[10] = dataListWIsata[10] + 1;
                            } else if ((Number(onlyTanggal[1]) - 1) == 11) {
                                dataListWIsata[11] = dataListWIsata[11] + 1;
                            }
                        }

                    })
                }

                let database2 = ref(db, 'Transaction-Hotel');
                onValue(database2, (snapWisata) => {
                    const cekDataWisata = snapWisata.val();
                    const keysWisata = Object.keys(cekDataWisata);



                    for (let loop1 in keysWisata) {
                        let databaseWisata = ref(db, 'Transaction-Hotel/' + keysWisata[loop1]);
                        onValue(databaseWisata, (snapTransWisata) => {
                            let dataWisata = snapTransWisata.val();

                            let tanggalBuat = dataWisata.TanggalBuat;
                            let dateBuatArray = tanggalBuat.split(" ");
                            let onlyTanggal = dateBuatArray[0].split("/");

                            if (Number(onlyTanggal[2]) == myTanggal.getFullYear()) {
                                if ((Number(onlyTanggal[1]) - 1) == 0) {
                                    dataListHotel[0] = dataListHotel[0] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 1) {
                                    dataListHotel[1] = dataListHotel[1] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 2) {
                                    dataListHotel[2] = dataListHotel[2] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 3) {
                                    dataListHotel[3] = dataListHotel[3] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 4) {
                                    dataListHotel[4] = dataListHotel[4] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 5) {
                                    dataListHotel[5] = dataListHotel[5] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 6) {
                                    dataListHotel[6] = dataListHotel[6] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 7) {
                                    dataListHotel[7] = dataListHotel[7] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 8) {
                                    dataListHotel[8] = dataListHotel[8] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 9) {
                                    dataListHotel[9] = dataListHotel[9] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 10) {
                                    dataListHotel[10] = dataListHotel[10] + 1;
                                } else if ((Number(onlyTanggal[1]) - 1) == 11) {
                                    dataListHotel[11] = dataListHotel[11] + 1;
                                }
                            }

                        })
                    }

                    let database3 = ref(db, 'Transaction-Rental');
                    onValue(database3, (snapWisata) => {
                        const cekDataWisata = snapWisata.val();
                        const keysWisata = Object.keys(cekDataWisata);



                        for (let loop1 in keysWisata) {
                            let databaseWisata = ref(db, 'Transaction-Rental/' + keysWisata[loop1]);
                            onValue(databaseWisata, (snapTransWisata) => {
                                let dataWisata = snapTransWisata.val();

                                let tanggalBuat = dataWisata.TanggalBuat;
                                let dateBuatArray = tanggalBuat.split(" ");
                                let onlyTanggal = dateBuatArray[0].split("/");

                                if (Number(onlyTanggal[2]) == myTanggal.getFullYear()) {
                                    if ((Number(onlyTanggal[1]) - 1) == 0) {
                                        dataListRental[0] = dataListRental[0] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 1) {
                                        dataListRental[1] = dataListRental[1] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 2) {
                                        dataListRental[2] = dataListRental[2] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 3) {
                                        dataListRental[3] = dataListRental[3] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 4) {
                                        dataListRental[4] = dataListRental[4] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 5) {
                                        dataListRental[5] = dataListRental[5] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 6) {
                                        dataListRental[6] = dataListRental[6] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 7) {
                                        dataListRental[7] = dataListRental[7] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 8) {
                                        dataListRental[8] = dataListRental[8] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 9) {
                                        dataListRental[9] = dataListRental[9] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 10) {
                                        dataListRental[10] = dataListRental[10] + 1;
                                    } else if ((Number(onlyTanggal[1]) - 1) == 11) {
                                        dataListRental[11] = dataListRental[11] + 1;
                                    }
                                }

                            })
                        }


                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'Wisata',
                                backgroundColor: 'rgb(23, 162, 184)',
                                borderColor: 'rgb(23, 162, 184)',
                                data: dataListWIsata,
                            }, {
                                label: 'Hotel',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: dataListHotel,
                            }, {
                                label: 'Rental',
                                backgroundColor: 'rgb(227, 189, 20)',
                                borderColor: 'rgb(227, 189, 20)',
                                data: dataListRental,
                            }]
                        };

                        const config = {
                            type: 'line',
                            data: data,
                            options: {}
                        };
                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );



                    })


                })



            })



        }

        function CekDataWisata() {
            const cekData1 = ref(db, 'Transaction-Wisata');
            onValue(cekData1, (snapshot) => {
                const cek = snapshot.val();
                const keys = Object.keys(cek);

                for (const isi in keys) {
                    const cekData2 = ref(db, 'Transaction-Wisata/' + keys[isi]);
                    onValue(cekData2, (snapshoot) => {
                        const cek1 = snapshoot.val();

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
                    })
                }
            })
        }

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

                        if (nowTrans.getTime() < tanggalHariIni && postDataDetilTransaksi.StatusTransaksi == "1") {

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

        function CekDataRental() {
            const cekData1 = ref(db, 'Transaction-Rental');
            onValue(cekData1, (snapshot1) => {
                const cek = snapshot1.val();
                const keys = Object.keys(cek);

                for (const isi in keys) {
                    const cekData2 = ref(db, 'Transaction-Rental/' + keys[isi]);
                    onValue(cekData2, (snapshoot1) => {
                        const cek1 = snapshoot1.val();

                        const tanggalHariIni = new Date().toLocaleDateString();
                        let datehariini = tanggalHariIni.split("/");

                        const tanggalBuat = snapshoot1.val().TanggalBuat;
                        let dateBuatArray = tanggalBuat.split("/");

                        // console.log(Number(tanggalHariIni[0]));
                        // console.log(Number(dateBuatArray[0]));

                        if (snapshoot1.val().StatusTransaksi == "1") {
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
                    })
                }
            })
        }

        function jumlahData() {
            const customer = ref(db, 'Master-Data-Customer');
            onValue(customer, (snapshotCustomer) => {
                const wisata = snapshotCustomer.val();
                const keys = Object.keys(wisata);
                let jum = keys.length;
                // console.log(jum);
                document.getElementById("jum-cus").innerHTML = jum;
            })

            const mitraWisata = ref(db, 'Master-Data-Wisata');
            onValue(mitraWisata, (snapshotWisata) => {
                const wisata = snapshotWisata.val();
                const keys = Object.keys(wisata);
                let jum1 = keys.length;
                // console.log(jum1);
                document.getElementById("jum-mit-wis").innerHTML = jum1;
            })

            const mitraHotel = ref(db, 'Master-Data-Hotel');
            onValue(mitraHotel, (snapshotHotel) => {
                const hotel = snapshotHotel.val();
                const keys = Object.keys(hotel);
                let jum2 = keys.length;
                document.getElementById("jum-mit-hot").innerHTML = jum2;
            })

            const mitraRental = ref(db, 'Master-Data-Rental');
            onValue(mitraRental, (snapshotRental) => {
                const rental = snapshotRental.val();
                const keys = Object.keys(rental);
                let jum3 = keys.length;
                document.getElementById("jum-mit-ren").innerHTML = jum3;
            })
        }
    </Script>
</body>

</html>