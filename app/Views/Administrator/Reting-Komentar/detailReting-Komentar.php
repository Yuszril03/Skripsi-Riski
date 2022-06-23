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

        .colorr {
            background-color: black;
            height: 220px;
            width: 1px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url() ?>/AdminLTE/dists/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

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
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Reting-Komentar`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Transaksi
                            </h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Transaksi</li>
                                <li class="breadcrumb-item active">Detail Transaksi</li>
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
                            <div class="row">
                                <div class="col-lg-5 ">
                                    <div class="form-group">
                                        <p style="color: gray;">Nama Pengguna</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">Anto Chibi</p>
                                    </div>
                                    <div class="form-group">
                                        <p style="color: gray;">Nama Mitra</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">Bolololo</p>
                                    </div>
                                    <div class="form-group">
                                        <p style="color: gray;">Jenis Mitra</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">Wisata</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 ">
                                    <center>
                                        <div class="colorr">

                                        </div>
                                    </center>
                                </div>
                                <div class="col-lg-5 ">
                                    <div class="form-group">
                                        <p style="color: gray;">Reting</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">4,5</p>

                                    </div>
                                    <div class="form-group">
                                        <p style="color: gray;">Komentar</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">bla bla bla bla bla bla bla bla bla</p>
                                    </div>
                                    <div class="form-group">
                                        <p style="color: gray;">Tanggal Lahir</p>
                                        <p class="font-weight-bold" style="margin-top: -15px;">12/04/1995</p>
                                    </div>
                                </div>
                            </div>
                            <HR>
                            </HR>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <p style="color: gray;">Kode pemesanan</p>
                                                <p class="font-weight-bold" style="margin-top: -15px;">38yr9yf9wefh49r9489</p>
                                            </div>
                                            <div class="form-group">
                                                <p style="color: gray;">Tanggal Pemesanan</p>
                                                <p class="font-weight-bold" style="margin-top: -15px;">10/10/2022</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <p style="color: gray;">Jumlah Dewasa</p>
                                                <p class="font-weight-bold" style="margin-top: -15px;">3 <span>Dewasa</span> = Rp. 15.000,- </p>

                                            </div>
                                            <div class="form-group">
                                                <p style="color: gray;">Jumlah Anak</p>
                                                <p class="font-weight-bold" style="margin-top: -15px;">2 <span>Anak</span> = Rp. 10.000,-</p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <p style="color: gray;">Total Harga</p>
                                                <p class="font-weight-bold" style="margin-top: -15px;">Rp.25.000,-</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <img class="images" src="<?= base_url() ?>/image/icon/sebelumreview.svg" width="200" alt="">
                                </div>
                            </div>
                            <!-- image -->
                            <!-- <div class="coverBerita">
                                <img src="/Image/Icon/UploadProfile.svg" width="300" id="NoneImage" alt="">
                            </div> -->
                            <!-- /image -->
                            <!-- <form action="">
                                <div class="row">
                                    <div class="col-lg-6 col-12 borderkanan">
                                        <div class="form-group">
                                            <p><b>Nama Pengguna</b></p>
                                            <p>Anto Chibi</p>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Nama Mitra</b></p>
                                            <p>Bolololo</p>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Jenis Mitra</b></p>
                                            <p>Wisata</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <p><b>Reting</b></p>
                                            <p>4,5</p>

                                        </div>
                                        <div class="form-group">
                                            <p><b>Komentar</b></p>
                                            <p>bla bla bla bla bla bla bla bla bla</p>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Tanggal Lahir</b></p>
                                            <p>12/04/1995</p>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
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