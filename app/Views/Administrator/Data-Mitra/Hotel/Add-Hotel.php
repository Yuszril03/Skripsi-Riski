<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Tambah Mitra Hotel</title>

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

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">

    <style>
        #map {

            position: relative;
            top: 0;
            bottom: 0;
            height: 300px;
            width: auto;
        }

        canvas {
            height: 300px;
        }

        .mapboxgl-canvas {
            border-radius: 15px;
        }

        .mapboxgl-ctrl-bottom-left {
            display: none;
        }

        .mapboxgl-ctrl-bottom-right {
            display: none;
        }

        .overlay {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .overlay button {
            font: 600 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            background-color: #3386c0;
            color: #fff;
            display: inline-block;
            margin: 0;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .coordinates {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            position: absolute;
            bottom: 40px;
            left: 10px;
            padding: 5px 10px;
            margin: 0;
            font-size: 11px;
            line-height: 18px;
            border-radius: 3px;
            display: none;
        }

        .overlay button:hover {
            background-color: #4ea0da;
        }

        .file-upload,
        .file-upload-Detail {
            height: max-content;
            border: 2px dotted gray;
            border-radius: 15px;
            margin-bottom: 10px;

        }

        .Imagees,
        .Imagees-Detail {
            min-height: 200px;
            width: 50%;
            margin: auto;
            object-fit: cover;
            padding: 20px;
            margin-top: 20px;
        }

        .Imagees img,
        .Imagees-Detail img {
            width: 100%;
        }

        .file-upload-input,
        .file-upload-input-Detail {
            opacity: 0;
            height: 100px;
        }
    </style>

    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>

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
                            <h1 class="m-0">Tambah Mitra Hotel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Mitra Hotel</li>
                                <li class="breadcrumb-item active">Tambah Mitra Hotel</li>
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

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-person text-primary"></i> Data Personal
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Nama Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="NamaMitra" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="EmailMitra" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Telefon Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="telefonMitra" onkeypress="return hanyaAngka(this)" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Mitra</label>
                                        <input type="text" readonly value="Mitra-Hotel" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-input-cursor-text text-primary"></i> Data Detail Hotel
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-12">

                                    <div class="form-group">
                                        <label for="">Foto Profil Hotel</label>
                                    </div>
                                    <div class="file-upload">
                                        <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                        <div class="Imagees">
                                            <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                            <img src="" id="AddImage" alt="">
                                        </div>
                                        <center>
                                            <div class="image-upload-wrap" style="margin-top: -110px ;">
                                                <input id="uploadFilee" accept="image/*" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                <div class="drag-text mt-4">
                                                    <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                </div>
                                            </div>
                                            <p class="image-title">Uploaded Image</p>
                                        </center>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Hotel<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="namaHotel" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>


                                </div>
                                <div class="col-lg-6 col-12">
                                    <div id="map"></div>
                                    <pre style="opacity: 0;" id="coordinates" class="coordinates"></pre>
                                    <div class="overlay">
                                        <!-- <button id="replay">Replay</button> -->
                                        <p id="ok"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat Hotel<sup><span class="text-danger">*</span></sup></label>
                                        <textarea readonly class="form-control" style="border-radius: 15px;  height: 41px;" name="alamat" id="alamat" cols="5"></textarea>
                                    </div>
                                    <input type="hidden" id="longlitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    <input type="hidden" id="latitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Hotel<sup><span class="text-danger">*</span></sup></label>
                                <textarea class="form-control" style="border-radius: 15px; " placeholder="Ketik di sini..." name="deskripsi" id="deskripsi" cols="5"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="float-right ">
                                    <button class="btn btn-success btn-sm m-1" onclick="modalDetails('Tambah')" title="Tambah Data" data-toggle="modal" data-target="#tambahKamar" style="border-radius: 15px;"> <i class="fa fa-plus-circle"></i></button>
                                    <button id="EditDetails" class="btn btn-warning btn-sm m-1" onclick="modalDetails('Edit')" title="Edit Data" data-toggle="modal" data-target="#tambahKamar" style="border-radius: 15px;"> <i class="bi bi-pencil-square"></i></button>
                                    <button id="hapusDetails" class="btn btn-danger btn-sm m-1" title="Hapus Data" style="border-radius: 15px;"> <i class="bi bi-trash3"></i></button>
                                </div>
                                <label for="">Jenis Kamar Hotel<sup><span class="text-danger">*</span></sup></label>
                                <p id="alertJenisKendaraan" class="text-danger" style="font-size: 14px; margin-top: -8px;">Jenis Kamar masih kosong</p>
                            </div>
                            <div class="table-responsive">
                                <table id="TableDetail" class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Jenis Kamar</th>
                                            <th>Fasilitas Kamar</th>
                                            <th>Harga Kamar</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Maksimal Menginap</th>
                                            <th>Status Kamar</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>

                                        </tr>
                                    </tbody> -->
                                </table>
                            </div>
                            <div class="float-right">
                                <button type="button" id="submitDataAll" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Kamar -->
                    <div class="modal fade" id="tambahKamar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content" style="border-radius: 15px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span id="titleModalDetail"></span> Kamar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="idDataDetilss">
                                    <input type="hidden" id="tempUploadData">
                                    <div class="form-group">
                                        <label for="">Foto Profil Kamar<sup><span class="text-danger">*</span></sup></label>
                                    </div>
                                    <div class="file-upload-Detail" id="fileDetail">
                                        <button type="button" id="btnCancelImageDetail" onclick="removeUploadDetail()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                        <div class="Imagees-Detail">
                                            <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImageDetail" alt="">
                                            <img src="" id="AddImageDetail" alt="">
                                        </div>
                                        <center>
                                            <div class="image-upload-wrap-Detail" style="margin-top: -110px ;">
                                                <input id="uploadFileeDetail" accept="image/*" class="file-upload-input-Detail" type='file' onchange="readURLDetail(this);" />

                                                <div class="drag-text mt-4">
                                                    <h6 style="margin-top:-20px;">Seret dan jatuhkan file atau pilih tambahkan Gambar</h6>
                                                </div>
                                            </div>
                                            <p class="image-title-Detail">Uploaded Image</p>
                                        </center>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Kamar<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="namaKamar" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Harga Kamar<sup><span class="text-danger">*</span></sup></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input id="hargaKamar" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Jumlah Kamar<sup><span class="text-danger">*</span></sup></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-door-open"></i></span>
                                                    </div>
                                                    <input id="jumlahKamar" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Maksimal Menginap<sup><span class="text-danger">*</span></sup></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                    <input id="maksimalMenginap" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Tentukan Maksimal hari Menginap..." aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="alert" class="text-danger">Maksimal 30 Hari Menginap</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fasilitas Kamar<sup><span class="text-danger">*</span></sup></label>
                                        <textarea name="fasilitas" id="fasilitas" class="form-control" style="border-radius: 15px;" rows="5" placeholder="Ketik di sini..."></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button id="submitDetails" type="button" class="btn btn-primary">Simpan</button>
                                </div>
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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

    <script src="<?= base_url() ?>/MD5/md5.min.js"></script>

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
        import {
            getStorage,
            ref as refImage,
            uploadBytesResumable,
            getDownloadURL
        } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-storage.js";


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
        const storage = getStorage();

        var localDataDetail = [];
        var indexz;
        var fileEditTemps;

        var parseJsonHotel = [];
        var parseJsonPartner = [];
        var parseJsonEmailPartner = [];

        const starCountRef = ref(db, 'Master-Data-Hotel/');
        onValue(starCountRef, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            for (const isi in keys) {
                const ValueItem = ref(db, 'Master-Data-Hotel/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {

                    parseJsonHotel.push(keys[isi])
                })
            }

        });

        const starCountRef2 = ref(db, 'Master-Data-Mitra/');
        onValue(starCountRef2, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            // console.log(keys)

            for (const isi in keys) {
                const ValueItem = ref(db, 'Master-Data-Mitra/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {

                    parseJsonPartner.push(keys[isi]);
                    parseJsonEmailPartner.push(kontenn.val().EmailMitra)
                })
            }

        });

        var table = $('#TableDetail').DataTable({
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "pageLength": 5,
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

        $('#TableDetail tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                indexz = null;
                $('#hapusDetails').hide()
                $('#EditDetails').hide()

            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                indexz = table.row(this).index()

                if (localDataDetail.length == 0) {
                    $(this).removeClass('selected');
                    indexz = null;
                } else {
                    $('#hapusDetails').show()
                    $('#EditDetails').show()
                }
            }
        });

        document.getElementById('hapusDetails').addEventListener('click', function() {

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Menghapus data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    var ta = table.cells();
                    var s = 0;
                    // console.log(table.page.info()['start'])
                    // console.log(indexz)
                    var z = $('#TableDetail tbody tr');
                    if (table.page.info()['start'] == 0) {
                        s = indexz;
                    } else {
                        s = indexz - table.page.info()['start'];

                    }
                    let tempData = [];
                    for (let i = 0; i < localDataDetail.length; i++) {
                        if (localDataDetail[i].idDetail != Number(document.getElementsByName('idDetailT[]')[s].value)) {
                            tempData.push(localDataDetail[i])
                        }
                    }

                    localDataDetail = tempData

                    table
                        .clear()
                        .draw(false);
                    for (let j = 0; j < tempData.length; j++) {
                        table.row.add([
                            `<input type="hidden" name="idDetailT[]" value="${tempData[j].idDetail}">
                        <input type="hidden" name="namaKamarT[]" value="${tempData[j].namaKamar}">` +
                            tempData[j].namaKamar,
                            `<input type="hidden" name="fasilitasKamarT[]" value="${tempData[j].fasilitas}">` +
                            tempData[j].fasilitas,
                            `<input type="hidden" name="hargaKamarT[]" value="${tempData[j].HargaKamar}">` +
                            tempData[j].HargaKamar,
                            `<input type="hidden" name="jumlahKamarT[]" value="${tempData[j].JumlahKamar}">` +
                            tempData[j].JumlahKamar,
                            `<input type="hidden" name="maksimalMenginapT[]" value="${tempData[j].MaksimalMenginap}">` +
                            tempData[j].MaksimalMenginap,
                            ` <span class="badge badge-danger">Belum Tersimpan</span>`
                        ]).draw(false)

                    }

                    Swal.fire(
                        'Berhasil!',
                        'Data berhasil terhapus.',
                        'success'
                    )
                    $('#hapusDetails').hide()
                    $('#EditDetails').hide()
                }
            })

        })

        document.getElementById('EditDetails').addEventListener('click', function() {
            var ta = table.cells();
            var s = 0;
            resetModal()
            // console.log(table.page.info()['start'])
            // console.log(indexz)
            var z = $('#TableDetail tbody tr');
            if (table.page.info()['start'] == 0) {
                s = indexz;
            } else {
                s = indexz - table.page.info()['start'];

            }
            let uploadFIless;
            for (let i = 0; i < localDataDetail.length; i++) {
                if (localDataDetail[i].idDetail == Number(document.getElementsByName('idDetailT[]')[s].value)) {
                    uploadFIless = localDataDetail[i].foto
                }
            }
            fileEditTemps = uploadFIless
            document.getElementById('idDataDetilss').value = document.getElementsByName('idDetailT[]')[s].value
            document.getElementById('namaKamar').value = document.getElementsByName('namaKamarT[]')[s].value
            document.getElementById('hargaKamar').value = document.getElementsByName('hargaKamarT[]')[s].value
            document.getElementById('maksimalMenginap').value = document.getElementsByName('maksimalMenginapT[]')[s].value
            document.getElementById('jumlahKamar').value = document.getElementsByName('jumlahKamarT[]')[s].value
            document.getElementById('fasilitas').value = document.getElementsByName('fasilitasKamarT[]')[s].value
            document.getElementById('tempUploadData').value = uploadFIless.name
            // $('#uploadFileeDetail').prop('files')[0] = uploadFIless
            readURLDetailEditt(uploadFIless)
        })

        //submit details
        document.getElementById('submitDetails').addEventListener('click', function() {
            let jenisSubmit = document.getElementById('titleModalDetail').innerHTML;
            let idDetails = ['uploadFileeDetail', 'namaKamar', 'hargaKamar', 'jumlahKamar', 'fasilitas', 'maksimalMenginap'];
            let jumlahDetails = 0;

            for (let i = 0; i < idDetails.length; i++) {
                if (i == 0) {
                    if (jenisSubmit == "Tambah") {
                        if (document.getElementById(idDetails[i]).value == "") {
                            jumlahDetails++;
                            document.getElementById("fileDetail").style.border = "2px dotted red";
                        } else {
                            document.getElementById("fileDetail").style.border = "2px dotted gray";
                        }
                    } else {
                        if (document.getElementById(idDetails[i]).value == "" && document.getElementById('tempUploadData').value == "") {
                            jumlahDetails++;
                            document.getElementById("fileDetail").style.border = "2px dotted red";
                        } else {
                            document.getElementById("fileDetail").style.border = "2px dotted gray";
                        }
                    }

                } else if (i == 5) {
                    if (document.getElementById(idDetails[i]).value > 30) {
                        jumlahDetails++;
                        $('#alert').show()
                    } else {
                        $('#alert').hide()
                    }
                    if (document.getElementById(idDetails[i]).value == "") {
                        jumlahDetails++;
                        $('#' + idDetails[i]).addClass('is-invalid')
                    } else {
                        $('#' + idDetails[i]).removeClass('is-invalid')
                    }

                } else if (document.getElementById(idDetails[i]).value == "") {
                    jumlahDetails++;
                    $('#' + idDetails[i]).addClass('is-invalid')
                } else {
                    $('#' + idDetails[i]).removeClass('is-invalid')
                }
            }

            if (jumlahDetails == 0) {
                if (jenisSubmit == "Tambah") {
                    let NoUrut = 0;
                    if (localDataDetail.length == 0) {
                        NoUrut = 1;
                    } else {
                        NoUrut = localDataDetail[localDataDetail.length - 1].idDetail + 1
                    }
                    let dataDetailsTemp = {
                        foto: $('#uploadFileeDetail').prop('files')[0],
                        namaKamar: document.getElementById("namaKamar").value,
                        HargaKamar: document.getElementById("hargaKamar").value,
                        JumlahKamar: document.getElementById("jumlahKamar").value,
                        fasilitas: document.getElementById("fasilitas").value,
                        MaksimalMenginap: document.getElementById("maksimalMenginap").value,
                        idDetail: NoUrut
                    }

                    localDataDetail.push(dataDetailsTemp)

                    table.row.add([
                        `<input type="hidden" name="idDetailT[]" value="${NoUrut}">
                        <input type="hidden" name="namaKamarT[]" value="${document.getElementById("namaKamar").value}">` +
                        document.getElementById("namaKamar").value,
                        `<input type="hidden" name="fasilitasKamarT[]" value="${document.getElementById("fasilitas").value}">` +
                        document.getElementById("fasilitas").value,
                        `<input type="hidden" name="hargaKamarT[]" value="${document.getElementById("hargaKamar").value}">` +
                        `Rp. ` + document.getElementById("hargaKamar").value,
                        `<input type="hidden" name="jumlahKamarT[]" value="${document.getElementById("jumlahKamar").value}">` +
                        document.getElementById("jumlahKamar").value,
                        `<input type="hidden" name="maksimalMenginapT[]" value="${document.getElementById("maksimalMenginap").value}">` +
                        document.getElementById("maksimalMenginap").value,
                        ` <span class="badge badge-danger">Belum Tersimpan</span>`
                    ]).draw(false)
                    resetModal()
                    $('#tambahKamar').modal('hide')
                } else {
                    for (let i = 0; i < localDataDetail.length; i++) {
                        if (localDataDetail[i].idDetail == Number(document.getElementById('idDataDetilss').value)) {
                            if (document.getElementById('uploadFileeDetail').value != "") {
                                localDataDetail[i].foto = $('#uploadFileeDetail').prop('files')[0]
                            } else {
                                localDataDetail[i].foto = fileEditTemps
                            }

                            localDataDetail[i].namaKamar = document.getElementById("namaKamar").value
                            localDataDetail[i].HargaKamar = document.getElementById("hargaKamar").value
                            localDataDetail[i].JumlahKamar = document.getElementById("jumlahKamar").value
                            localDataDetail[i].fasilitas = document.getElementById("fasilitas").value
                            localDataDetail[i].MaksimalMenginap = document.getElementById("maksimalMenginap").value
                        }
                    }
                    table
                        .clear()
                        .draw(false);
                    for (let j = 0; j < localDataDetail.length; j++) {

                        table.row.add([
                            `<input type="hidden" name="idDetailT[]" value="${localDataDetail[j].idDetail}">
                        <input type="hidden" name="namaKamarT[]" value="${localDataDetail[j].namaKamar}">` +
                            localDataDetail[j].namaKamar,
                            `<input type="hidden" name="fasilitasKamarT[]" value="${ localDataDetail[j].fasilitas}">` +
                            localDataDetail[j].fasilitas,
                            `<input type="hidden" name="hargaKamarT[]" value="${localDataDetail[j].HargaKamar}">` +
                            `Rp. ` + localDataDetail[j].HargaKamar,
                            `<input type="hidden" name="jumlahKamarT[]" value="${localDataDetail[j].JumlahKamar}">` +
                            localDataDetail[j].JumlahKamar,
                            `<input type="hidden" name="maksimalMenginapT[]" value="${localDataDetail[j].MaksimalMenginap}">` +
                            localDataDetail[j].MaksimalMenginap,
                            ` <span class="badge badge-danger">Belum Tersimpan</span>`
                        ]).draw(false)

                    }

                    // resetModal()
                    $('#hapusDetails').hide()
                    $('#EditDetails').hide()
                    $('#tambahKamar').modal('hide')
                }

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Isi Kolom Dengan Benar & Kolom Pengisian Tidak Boleh Kosong!'
                })
            }

        })

        function resetModal() {
            let idDetails = ['uploadFileeDetail', 'namaKamar', 'hargaKamar', 'jumlahKamar', 'fasilitas', 'maksimalMenginap'];

            for (let i = 0; i < idDetails.length; i++) {
                if (i == 0) {
                    document.getElementById("fileDetail").style.border = "2px dotted gray";
                    document.getElementById("uploadFileeDetail").value = ""
                    document.getElementById('tempUploadData').value = ""
                    fileEditTemps = null
                    //Detail

                    document.getElementById("uploadFileeDetail").value = "";
                    document.getElementById('tempUploadData').value = "";
                    $('#btnCancelImageDetail').hide()
                    $('#AddImageDetail').hide()
                    $('#NoneImageDetail').show()
                    $('.image-title-Detail').hide()
                    $('.file-upload-input-Detail').replaceWith($('.file-upload-input-Detail').clone());
                    $('.file-upload-content-Detail').hide();
                    $('.image-upload-wrap-Detail').show();

                } else {
                    $('#' + idDetails[i]).removeClass('is-invalid')
                    document.getElementById(idDetails[i]).value = ""
                }

            }
        }
        //Detaill Rental
        function readURLDetailEditt(input) {


            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap-Detail').hide();

                $('.file-upload-image-Detail').attr('src', e.target.result);
                $('.file-upload-content-Detail').show();

                $('.image-title-Detail').html(input.name);

                $('#AddImageDetail').show()
                $('#NoneImageDetail').hide()

                document.getElementById('AddImageDetail').src = e.target.result;
            };
            $('#btnCancelImageDetail').show()
            $('.image-title-Detail').show()
            reader.readAsDataURL(input);


        }

        document.getElementById('submitDataAll').addEventListener('click', function() {
            Swal.fire({
                title: 'Apa anda yakin?',
                text: "Menyimpan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    let idData = ['NamaMitra', 'EmailMitra', 'telefonMitra', 'namaHotel', 'alamat', 'deskripsi', 'jenis'];
                    let jumlah = 0;
                    const fileupload = $('#uploadFilee').prop('files')[0];

                    for (let i = 0; i < idData.length; i++) {
                        if (i == 6) {
                            if (localDataDetail.length == 0) {
                                jumlah++;
                                $('#alertJenisKendaraan').show()
                            } else {
                                $('#alertJenisKendaraan').hide()
                            }
                        } else if (document.getElementById(idData[i]).value == "") {
                            $('#' + idData[i]).addClass('is-invalid')
                            jumlah++;
                        } else {
                            $('#' + idData[i]).removeClass('is-invalid')
                        }
                    }

                    if (jumlah == 0) {

                        if (parseJsonEmailPartner.includes((document.getElementById('EmailMitra').value)) == false) {
                            $('#EmailMitra').removeClass('is-invalid')
                            var CodeIDHotel = "";
                            var CodeIDMitra = "";

                            if (parseJsonHotel.length == 0) {
                                CodeIDHotel = "Hotel-1"

                            } else {

                                let arraykey = [];
                                for (let i = 0; i < parseJsonHotel.length; i++) {
                                    let splidata = (parseJsonHotel[i]).split("-")
                                    arraykey[i] = Number(splidata[1])
                                }
                                // console.log(arraykey)
                                let tep = arraykey.sort((a, b) => (a > b ? -1 : 1));

                                let lastID = tep[0]

                                CodeIDHotel = "Hotel-" + (lastID + 1)

                            }


                            if (parseJsonPartner.length == 0) {
                                CodeIDMitra = "Mitra-1"

                            } else {
                                let arraykey = [];
                                for (let i = 0; i < parseJsonPartner.length; i++) {
                                    let splidata = (parseJsonPartner[i]).split("-")
                                    arraykey[i] = Number(splidata[1])
                                }
                                // console.log(arraykey)
                                let tep = arraykey.sort((a, b) => (a > b ? -1 : 1));

                                let lastID = tep[0];

                                CodeIDMitra = "Mitra-" + (lastID + 1)

                            }

                            if (Boolean(fileupload) == false) {
                                //Data Master Hotel
                                set(ref(db, 'Master-Data-Hotel/' + CodeIDHotel), {
                                    NamaHotel: document.getElementById('namaHotel').value,
                                    AlamatHotel: document.getElementById('alamat').value,
                                    DeskripsiHotel: document.getElementById('deskripsi').value,
                                    StatusHotel: 1,
                                    TanggalBuat: new Date().toString("ID"),
                                    TanggalUpdate: new Date().toString("ID"),
                                    fotoHotel: "",
                                    Longlitude: document.getElementById('longlitude').value,
                                    Latitude: document.getElementById('latitude').value
                                });
                                //Data Master Wisata
                                set(ref(db, 'Master-Data-Mitra/' + CodeIDMitra), {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailMitra').value,
                                    StatusMitra: 1,
                                    TelefonMitra: document.getElementById('telefonMitra').value + "",
                                    TanggalBuat: new Date().toString("ID"),
                                    TanggalUpdate: new Date().toString("ID")
                                });

                                //Data Master Account Mitra
                                set(ref(db, 'Master-Data-Account-Mitra/' + CodeIDMitra), {
                                    KataSandiMitra: md5('12345678'),
                                    JenisMitra: "Mitra-Hotel",
                                    IDKelolaMitra: CodeIDHotel
                                });

                                for (let h = 0; h < localDataDetail.length; h++) {
                                    const fileuploadDetail = localDataDetail[h].foto;
                                    const storageRefDetail = refImage(storage, 'images-rental-detail/' + new Date().getTime() + '-' + fileuploadDetail.name);

                                    const uploadTaskDetail = uploadBytesResumable(storageRefDetail, fileuploadDetail);

                                    uploadTaskDetail.on('state_changed',
                                        (snapshot) => {
                                            // Observe state change events such as progress, pause, and resume
                                            // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                            const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                            console.log('Upload is ' + progress + '% done');
                                            switch (snapshot.state) {
                                                case 'paused':
                                                    console.log('Upload is paused');
                                                    break;
                                                case 'running':
                                                    console.log('Upload is running');
                                                    break;
                                            }
                                        },
                                        (error) => {
                                            // Handle unsuccessful uploads
                                        },
                                        () => {
                                            // Handle successful uploads on complete
                                            // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                            getDownloadURL(uploadTaskDetail.snapshot.ref).then((downloadURL) => {
                                                console.log('File available at', downloadURL);

                                                let dataIDDetails = [];

                                                const starCountRef = ref(db, 'Master-Data-Hotel-Detail/');
                                                onValue(starCountRef, (snapshot) => {
                                                    const data = snapshot.val();
                                                    // dataIDDetails = Object.keys(data);
                                                    let TempsData = Object.keys(data);
                                                    let noUrut = 0;
                                                    if (TempsData.length == 0) {
                                                        noUrut = 1;
                                                    } else {
                                                        noUrut = Number(TempsData[TempsData.length - 1]) + 1;
                                                    }
                                                    dataIDDetails.push(noUrut);

                                                });
                                                // let idDetails = 0;
                                                // if (dataIDDetails.length == 0) {
                                                //     idDetails = 1;
                                                // } else {
                                                //     idDetails = Number(dataIDDetails[dataIDDetails.length - 1]) + 1;
                                                // }

                                                // console.log(dataIDDetails)

                                                //Data Master Details
                                                set(ref(db, 'Master-Data-Hotel-Detail/' + dataIDDetails[dataIDDetails.length-1]), {
                                                    NamaKamar: localDataDetail[h].namaKamar,
                                                    HargaKamar: localDataDetail[h].HargaKamar,
                                                    StatusKamar: 1,
                                                    JumlahKamar: localDataDetail[h].JumlahKamar,
                                                    FasilitasKamar: localDataDetail[h].fasilitas,
                                                    MaksimalMenginap: localDataDetail[h].MaksimalMenginap,
                                                    TanggalBuat: new Date().toString("ID"),
                                                    TanggalUpdate: new Date().toString("ID"),
                                                    fotoKamar: downloadURL,
                                                    IdHotel: CodeIDHotel
                                                });


                                            });
                                        }
                                    );


                                }
                                // Swal.fire({
                                //     title: 'Berhasil',
                                //     text: 'Data berhasil tersimpan.',
                                //     icon: 'success',
                                //     timer: 5000,
                                //     showCancelButton: false,
                                //     confirmButtonColor: '#3085d6',
                                //     cancelButtonColor: '#d33',
                                //     confirmButtonText: 'Okey'
                                // }).then((result) => {
                                //     if (result.isConfirmed) {
                                //         location.href = "<?= base_url() ?>/Mitra-Hotel"
                                //     }
                                // })


                            } else {
                                const storageRef = refImage(storage, 'images-hotel/' + new Date().getTime() + '-' + fileupload.name);

                                // Upload the file and metadata
                                const uploadTask = uploadBytesResumable(storageRef, fileupload);

                                // Register three observers:
                                // 1. 'state_changed' observer, called any time the state changes
                                // 2. Error observer, called on failure
                                // 3. Completion observer, called on successful completion
                                uploadTask.on('state_changed',
                                    (snapshot) => {
                                        // Observe state change events such as progress, pause, and resume
                                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                        console.log('Upload is ' + progress + '% done');
                                        switch (snapshot.state) {
                                            case 'paused':
                                                console.log('Upload is paused');
                                                break;
                                            case 'running':
                                                console.log('Upload is running');
                                                break;
                                        }
                                    },
                                    (error) => {
                                        // Handle unsuccessful uploads
                                    },
                                    () => {
                                        // Handle successful uploads on complete
                                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                                            console.log('File available at', downloadURL);
                                            //Data Master Rental
                                            set(ref(db, 'Master-Data-Hotel/' + CodeIDHotel), {
                                                NamaHotel: document.getElementById('namaHotel').value,
                                                AlamatHotel: document.getElementById('alamat').value,
                                                DeskripsiHotel: document.getElementById('deskripsi').value,
                                                StatusHotel: 1,
                                                TanggalBuat: new Date().toString("ID"),
                                                TanggalUpdate: new Date().toString("ID"),
                                                fotoHotel: downloadURL,
                                                Longlitude: document.getElementById('longlitude').value,
                                                Latitude: document.getElementById('latitude').value
                                            });
                                            //Data Master Wisata
                                            set(ref(db, 'Master-Data-Mitra/' + CodeIDMitra), {
                                                NamaMitra: document.getElementById('NamaMitra').value,
                                                EmailMitra: document.getElementById('EmailMitra').value,
                                                StatusMitra: 1,
                                                TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                TanggalBuat: new Date().toString("ID"),
                                                TanggalUpdate: new Date().toString("ID")
                                            });

                                            //Data Master Account Wisata
                                            set(ref(db, 'Master-Data-Account-Mitra/' + CodeIDMitra), {
                                                KataSandiMitra: md5('12345678'),
                                                JenisMitra: "Mitra-Hotel",
                                                IDKelolaMitra: CodeIDHotel
                                            });

                                            for (let h = 0; h < localDataDetail.length; h++) {
                                                const fileuploadDetail = localDataDetail[h].foto;
                                                const storageRefDetail = refImage(storage, 'images-rental-hotel/' + new Date().getTime() + '-' + fileuploadDetail.name);

                                                const uploadTaskDetail = uploadBytesResumable(storageRefDetail, fileuploadDetail);

                                                uploadTaskDetail.on('state_changed',
                                                    (snapshot) => {
                                                        // Observe state change events such as progress, pause, and resume
                                                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                                        console.log('Upload is ' + progress + '% done');
                                                        switch (snapshot.state) {
                                                            case 'paused':
                                                                console.log('Upload is paused');
                                                                break;
                                                            case 'running':
                                                                console.log('Upload is running');
                                                                break;
                                                        }
                                                    },
                                                    (error) => {
                                                        // Handle unsuccessful uploads
                                                    },
                                                    () => {
                                                        // Handle successful uploads on complete
                                                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                                        getDownloadURL(uploadTaskDetail.snapshot.ref).then((downloadURL2) => {
                                                            console.log('File available at', downloadURL2);

                                                            let dataIDDetails = [];

                                                            const starCountRef = ref(db, 'Master-Data-Hotel-Detail/');
                                                            onValue(starCountRef, (snapshot) => {
                                                                const data = snapshot.val();
                                                                dataIDDetails = Object.keys(data);
                                                            });
                                                            let idDetails = 0;
                                                            if (dataIDDetails.length == 0) {
                                                                idDetails = 1;
                                                            } else {
                                                                idDetails = Number(dataIDDetails[dataIDDetails.length - 1]) + 1;
                                                            }

                                                            console.log(idDetails)

                                                            //Data Master Details
                                                            set(ref(db, 'Master-Data-Hotel-Detail/' + idDetails), {
                                                                NamaKamar: localDataDetail[h].namaKamar,
                                                                HargaKamar: localDataDetail[h].HargaKamar,
                                                                StatusKamar: 1,
                                                                JumlahKamar: localDataDetail[h].JumlahKamar,
                                                                FasilitasKamar: localDataDetail[h].fasilitas,
                                                                MaksimalMenginap: localDataDetail[h].MaksimalMenginap,
                                                                TanggalBuat: new Date().toString("ID"),
                                                                TanggalUpdate: new Date().toString("ID"),
                                                                fotoKamar: downloadURL2,
                                                                IdHotel: CodeIDHotel
                                                            });


                                                        });
                                                    }
                                                );


                                            }
                                            Swal.fire({
                                                title: 'Berhasil',
                                                text: 'Data berhasil tersimpan.',
                                                icon: 'success',
                                                showCancelButton: false,
                                                showConfirmButton: false,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Okey',
                                                timer: 5000
                                            }).then((result) => {
                                                if (result.dismiss === Swal.DismissReason.timer) {
                                                    location.href = "<?= base_url() ?>/Mitra-Hotel"
                                                }
                                            })


                                        });
                                    }
                                );


                            }


                        } else {
                            $('#EmailMitra').addClass('is-invalid')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Email sudah digunakan!'
                            })
                        }

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Kolom pengisian Tidak Boleh Kosong!'
                        })
                    }


                }
            })
        })
    </script>

    <script>
        function modalDetails(textx) {
            document.getElementById('titleModalDetail').innerHTML = textx;
            let idDetails = ['uploadFileeDetail', 'namaKamar', 'hargaKamar', 'jumlahKamar', 'fasilitas', ' maksimalMenginap'];

            if (textx == "Tambah") {
                document.getElementById("uploadFileeDetail").value = "";
                document.getElementById('tempUploadData').value = "";
                readURLDetail(document.getElementById("uploadFileeDetail"))
                for (let i = 0; i < idDetails.length; i++) {
                    if (i == 0) {
                        document.getElementById("fileDetail").style.border = "2px dotted gray";
                        document.getElementById("uploadFileeDetail").value = ""
                        //Detail
                        $('#btnCancelImageDetail').hide()
                        $('#AddImageDetail').hide()
                        $('.image-title-Detail').hide()
                        $('#NoneImageDetail').show()
                    } else {
                        $('#' + idDetails[i]).removeClass('is-invalid')
                        document.getElementById(idDetails[i]).value = ""
                    }
                }
            }

        }

        $('#alert').hide()
        $('#alertJenisKendaraan').hide()
        $('#hapusDetails').hide()
        $('#EditDetails').hide()

        //Detail
        $('#btnCancelImageDetail').hide()
        $('#AddImageDetail').hide()
        $('.image-title-Detail').hide()
        $('#NoneImageDetail').show()


        $('#btnCancelImage').hide()
        $('#AddImage').hide()
        $('.image-title').hide()
        $('#NoneImage').show()

        function KeluarForm() {
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Meninggalkan halaman ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "<?= base_url() ?>/Mitra-Hotel"
                }
            })
        }

        function hapusKamar() {
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Menghapus kamar ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    // location.href = "<?= base_url() ?>/Mitra-Wisata"
                }
            })
        }

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);

                    $('#AddImage').show()
                    $('#NoneImage').hide()

                    document.getElementById('AddImage').src = e.target.result;
                };
                $('#btnCancelImage').show()
                $('.image-title').show()
                reader.readAsDataURL(input.files[0]);


            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            document.getElementById("uploadFilee").value = "";
            $('#btnCancelImage').hide()
            $('#AddImage').hide()
            $('#NoneImage').show()
            $('.image-title').hide()
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });

        //Detaill Rental
        function readURLDetail(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap-Detail').hide();

                    $('.file-upload-image-Detail').attr('src', e.target.result);
                    $('.file-upload-content-Detail').show();

                    $('.image-title-Detail').html(input.files[0].name);

                    $('#AddImageDetail').show()
                    $('#NoneImageDetail').hide()

                    document.getElementById('AddImageDetail').src = e.target.result;
                };
                $('#btnCancelImageDetail').show()
                $('.image-title-Detail').show()
                reader.readAsDataURL(input.files[0]);


            } else {
                removeUploadDetail();
            }
        }

        function removeUploadDetail() {
            document.getElementById("uploadFileeDetail").value = "";
            document.getElementById('tempUploadData').value = "";
            $('#btnCancelImageDetail').hide()
            $('#AddImageDetail').hide()
            $('#NoneImageDetail').show()
            $('.image-title-Detail').hide()
            $('.file-upload-input-Detail').replaceWith($('.file-upload-input-Detail').clone());
            $('.file-upload-content-Detail').hide();
            $('.image-upload-wrap-Detail').show();
        }
        $('.image-upload-wrap-Detail').bind('dragover', function() {
            $('.image-upload-wrap-Detail').addClass('image-dropping');
        });
        $('.image-upload-wrap-Detail').bind('dragleave', function() {
            $('.image-upload-wrap-Detail').removeClass('image-dropping');
        });

        mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
        const coordinates = document.getElementById('coordinates');
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [117.1485239363954, -0.569178092470267],
            zoom: 10
        });

        const marker = new mapboxgl.Marker({
                draggable: true
            })
            .setLngLat([117.1485239363954, -0.569178092470267])
            .addTo(map);

        function onDragEnd() {
            const lngLat = marker.getLngLat();
            coordinates.style.display = 'block';
            coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
            document.getElementById('latitude').value = lngLat.lat
            document.getElementById('longlitude').value = lngLat.lng

            $.ajax({
                url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
                dataType: "JSON"
            }).done(result => {
                $("#alamat").val(result.features[0].place_name)
            })

        }

        marker.on('dragend', onDragEnd);

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>
</body>

</html>