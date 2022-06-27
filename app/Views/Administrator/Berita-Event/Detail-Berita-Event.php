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

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        .file-upload {
            height: max-content;
            border: 2px dotted gray;
            border-radius: 15px;

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

        #map {

            position: relative;
            top: 0;
            bottom: 0;
            height: 300px;
            width: auto;
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

        .coverBerita {
            min-height: 200px;
            width: 50%;
            margin-left: 35%;
            object-fit: cover;
            padding: 20px;
            border-radius: 15px;
        }
    </style>
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
                            <!-- <h1 class="m-0">Detail Berita & Event</h1> -->

                            <h1 class="m-0">
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Berita-Event`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Berita & Event
                            </h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Berita & Event</li>
                                <li class="breadcrumb-item active">Detail Berita & Event</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="card card-outline card-warning" style="border-radius: 15px;">
                        <div class="card-body">
                            <!-- image -->
                            <div class="coverBerita">
                                <!-- <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" width="300" id="NoneImage" alt=""> -->
                                <img id="imgBerita" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="300" id="NoneImage" alt="">
                            </div>
                            <!-- /image -->
                            <h4 id="judulBeritaEvent" class="mt-2 font-weight-bold">None</h4>
                            <div class="d-flex flex-row">
                                <div class="pr-1">
                                    <p id="tanggalBuatBeritaEvent" style="font-size: 14px; margin-top: -12px;" class="text-muted">
                                        None
                                    </p>
                                </div>
                            </div>

                            <p class="mt-2 font-weight-bold">
                                Berita
                            </p>

                            <p id="isiBeritaEvent">None</p>

                            <p class="mt-2 font-weight-bold">Lokasi Event</p>
                            <p id="alamatBeritaEvent">None
                            </p>
                            <p class="mt-2 font-weight-bold">
                                Tanggal Event
                            </p>
                            <p id="tanggalBeritaEvent">None</p>
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
</body>
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

    var parseJsonAdmin = {};

    const ValueItem = ref(db, 'Data-Kegiatan/<?= $DataID ?>');
    onValue(ValueItem, (kontenn) => {
        let PostD = {
            Judul: kontenn.val().Judul,
            IsiBerita: kontenn.val().IsiBerita,
            Alamat: kontenn.val().Alamat,
            TanggalEvent: kontenn.val().TanggalEvent,
            Status: kontenn.val().StatusBerita,
            LinkImage: kontenn.val().LinkImage,
            Latitute: kontenn.val().Latitute,
            Longlitute: kontenn.val().Longlitute,
            TanggalBuat: kontenn.val().TanggalBuat,
            TanggalUpdate: kontenn.val().TanggalUpdate
        };
        parseJsonAdmin = (PostD)
        if (Boolean(parseJsonAdmin) == false) {
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
        } else {
            if (kontenn.val().LinkImage == "") {

            } else {
                document.getElementById('imgBerita').src = kontenn.val().LinkImage
            }

            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };

            document.getElementById('judulBeritaEvent').innerHTML = kontenn.val().Judul
            document.getElementById('isiBeritaEvent').innerHTML = kontenn.val().IsiBerita
            document.getElementById('alamatBeritaEvent').innerHTML = kontenn.val().Alamat
            document.getElementById('tanggalBeritaEvent').innerHTML = new Date(kontenn.val().TanggalEvent).toLocaleDateString("id-ID", options)
            document.getElementById('tanggalBuatBeritaEvent').innerHTML = kontenn.val().TanggalBuat
            document.getElementById('modified').innerHTML = kontenn.val().TanggalUpdate
            document.getElementById('created').innerHTML = kontenn.val().TanggalBuat
        }
    })
</script>

<script>
    $('#btnCancelImage').hide()
    $('#AddImage').hide()
    $('.image-title').hide()
    $('#NoneImage').show()

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

        $.ajax({
            url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
            dataType: "JSON"
        }).done(result => {
            $("#alamat-BeritaEvent").val(result.features[0].place_name)
        })

    }

    marker.on('dragend', onDragEnd);
</script>

</html>