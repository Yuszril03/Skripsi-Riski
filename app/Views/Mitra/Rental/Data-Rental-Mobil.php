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

        @media only screen and (min-device-width: 1024px) {
            .blockData {
                background-color: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 760px;
                border-radius: 15px;
                margin-top: -850px;
                position: relative;
            }

            .blockImage {
                width: 250px;
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .blockText {
                font-weight: bold;
                color: white;
                position: absolute;
                top: 65%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        @media only screen and (max-width: 360px),
        (min-device-width: 360px) and (max-device-width: 1024px) {
            .blockData {
                background-color: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 1199px;
                border-radius: 15px;
                margin-top: -1285px;
                position: relative;
            }

            .blockImage {
                width: 250px;
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .blockText {
                width: 100%;
                font-weight: bold;
                color: white;
                position: absolute;
                top: 55%;
                left: 55%;
                transform: translate(-50%, -50%);
            }
        }
    </style>
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

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Mobil Rental</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Data Mobil Rental</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="form-group">
                    <div class="float-right ">
                        <button id="tambahDataDetail" class="btn btn-success btn-sm m-1" onclick="modalDetails('Tambah')" title="Tambah Data" data-toggle="modal" data-target="#modalKamar" style="border-radius: 15px;"> <i class="fa fa-plus-circle"></i></button>
                        <button id="EditDetails" class="btn btn-warning btn-sm m-1" title="Edit Data" data-toggle="modal" data-target="#modalEdit" style="border-radius: 15px;"> <i class="bi bi-pencil-square"></i></button>
                        <button id="detailMobil" class="btn btn-primary btn-sm m-1" title="Edit Data" style="border-radius: 15px;"> <i class="bi bi-info-circle"></i></button>
                        <button id="hapusDetails" class="btn btn-danger btn-sm m-1" title="Hapus Data" style="border-radius: 15px;"> <i class="bi bi-trash3"></i></button>
                        <button id="nonaktifdata" class="btn btn-danger btn-sm m-1" title="NonAktifkan Data" style="border-radius: 15px;"> <i class="bi bi-power"></i></button>
                        <button id="aktifdata" class="btn btn-success btn-sm m-1" title="Aktifkan Data" style="border-radius: 15px;"> <i class="bi bi-power"></i></button>
                    </div>
                </div>
                <br>
                <br>

                <div class="card card-outline card-warning" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="TableDetail" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nama Kendaraan</th>
                                        <th>Ukuran Kendaraan</th>
                                        <th>Jumlah Kursi</th>
                                        <th>Harga Sewa</th>
                                        <th>Maksimal Rental</th>
                                        <th>Deskripsi</th>
                                        <th>Status Kendaraan</th>
                                    </tr>
                                </thead>
                                <!-- <tbody>
                                      
                                    </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Add Kamar -->
            <div class="modal fade" id="modalKamar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content" style="border-radius: 15px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><span id="titleModalDetail"></span> Kendaraan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="idDataDetilss">
                            <input type="hidden" id="statuskamar">
                            <input type="hidden" id="idDataDetilssDB">

                            <div class="form-group">
                                <label for="">Foto Kendaraan,<sup><span class="text-danger">*</span></sup></label>
                            </div>
                            <div class="file-upload" id="fileDetail">
                                <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                <div class="Imagees">
                                    <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                    <img src="" id="AddImage" alt="">
                                </div>
                                <center>
                                    <div class="image-upload-wrap" style="margin-top: -110px ;">
                                        <input id="uploadFilee" accept="image/*" class="file-upload-input" type='file' onchange="readURL(this);" />

                                        <div class="drag-text mt-4">
                                            <h6 style="margin-top:-20px;">Seret dan jatuhkan file atau pilih tambahkan Gambar</h6>
                                        </div>
                                    </div>
                                    <p class="image-title">Uploaded Image</p>
                                </center>

                            </div>
                            <div class="form-group">
                                <label for="">Nama Kendaraan<sup><span class="text-danger">*</span></sup></label>
                                <input type="text" id="namaKendaraan" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                            </div>
                            <div class="form-group">
                                <label for="">Ukuran Kendaraan<sup><span class="text-danger">*</span></sup></label>
                                <select name="" style="border-radius: 15px;" class="form-control" id="ukuranKendaraan">
                                    <option value="">Pilih...</option>
                                    <option value="Kecil">Kecil</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Besar">Besar</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Harga Sewa<sup><span class="text-danger">*</span></sup></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                            </div>
                                            <input onkeypress="return hanyaAngka(this)" id="hargaSewa" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Jumlah Kursi<sup><span class="text-danger">*</span></sup></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fas fa-chair"></i></span>
                                            </div>
                                            <input onkeypress="return hanyaAngka(this)" id="jumlahKursi" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Maksimal Rental Mobil<sup><span class="text-danger">*</span></sup></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input id="maksimalRentalMobilAdd" class="form-control" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" placeholder="Tentukan Maksimal hari Rental Mobil..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <span id="alertAdd" class="text-danger">Maksimal 15 Hari Rental</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Kendaraan<sup><span class="text-danger">*</span></sup></label>
                                <textarea placeholder="Ketik di sini..." class="form-control" id="deskripsiKendaraan" style="border-radius: 15px;" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button id="submitDetails" type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Kamar -->
        <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="border-radius: 15px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kamar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="idDataDetilss">
                        <input type="hidden" id="editstatuKendaraan">
                        <input type="hidden" id="idDataDetilssDB">
                        <input type="hidden" id="tempUploadData">
                        <input type="hidden" id="tanggalbuat">

                        <div class="form-group">
                            <label for="">Foto Profil Kamar<sup><span class="text-danger">*</span></sup></label>
                        </div>
                        <div class="file-upload-Detail" id="fileDetailEdit">
                            <button type="button" id="btnCancelImageDetail" onclick="removeUploadDetail()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                            <div class="Imagees-Detail">
                                <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImageDetail" alt="">
                                <img src="" id="AddImageDetail" alt="">
                            </div>
                            <center>
                                <div class="image-upload-wrap-Detail" style="margin-top: -110px ;">
                                    <input id="uploadFileeDetailEdit" accept="image/*" class="file-upload-input-Detail" type='file' onchange="readURLDetail(this);" />

                                    <div class="drag-text mt-4">
                                        <h6 style="margin-top:-20px;">Seret dan jatuhkan file atau pilih tambahkan Gambar</h6>
                                    </div>
                                </div>
                                <p class="image-title-Detail">Uploaded Image</p>
                            </center>

                        </div>
                        <div class="form-group">
                            <label for="">Nama Kendaraan<sup><span class="text-danger">*</span></sup></label>
                            <input type="text" id="namaKendaraanEdit" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                        </div>
                        <div class="form-group">
                            <label for="">Ukuran Kendaraan<sup><span class="text-danger">*</span></sup></label>
                            <select name="" style="border-radius: 15px;" class="form-control" id="ukuranKendaraanEdit">
                                <option value="">Pilih...</option>
                                <option value="Kecil">Kecil</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Besar">Besar</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Harga Sewa<sup><span class="text-danger">*</span></sup></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                        </div>
                                        <input onkeypress="return hanyaAngka(this)" id="hargaSewaEdit" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Jumlah Kursi<sup><span class="text-danger">*</span></sup></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fas fa-chair"></i></span>
                                        </div>
                                        <input onkeypress="return hanyaAngka(this)" id="jumlahKursiEdit" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Maksimal Rental Mobil<sup><span class="text-danger">*</span></sup></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input id="maksimalRentalMobilEdit" class="form-control" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" placeholder="Tentukan Maksimal hari Rental Mobil..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <span id="alertEdit" class="text-danger">Maksimal 15 Hari Rental</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Kendaraan<sup><span class="text-danger">*</span></sup></label>
                            <textarea placeholder="Ketik di sini..." class="form-control" id="deskripsiKendaraanEdit" style="border-radius: 15px;" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button id="submitDetailsEdit" type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

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
        var posisiData;
        var fileEditTemps;

        var parseJsonMitra = {};
        var parseJsonRental = [];
        var parseJsonHotel = [];
        var parseJsonPartner = [];
        var parseJsonEmailPartner = [];
        var DataTempMitra = {};
        var DataTempHotel = {};



        $('#alertJenisKendaraan').hide()
        $('#alertStatusNonAktif').hide()
        $('#hapusDetails').hide()
        $('#EditDetails').hide()
        $('#detailMobil').hide()
        $('#nonaktifdata').hide()
        $('#aktifdata').hide()

        var table = $('#TableDetail').DataTable({
            "lengthChange": false,

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
        var datatEmpsDetails = [];
        const ValueItemDetailRental = ref(db, 'Master-Data-Rental-Detail/');
        onValue(ValueItemDetailRental, (kontenn) => {
            const keys = Object.keys(kontenn.val());
            let NoUrut = 0;
            datatEmpsDetails = keys

            for (const isi in keys) {
                const ValueItem = ref(db, 'Master-Data-Rental-Detail/' + keys[isi]);
                onValue(ValueItem, (kontenn2) => {
                    if (kontenn2.val().IdRental == "<?= session()->get('IDKelola') ?>") {


                        if (localDataDetail.length == 0) {
                            NoUrut = 1;
                        } else {
                            NoUrut = localDataDetail[localDataDetail.length - 1].idDetail + 1
                        }
                        let dataDetailsTemp = {
                            fotoDB: kontenn2.val().fotoKendaraan,
                            foto: null,
                            namaKendaraan: kontenn2.val().NamaKendaraan,
                            HargaSewa: kontenn2.val().HargaSewa,
                            JumlahKursi: kontenn2.val().JumlahKursi,
                            Deskripsi: kontenn2.val().deskripsiKendaraan,
                            ukuranKendaraan: kontenn2.val().UkuranKendaraan,
                            maksimalRentalMobil: kontenn2.val().MaksimalRentalMobil,
                            idDetail: NoUrut,
                            StatusKendaraan: kontenn2.val().StatusKendaraan,
                            idDB: keys[isi]
                        }

                        localDataDetail.push(dataDetailsTemp)

                        let StatusDataDetails = "";
                        if (kontenn2.val().StatusKendaraan == 1) {
                            StatusDataDetails = `<span class="badge badge-success">Aktif</span>`;
                        } else {
                            StatusDataDetails = `<span class="badge badge-secondary">Non-Aktif</span>`;
                        }

                        table.row.add([
                            `<input type="hidden" name="idDetailT[]" value="${keys[isi]}">
                        <input type="hidden" name="namaKendaraanT[]" value="${kontenn2.val().NamaKendaraan}">` +
                            kontenn2.val().NamaKendaraan,
                            `<input type="hidden" name="ukuranKendaraanT[]" value="${kontenn2.val().UkuranKendaraan}">` +
                            kontenn2.val().UkuranKendaraan,
                            `<input type="hidden" name="jumlahKursiT[]" value="${kontenn2.val().JumlahKursi}">` +
                            kontenn2.val().JumlahKursi + ` Kursi`,
                            `<input type="hidden" name="hargaSewaT[]" value="${kontenn2.val().HargaSewa}">` +
                            `Rp. ` + kontenn2.val().HargaSewa,
                            `<input type="hidden" name="maksimalRentalMobilT[]" value="${kontenn2.val().MaksimalRentalMobil}">` +
                            kontenn2.val().MaksimalRentalMobil + ` Hari`,
                            `<input type="hidden" name="deskripsiKendaraanT[]" value="${kontenn2.val().deskripsiKendaraan}">` +
                            kontenn2.val().deskripsiKendaraan,


                            `<input type="hidden" name="StatusKendaraanT[]" value="${kontenn2.val().StatusKendaraan}">` +
                            StatusDataDetails
                        ]).draw(false)

                    }
                })
            }
            console.log(datatEmpsDetails)
        })

        $('#TableDetail tbody').on('click', 'tr', function() {

            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                indexz = null;
                $('#hapusDetails').hide()
                $('#EditDetails').hide()
                $('#detailMobil').hide()
                $('#nonaktifdata').hide()
                $('#aktifdata').hide()

            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                indexz = table.row(this).index()

                if (localDataDetail.length == 0) {
                    $(this).removeClass('selected');
                    indexz = null;
                    $('#hapusDetails').hide()
                    $('#EditDetails').hide()
                    $('#detailMobil').hide()
                    $('#nonaktifdata').hide()
                    $('#aktifdata').hide()
                } else {
                    var s = 0;
                    // console.log(table.page.info()['start'])
                    // console.log(indexz)
                    var z = $('#TableDetail tbody tr');
                    if (table.page.info()['start'] == 0) {
                        s = indexz;
                        posisiData = indexz
                    } else {
                        s = indexz - table.page.info()['start'];
                        posisiData = indexz - table.page.info()['start'];

                    }
                    if (Number(document.getElementsByName('StatusKendaraanT[]')[s].value) == 1) {
                        $('#nonaktifdata').show()
                        $('#aktifdata').hide()
                        $('#hapusDetails').hide()
                        $('#EditDetails').show()
                        $('#detailMobil').show()
                    } else if (Number(document.getElementsByName('StatusKendaraanT[]')[s].value) == 0) {
                        $('#nonaktifdata').hide()
                        $('#aktifdata').show()
                        $('#detailMobil').show()
                        $('#hapusDetails').hide()
                        $('#EditDetails').hide()
                    } else if (Number(document.getElementsByName('StatusKendaraanT[]')[s].value) == 2) {
                        $('#nonaktifdata').hide()
                        $('#aktifdata').hide()
                        $('#hapusDetails').show()
                        $('#EditDetails').show()
                        $('#detailMobil').show()
                    }
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
                        let StatusDataDetails = ""
                        if (tempData[j].StatussKamar == 1) {
                            StatusDataDetails = `<span class="badge badge-success">Aktif</span>`;
                        } else if (tempData[j].StatussKamar == 0) {
                            StatusDataDetails = `<span class="badge badge-secondary">Non-Aktif</span>`;
                        } else {
                            StatusDataDetails = `<span class="badge badge-danger">Belum Tersimpan</span>`;
                        }
                        table.row.add([
                            `<input type="hidden" name="idDetailT[]" value="${tempData[j].idDetail}">
                        <input type="hidden" name="namaKamarT[]" value="${tempData[j].namaKamar}">` +
                            tempData[j].namaKamar,
                            `<input type="hidden" name="fasilitasKamarT[]" value="${tempData[j].fasilitas}">` +
                            tempData[j].fasilitas,
                            `<input type="hidden" name="hargaKamarT[]" value="${tempData[j].HargaKamar}">` +
                            `Rp. ` + tempData[j].HargaKamar,
                            `<input type="hidden" name="jumlahKamarT[]" value="${tempData[j].JumlahKamar}">` +
                            tempData[j].JumlahKamar,
                            `<input type="hidden" name="maksimalRentalMobilT[]" value="${tempData[j].MaksimalRentalMobil}">` +
                            tempData[j].MaksimalRentalMobil,
                            `<input type="hidden" name="StatussKamarT[]" value="${tempData[j].StatussKamar}">` +
                            StatusDataDetails
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

            let uploadFIless;
            let uploadFIlessDB;
            let IDDB;
            let StatuSDATA;

            // console.log(posisiData)

            const ValueItemDetailRental = ref(db, 'Master-Data-Rental-Detail/' + document.getElementsByName('idDetailT[]')[posisiData].value);
            onValue(ValueItemDetailRental, (konten) => {
                console.log(konten.val())
                // console.log(document.getElementById('tempUploadData').value)
                $("#AddImageDetail").show()
                $("#btnCancelImageDetail").show()
                $('#NoneImageDetail').hide()
                $('.image-upload-wrap-Detail').hide()
                document.getElementById('namaKendaraanEdit').value = konten.val().NamaKendaraan
                document.getElementById('hargaSewaEdit').value = konten.val().HargaSewa
                document.getElementById('jumlahKursiEdit').value = konten.val().JumlahKursi
                document.getElementById('deskripsiKendaraanEdit').value = konten.val().deskripsiKendaraan
                document.getElementById('ukuranKendaraanEdit').value = konten.val().UkuranKendaraan
                document.getElementById('maksimalRentalMobilEdit').value = konten.val().MaksimalRentalMobil
                document.getElementById('AddImageDetail').src = konten.val().fotoKendaraan
                document.getElementById('tempUploadData').value = konten.val().fotoKendaraan
                document.getElementById('tanggalbuat').value = konten.val().TanggalBuat
                document.getElementById('editstatuKendaraan').value = konten.val().StatusKendaraan
            });


        })

        document.getElementById('detailMobil').addEventListener('click', function() {

            window.location.href = "<?= base_url() ?>/Detail-Mobil/" + document.getElementsByName('idDetailT[]')[posisiData].value

        })

        document.getElementById('submitDetailsEdit').addEventListener('click', function() {
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
                    let idDetailsEdit = ['uploadFileeDetailEdit', 'namaKendaraanEdit', 'hargaSewaEdit', 'jumlahKursiEdit', 'deskripsiKendaraanEdit', 'ukuranKendaraanEdit', 'maksimalRentalMobilEdit'];
                    let jumlahDetailsEdit = 0;
                    const fileupload = $('#uploadFileeDetailEdit').prop('files')[0];

                    for (let i = 0; i < idDetailsEdit.length; i++) {
                        if (i == 0) {
                            if (Boolean(fileupload) == false && document.getElementById('tempUploadData').value == "") {
                                jumlahDetailsEdit++;
                                document.getElementById('fileDetailEdit').style.border = "2px dotted red";
                            } else {
                                document.getElementById("fileDetailEdit").style.border = "2px dotted gray";
                            }

                        } else if (i == 6) {
                            if (document.getElementById(idDetailsEdit[i]).value > 15) {
                                jumlahDetailsEdit++;
                                $('#alertEdit').show()
                            } else {
                                $('#alertEdit').hide()
                            }

                            if (document.getElementById(idDetailsEdit[i]).value == "") {
                                jumlahDetailsEdit++;
                                $('#' + idDetailsEdit[i]).addClass('is-invalid')
                            } else {
                                $('#' + idDetailsEdit[i]).removeClass('is-invalid')
                            }
                        } else if (document.getElementById(idDetailsEdit[i]).value == "") {
                            jumlahDetailsEdit++;
                            $('#' + idDetailsEdit[i].addClass('is-invalid'))
                        } else {
                            $('#' + idDetailsEdit[i]).removeClass('is-invalid')
                        }
                    }

                    if (jumlahDetailsEdit == 0) {
                        var CodeIDRental = "<?= session()->get('IDKelola') ?>";
                        if (Boolean(fileupload) == false) {
                            document.getElementById('tempUploadData').value
                            let DataHotelUp = {
                                NamaKendaraan: document.getElementById('namaKendaraanEdit').value,
                                deskripsiKendaraan: document.getElementById('deskripsiKendaraanEdit').value,
                                HargaSewa: document.getElementById('hargaSewaEdit').value,
                                JumlahKursi: document.getElementById('jumlahKursiEdit').value,
                                MaksimalRentalMobil: document.getElementById('maksimalRentalMobilEdit').value,
                                UkuranKendaraan: document.getElementById('ukuranKendaraanEdit').value,
                                IdRental: CodeIDRental,
                                fotoKendaraan: document.getElementById('tempUploadData').value,
                                StatusKendaraan: Number(document.getElementById('editstatuKendaraan').value),
                                TanggalBuat: document.getElementById('tanggalbuat').value,
                                TanggalUpdate: new Date().toString("ID")
                            }
                            const updatesHotel = {};
                            updatesHotel['/Master-Data-Rental-Detail/' + document.getElementsByName('idDetailT[]')[posisiData].value] = DataHotelUp;
                            update(ref(db), updatesHotel);
                            // console.log(DataHotelUp);

                            Swal.fire({
                                title: 'Berhasil',
                                text: "Data Berhasil Tersimpan",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "<?= base_url() ?>/Data-Mobil-Rental"
                                }
                            })

                        } else {
                            var CodeIDRental = "<?= session()->get('IDKelola') ?>";
                            const storageRef = refImage(storage, 'images-rental-detail/' + fileupload.name);
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
                                    // console.log('Upload is ' + progress + '% done');
                                    switch (snapshot.state) {
                                        case 'paused':
                                            // console.log('Upload is paused');
                                            break;
                                        case 'running':
                                            // console.log('Upload is running');
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
                                        console.log(downloadURL);

                                        let DataRentalUp = {
                                            NamaKendaraan: document.getElementById('namaKendaraanEdit').value,
                                            deskripsiKendaraan: document.getElementById('deskripsiKendaraanEdit').value,
                                            HargaSewa: document.getElementById('hargaSewaEdit').value,
                                            JumlahKursi: document.getElementById('jumlahKursiEdit').value,
                                            MaksimalRentalMobil: document.getElementById('maksimalRentalMobilEdit').value,
                                            UkuranKendaraan: document.getElementById('ukuranKendaraanEdit').value,
                                            IdRental: CodeIDRental,
                                            fotoKendaraan: downloadURL,
                                            StatusKendaraan: Number(document.getElementById('editstatuKendaraan').value),
                                            TanggalBuat: document.getElementById('tanggalbuat').value,
                                            TanggalUpdate: new Date().toString("ID")
                                        }
                                        const updatesRental = {};
                                        updatesRental['/Master-Data-Rental-Detail/' + document.getElementsByName('idDetailT[]')[posisiData].value] = DataRentalUp;
                                        update(ref(db), updatesRental);
                                        // console.log(DataHotelUp);



                                        // var idLst = parseJsonKamar[parseJsonKamar.length - 1].IDkey
                                        // let nextID = (Number(idLst) + 1);
                                        // console.log(nextID)
                                        // set(ref(db, 'Master-Data-Hotel-Detail/'), {
                                        //     NamaKamar: document.getElementById('namaKamarEdit').value,
                                        //     FasilitasKamar: document.getElementById('fasilitasKamarEdit').value,
                                        //     HargaKamar: document.getElementById('hargaKamarEdit').value,
                                        //     JumlahKamar: document.getElementById('jumlahKamarEdit').value,
                                        //     IdHotel: CodeIDHotel,
                                        //     fotoKamar: downloadURL,
                                        //     StatusKamar: 1,
                                        //     TanggalBuat: new Date().toString("ID"),
                                        //     TanggalUpdate: new Date().toString("ID")
                                        // });


                                    });
                                }
                            );
                            Swal.fire({
                                title: 'Berhasil',
                                text: "Data Berhasil Tersimpan",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "<?= base_url() ?>/Data-Mobil-Rental"
                                }
                            })
                        }

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Isi Kolom Dengan Benar & Kolom pengisian Tidak Boleh Kosong!'
                        })
                    }

                }
            })

        })

        document.getElementById('nonaktifdata').addEventListener('click', function() {
            var idData = document.getElementsByName('idDetailT[]')[posisiData].value;
            Swal.fire({
                title: 'Apa anda yakin',
                text: "Menonaktifkan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    var CodeIDHotel = "<?= session()->get('IDKelola') ?>";
                    const ValueItem = ref(db, 'Master-Data-Rental-Detail/' + idData);
                    onValue(ValueItem, (result) => {
                        let PostD = {

                            NamaKendaraan: result.val().NamaKendaraan,
                            deskripsiKendaraan: result.val().deskripsiKendaraan,
                            HargaSewa: result.val().HargaSewa,
                            JumlahKursi: result.val().JumlahKursi,
                            MaksimalRentalMobil: result.val().MaksimalRentalMobil,
                            UkuranKendaraan: result.val().UkuranKendaraan,
                            IdRental: result.val().IdRental,
                            fotoKendaraan: result.val().fotoKendaraan,
                            StatusKendaraan: 0,
                            TanggalBuat: result.val().TanggalBuat,
                            TanggalUpdate: result.val().TanggalUpdate

                        }
                        const updatesHotel = {};
                        updatesHotel['/Master-Data-Rental-Detail/' + idData] = PostD;
                        update(ref(db), updatesHotel);

                        Swal.fire({
                            title: 'Berhasil',
                            text: "Data Berhasil Tersimpan",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = "<?= base_url() ?>/Data-Mobil-Rental"
                            }
                        })

                    })


                    $('#nonaktifdata').hide()
                    $('#aktifdata').hide()
                    $('#hapusDetails').hide()
                    $('#EditDetails').hide()

                }
            })
        })

        document.getElementById('aktifdata').addEventListener('click', function() {
            var idData = document.getElementsByName('idDetailT[]')[posisiData].value;
            Swal.fire({
                title: 'Apa anda yakin',
                text: "Mengaktifkan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    var CodeIDHotel = "<?= session()->get('IDKelola') ?>";
                    const ValueItem = ref(db, 'Master-Data-Rental-Detail/' + idData);
                    onValue(ValueItem, (result) => {
                        let PostD = {
                            NamaKendaraan: result.val().NamaKendaraan,
                            deskripsiKendaraan: result.val().deskripsiKendaraan,
                            HargaSewa: result.val().HargaSewa,
                            UkuranKendaraan: result.val().UkuranKendaraan,
                            MaksimalRentalMobil: result.val().MaksimalRentalMobil,
                            JumlahKursi: result.val().JumlahKursi,
                            IdRental: result.val().IdRental,
                            fotoKendaraan: result.val().fotoKendaraan,
                            StatusKendaraan: 1,
                            TanggalBuat: result.val().TanggalBuat,
                            TanggalUpdate: result.val().TanggalUpdate
                        }
                        const updatesHotel = {};
                        updatesHotel['/Master-Data-Rental-Detail/' + idData] = PostD;
                        update(ref(db), updatesHotel);

                        Swal.fire({
                            title: 'Berhasil',
                            text: "Data Berhasil Tersimpan",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = "<?= base_url() ?>/Data-Mobil-Rental"
                            }
                        })

                    })


                    $('#nonaktifdata').hide()
                    $('#aktifdata').hide()
                    $('#hapusDetails').hide()
                    $('#EditDetails').hide()

                }
            })
        })

        //submit details
        document.getElementById('submitDetails').addEventListener('click', function() {
            let jenisSubmit = document.getElementById('titleModalDetail').innerHTML;
            let idDetails = ['#uploadFilee', 'ukuranKendaraan', 'hargaSewa', 'jumlahKursi', 'deskripsiKendaraan', 'namaKendaraan', 'maksimalRentalMobilAdd'];
            let jumlahDetails = 0;
            const fileupload = $('#uploadFilee').prop('files')[0];
            console.log(fileupload);

            for (let i = 0; i < idDetails.length; i++) {
                if (i == 0) {
                    if (Boolean(fileupload) == false) {
                        jumlahDetails++;
                        document.getElementById("fileDetail").style.border = "2px dotted red";
                    } else {
                        document.getElementById("fileDetail").style.border = "2px dotted gray";
                    }

                } else if (i == 6) {
                    if (document.getElementById(idDetails[i]).value > 15) {
                        jumlahDetails++;
                        $('#alertAdd').show()
                    } else {
                        $('#alertAdd').hide()
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
                const storageRef = refImage(storage, 'images-rental-detail/' + fileupload.name);
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
                        // console.log('Upload is ' + progress + '% done');
                        switch (snapshot.state) {
                            case 'paused':
                                // console.log('Upload is paused');
                                break;
                            case 'running':
                                // console.log('Upload is running');
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
                            const starCountRef = ref(db, 'Master-Data-Rental-Detail/');
                            onValue(starCountRef, (snapshot) => {
                                const data = snapshot.val();
                                const keys = Object.keys(data);
                                for (const isi in keys) {
                                    const ValueItem = ref(db, 'Master-Data-Rental-Detail/' + keys[isi]);
                                    onValue(ValueItem, (kontenn) => {
                                        let LastID = keys[isi]
                                        let PostD = {
                                            IDkey: keys[isi],
                                        };
                                        parseJsonRental.push(PostD)
                                    })
                                }
                                // console.log()


                            });
                            var idLst = parseJsonRental[parseJsonRental.length - 1].IDkey
                            let nextID = (Number(idLst) + 1);
                            console.log(nextID)
                            set(ref(db, 'Master-Data-Rental-Detail/' + nextID), {
                                NamaKendaraan: document.getElementById('namaKendaraan').value,
                                UkuranKendaraan: document.getElementById('ukuranKendaraan').value,
                                deskripsiKendaraan: document.getElementById('deskripsiKendaraan').value,
                                HargaSewa: document.getElementById('hargaSewa').value,
                                JumlahKursi: document.getElementById('jumlahKursi').value,
                                MaksimalRentalMobil: document.getElementById('maksimalRentalMobilAdd').value,
                                IdRental: '<?= session()->get('IDKelola') ?>',
                                fotoKendaraan: downloadURL,
                                StatusKendaraan: 1,
                                TanggalBuat: new Date().toString("ID"),
                                TanggalUpdate: new Date().toString("ID")
                            });

                        });
                    }
                );
                Swal.fire({
                    title: 'Berhasil',
                    text: "Data Berhasil Tersimpan",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "<?= base_url() ?>/Data-Mobil-Rental"
                    }
                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Isi Kolom Dengan Benar & Kolom pengisian Tidak Boleh Kosong!'
                })
            }

        })


        function resetModal() {
            let idDetails = ['uploadFileeDetail', 'namaKamar', 'hargaKamar', 'jumlahKamar', 'fasilitas', 'maksimalRentalMobilAdd'];

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
    </script>

    <script>
        function modalDetails(textx) {
            document.getElementById('titleModalDetail').innerHTML = textx;
            let idDetails = ['uploadFileeDetail', 'namaKamar', 'hargaKamar', 'jumlahKamar', 'fasilitas'];

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



        //Detail
        $('#alertEdit').hide()
        $('#alertAdd').hide()
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
                    location.href = "<?= base_url() ?>/Mitra-Wisata"
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
            document.getElementById("uploadFileeDetailEdit").value = "";
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

        // mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
        // const coordinates = document.getElementById('coordinates');
        // const map = new mapboxgl.Map({
        //     container: 'map',
        //     style: 'mapbox://styles/mapbox/streets-v11',
        //     center: [117.1485239363954, -0.569178092470267],
        //     zoom: 10
        // });

        // const marker = new mapboxgl.Marker({
        //         draggable: true
        //     })
        //     .setLngLat([117.1485239363954, -0.569178092470267])
        //     .addTo(map);

        // function onDragEnd() {
        //     const lngLat = marker.getLngLat();
        //     coordinates.style.display = 'block';
        //     coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
        //     document.getElementById('latitude').value = lngLat.lat
        //     document.getElementById('longlitude').value = lngLat.lng

        //     $.ajax({
        //         url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
        //         dataType: "JSON"
        //     }).done(result => {
        //         $("#alamat").val(result.features[0].place_name)
        //     })

        // }

        // marker.on('dragend', onDragEnd);

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>