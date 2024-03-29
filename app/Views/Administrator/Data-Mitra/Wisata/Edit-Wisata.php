<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Edit Mitra Wisata</title>

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

        .file-upload {
            height: max-content;
            border: 2px dotted gray;
            border-radius: 15px;
            margin-bottom: 10px;

        }

        .Imagees {
            min-height: 200px;
            width: 50%;
            margin: auto;
            object-fit: cover;
            padding: 20px;
            margin-top: 20px;
        }

        .Imagees img {
            width: 100%;
        }

        .file-upload-input {
            opacity: 0;
            height: 100px;
        }

        @media only screen and (min-device-width: 1024px) {
            .blockData {
                background-color: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 545px;
                border-radius: 15px;
                margin-top: -545px;
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
                height: 1070px;
                border-radius: 15px;
                margin-top: -1085px;
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
                            <h1 class="m-0">Edit Mitra Wisata</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Mitra Wisata</li>
                                <li class="breadcrumb-item active">Edit Mitra Wisata</li>
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
                                        <label for="">Emai Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="EmailWisata" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Telefon Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="telefonMitra" onkeypress="return hanyaAngka(this)" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Mitra</label>
                                        <input type="text" readonly value="Mitra-Wisata" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-postcard text-primary"></i> Data Personal Detail
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Kata Sandi Baru</label>
                                        <input type="password" id="pass" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Konfirmasi Kata Sandi</label>
                                        <input type="password" id="konfirmPass" onkeypress="return hanyaAngka(this)" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>

                                </div>
                            </div>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-input-cursor-text text-primary"></i> Data Detail Wisata
                            </div>

                            <div id="DetailWIsata" style="position: relative;">

                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <label for="">Foto Profil Wisata</label>
                                        </div>
                                        <div class="file-upload">
                                            <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                            <div class="Imagees">
                                                <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                                <img src="" id="AddImage" alt="">
                                                <img src="" id="BlockImage" width="250" alt="">
                                            </div>
                                            <center>
                                                <div class="image-upload-wrap" style="margin-top: -110px ;">
                                                    <input id="uploadFilee" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                    <div class="drag-text mt-4">
                                                        <h6 id="textDrop" style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                    </div>
                                                </div>
                                                <p class="image-title">Uploaded Image</p>
                                            </center>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Tiket Dewasa<sup><span class="text-danger">*</span></sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                </div>
                                                <input id="tiketDewasa" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Tiket Anak-Anak<sup><span class="text-danger">*</span></sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                </div>
                                                <input id="tiketAnak" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
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
                                            <label for="">Alamat Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <input type="hidden" id="longlitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                            <input type="hidden" id="latitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                            <textarea readonly class="form-control" style="border-radius: 15px;" name="alamat" id="alamat" cols="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <textarea class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini..." name="deskripsi" id="deskripsi" cols="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="button" id="submitData" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                    <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                                </div>
                            </div>

                            <div class="blockData" id="blockData">
                                <img src="<?= base_url() ?>/image/Icon/BlockData.svg" class="blockImage" alt="">
                                <p class="blockText">Maaf Data Wisata Tidak Bisa DiAkses.</p>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        var parseJsonAdmin = [];
        var parseJsonPartner = [];
        var parseJsonEmailPartner = [];

        var DataTempMitra = {};
        var DataTempWisata = {};


        const starCountRef2 = ref(db, 'Master-Data-Mitra/');
        onValue(starCountRef2, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            for (const isi in keys) {
                const ValueItem = ref(db, 'Master-Data-Mitra/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {
                    if (keys[isi] != "<?= $DataIDMitra ?>") {
                        parseJsonEmailPartner.push(kontenn.val().EmailMitra)
                    }

                })
            }
        });


        const ValueItem = ref(db, 'Master-Data-Wisata/<?= $DataIDWisata ?>');
        onValue(ValueItem, (kontenn) => {

            if (kontenn.val().StatusWisata == 1) {
                $('#blockData').hide()
                $('#AddImage').show()
                $('#BlockImage').hide()
                document.getElementById('AddImage').src = kontenn.val().fotoWisata
            } else {
                $('#blockData').show()
                $('#AddImage').hide()
                document.getElementById('BlockImage').src = kontenn.val().fotoWisata
            }
            document.getElementById('namaWisata').value = kontenn.val().NamaWisata
            document.getElementById('tiketDewasa').value = kontenn.val().HargaDewasa
            document.getElementById('tiketAnak').value = kontenn.val().HargaAnak
            document.getElementById('alamat').value = kontenn.val().AlamatWisata
            document.getElementById('deskripsi').value = kontenn.val().DeskripsiWisata
            document.getElementById('longlitude').value = kontenn.val().Longlitude
            document.getElementById('latitude').value = kontenn.val().Latitude

            if (Boolean(kontenn.val().fotoWisata) == true) {

                $('#btnCancelImage').show()

                $('.image-title').hide()
                $('#NoneImage').hide()
                $('.image-upload-wrap').hide();
            } else {
                $('#btnCancelImage').hide()

                $('.image-title').hide()
                $('#NoneImage').show()
                $('.image-upload-wrap').show();
            }
            DataTempWisata = kontenn.val()

            mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
            const coordinates = document.getElementById('coordinates');
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)],
                zoom: 10
            });

            const marker = new mapboxgl.Marker({
                    draggable: true
                })
                .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
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

            // console.log(DataTempWisata)
            // parseJsonAdmin.push((keys[isi]))
        })

        const ValueItemMitra = ref(db, 'Master-Data-Mitra/<?= $DataIDMitra ?>');
        onValue(ValueItemMitra, (kontenn) => {
            document.getElementById('NamaMitra').value = kontenn.val().NamaMitra
            document.getElementById('EmailWisata').value = kontenn.val().EmailMitra
            document.getElementById('telefonMitra').value = kontenn.val().TelefonMitra
            DataTempMitra = kontenn.val();
            // console.log(DataTempMitra)
        })

        document.getElementById('submitData').addEventListener('click', function() {

            // console.log(DataTempMitra.StatusMitra)

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


                    let idData = ['NamaMitra', 'EmailWisata', 'telefonMitra', 'namaWisata', 'tiketDewasa', 'tiketAnak', 'alamat', 'deskripsi'];
                    let jumlah = 0;
                    const fileupload = $('#uploadFilee').prop('files')[0];

                    for (let i = 0; i < idData.length; i++) {
                        if (document.getElementById(idData[i]).value == "") {
                            $('#' + idData[i]).addClass('is-invalid')
                            jumlah++;
                        } else {
                            $('#' + idData[i]).removeClass('is-invalid')
                        }
                    }
                    if (jumlah == 0) {

                        if (parseJsonEmailPartner.includes((document.getElementById('EmailWisata').value)) == false) {
                            $('#EmailWisata').removeClass('is-invalid');

                            if (document.getElementById('pass').value == "") {
                                $('#konfirmPass').removeClass('is-invalid');
                                $('#pass').removeClass('is-invalid');

                                var CodeIDWisata = "<?= $DataIDWisata ?>";
                                var CodeIDMitra = "<?= $DataIDMitra ?>";



                                if (Boolean(fileupload) == false) {

                                    //Update Wisata
                                    let DataWIsata = {
                                        NamaWisata: document.getElementById('namaWisata').value,
                                        HargaDewasa: document.getElementById('tiketDewasa').value,
                                        StatusWisata: DataTempWisata.StatusWisata,
                                        HargaAnak: document.getElementById('tiketAnak').value,
                                        AlamatWisata: document.getElementById('alamat').value,
                                        TanggalBuat: DataTempWisata.TanggalBuat,
                                        TanggalUpdate: new Date().toString("ID"),
                                        fotoWisata: DataTempWisata.fotoWisata,
                                        DeskripsiWisata: document.getElementById('deskripsi').value,
                                        Longlitude: document.getElementById('longlitude').value,
                                        Latitude: document.getElementById('latitude').value
                                    }
                                    if (DataTempWisata.StatusWisata == 1) {
                                        const updateWisata = {};
                                        updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                        update(ref(db), updateWisata);
                                    }


                                    //Update Mitra
                                    let DataMitraa = {
                                        NamaMitra: document.getElementById('NamaMitra').value,
                                        EmailMitra: document.getElementById('EmailWisata').value,
                                        StatusMitra: DataTempMitra.StatusMitra,
                                        TelefonMitra: document.getElementById('telefonMitra').value + "",
                                        TanggalBuat: DataTempMitra.TanggalBuat,
                                        TanggalUpdate: new Date().toString("ID")
                                    }
                                    const updateMitra = {};
                                    updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                    update(ref(db), updateMitra);


                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        showConfirmButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey',
                                        timer: 3000
                                    }).then((result) => {
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            location.href = "<?= base_url() ?>/Mitra-Wisata"
                                        }
                                    })




                                } else {
                                    const storageRef = refImage(storage, 'images-wisata/' + new Date().getTime() + '-' + fileupload.name);

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
                                                //Data Master Wisata
                                                //Update Wisata
                                                let DataWIsata = {
                                                    NamaWisata: document.getElementById('namaWisata').value,
                                                    HargaDewasa: document.getElementById('tiketDewasa').value,
                                                    StatusWisata: DataTempWisata.StatusWisata,
                                                    HargaAnak: document.getElementById('tiketAnak').value,
                                                    AlamatWisata: document.getElementById('alamat').value,
                                                    TanggalBuat: DataTempWisata.TanggalBuat,
                                                    TanggalUpdate: new Date().toString("ID"),
                                                    fotoWisata: downloadURL,
                                                    DeskripsiWisata: document.getElementById('deskripsi').value,
                                                    Longlitude: document.getElementById('longlitude').value,
                                                    Latitude: document.getElementById('latitude').value
                                                }
                                                if (DataTempWisata.StatusWisata == 1) {
                                                    const updateWisata = {};
                                                    updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                                    update(ref(db), updateWisata);
                                                }


                                                //Update Mitra
                                                let DataMitraa = {
                                                    NamaMitra: document.getElementById('NamaMitra').value,
                                                    EmailMitra: document.getElementById('EmailWisata').value,
                                                    StatusMitra: DataTempMitra.StatusMitra,
                                                    TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                    TanggalBuat: DataTempMitra.TanggalBuat,
                                                    TanggalUpdate: new Date().toString("ID")
                                                }
                                                const updateMitra = {};
                                                updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                                update(ref(db), updateMitra);
                                            });
                                        }
                                    );

                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        showConfirmButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey',
                                        timer: 3000
                                    }).then((result) => {
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            location.href = "<?= base_url() ?>/Mitra-Wisata"
                                        }
                                    })


                                }
                            } else {
                                if (document.getElementById('konfirmPass').value == "") {
                                    $('#konfirmPass').addClass('is-invalid');
                                    $('#pass').removeClass('is-invalid');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Konfirmasi kata sandi kosong!'
                                    })
                                } else if (document.getElementById('konfirmPass').value != document.getElementById('pass').value) {
                                    $('#konfirmPass').addClass('is-invalid');
                                    $('#pass').addClass('is-invalid');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Kata Sandi Tidak Sama!'
                                    })
                                } else {
                                    $('#konfirmPass').removeClass('is-invalid');
                                    $('#pass').removeClass('is-invalid');


                                    var CodeIDWisata = "<?= $DataIDWisata ?>";
                                    var CodeIDMitra = "<?= $DataIDMitra ?>";



                                    if (Boolean(fileupload) == false) {

                                        //Update Wisata
                                        let DataWIsata = {
                                            NamaWisata: document.getElementById('namaWisata').value,
                                            HargaDewasa: document.getElementById('tiketDewasa').value,
                                            StatusWisata: DataTempWisata.StatusWisata,
                                            HargaAnak: document.getElementById('tiketAnak').value,
                                            AlamatWisata: document.getElementById('alamat').value,
                                            TanggalBuat: DataTempWisata.TanggalBuat,
                                            TanggalUpdate: new Date().toString("ID"),
                                            fotoWisata: DataTempWisata.fotoWisata,
                                            DeskripsiWisata: document.getElementById('deskripsi').value,
                                            Longlitude: document.getElementById('longlitude').value,
                                            Latitude: document.getElementById('latitude').value
                                        }
                                        if (DataTempWisata.StatusWisata == 1) {
                                            const updateWisata = {};
                                            updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                            update(ref(db), updateWisata);
                                        }


                                        //Update Mitra
                                        let DataMitraa = {
                                            NamaMitra: document.getElementById('NamaMitra').value,
                                            EmailMitra: document.getElementById('EmailWisata').value,
                                            StatusMitra: DataTempMitra.StatusMitra,
                                            TelefonMitra: document.getElementById('telefonMitra').value + "",
                                            TanggalBuat: DataTempMitra.TanggalBuat,
                                            TanggalUpdate: new Date().toString("ID")
                                        }
                                        const updateMitra = {};
                                        updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                        update(ref(db), updateMitra);

                                        //Update Master Account Wisata
                                        let DataAccount = {
                                            KataSandiMitra: md5(document.getElementById('pass').value),
                                            JenisMitra: "Mitra-Wisata",
                                            IDKelolaMitra: CodeIDWisata
                                        }
                                        const updateAccountMitra = {};
                                        updateAccountMitra['/Master-Data-Account-Mitra/' + CodeIDMitra] = DataAccount;
                                        update(ref(db), updateAccountMitra);


                                        Swal.fire({
                                            title: 'Berhasil',
                                            text: 'Data berhasil tersimpan.',
                                            icon: 'success',
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Okey',
                                            timer: 3000
                                        }).then((result) => {
                                            if (result.dismiss === Swal.DismissReason.timer) {
                                                location.href = "<?= base_url() ?>/Mitra-Wisata"
                                            }
                                        })




                                    } else {
                                        const storageRef = refImage(storage, 'images-wisata/' + new Date().getTime() + '-' + fileupload.name);

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
                                                    //Data Master Wisata
                                                    //Update Wisata
                                                    let DataWIsata = {
                                                        NamaWisata: document.getElementById('namaWisata').value,
                                                        HargaDewasa: document.getElementById('tiketDewasa').value,
                                                        StatusWisata: DataTempWisata.StatusWisata,
                                                        HargaAnak: document.getElementById('tiketAnak').value,
                                                        AlamatWisata: document.getElementById('alamat').value,
                                                        TanggalBuat: DataTempWisata.TanggalBuat,
                                                        TanggalUpdate: new Date().toString("ID"),
                                                        fotoWisata: downloadURL,
                                                        DeskripsiWisata: document.getElementById('deskripsi').value,
                                                        Longlitude: document.getElementById('longlitude').value,
                                                        Latitude: document.getElementById('latitude').value
                                                    }
                                                    if (DataTempWisata.StatusWisata == 1) {
                                                        const updateWisata = {};
                                                        updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                                        update(ref(db), updateWisata);
                                                    }


                                                    //Update Mitra
                                                    let DataMitraa = {
                                                        NamaMitra: document.getElementById('NamaMitra').value,
                                                        EmailMitra: document.getElementById('EmailWisata').value,
                                                        StatusMitra: DataTempMitra.StatusMitra,
                                                        TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                        TanggalBuat: DataTempMitra.TanggalBuat,
                                                        TanggalUpdate: new Date().toString("ID")
                                                    }
                                                    const updateMitra = {};
                                                    updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                                    update(ref(db), updateMitra);

                                                    //Update Master Account Wisata
                                                    let DataAccount = {
                                                        KataSandiMitra: md5(document.getElementById('pass').value),
                                                        JenisMitra: "Mitra-Wisata",
                                                        IDKelolaMitra: CodeIDWisata
                                                    }
                                                    const updateAccountMitra = {};
                                                    updateAccountMitra['/Master-Data-Account-Mitra/' + CodeIDMitra] = DataAccount;
                                                    update(ref(db), updateAccountMitra);
                                                });
                                            }
                                        );

                                        Swal.fire({
                                            title: 'Berhasil',
                                            text: 'Data berhasil tersimpan.',
                                            icon: 'success',
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Okey',
                                            timer: 3000
                                        }).then((result) => {
                                            if (result.dismiss === Swal.DismissReason.timer) {
                                                location.href = "<?= base_url() ?>/Mitra-Wisata"
                                            }
                                        })


                                    }
                                }



                            }

                        } else {
                            $('#EmailWisata').addClass('is-invalid')
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






        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>
</body>

</html>