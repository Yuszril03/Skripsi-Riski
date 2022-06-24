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
                            <h1 class="m-0">Edit Mitra Hotel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Mitra Hotel</li>
                                <li class="breadcrumb-item active">Edit Mitra Hotel</li>
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
                                                <input id="uploadFilee" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                <div class="drag-text mt-4">
                                                    <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                </div>
                                            </div>
                                            <p class="image-title">Uploaded Image</p>
                                        </center>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Hotel</label>
                                        <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Masukan Nama Wisata">
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
                                        <label for="">Alamat Hotel</label>
                                        <textarea readonly class="form-control" style="border-radius: 15px;  height: 41px;" name="alamat" id="alamat" cols="5"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Hotel</label>
                                <textarea class="form-control" style="border-radius: 15px; " name="" id="" cols="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success float-right btn-sm" data-toggle="modal" data-target="#tambahKamar" style="border-radius: 15px;"> <i class="fa fa-plus-circle"></i> Tambah Kamar</button>
                                <label for="">Jenis Kamar Hotel</label>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Jenis Kamar</th>
                                            <th>Fasilitas Kamar</th>
                                            <th>Harga Kamar</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Status Kamar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>Text</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKamar" title="Edit Data"><i class="fa fa-pen-alt"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="hapusKamar()" title="Non Aktif Kamar"><i class="fas fa-power-off"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                                <button type="button" class="btn btn-danger m-1" style="border-radius: 15px;">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Kamar -->
                    <div class="modal fade" id="tambahKamar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="border-radius: 15px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kamar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Jenis Kamar</label>
                                        <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Masukan Jenis Kamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fasilitas Kamar</label>
                                        <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Masukan Fasilitas Kamar">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Harga Kamar</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Harga Kamar" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Jumlah Kamar</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-door-open"></i></span>
                                                    </div>
                                                    <input style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Jumlah Kamar" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edit Kamar -->
                    <div class="modal fade" id="editKamar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="border-radius: 15px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Edit Kamar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Jenis Kamar</label>
                                        <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Masukan Jenis Kamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fasilitas Kamar</label>
                                        <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Masukan Fasilitas Kamar">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Harga Kamar</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Harga Kamar" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Jumlah Kamar</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1"><i class="fa fa-door-open"></i></span>
                                                    </div>
                                                    <input style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Jumlah Kamar" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
                $("#alamat").val(result.features[0].place_name)
            })

        }

        marker.on('dragend', onDragEnd);
    </script>
</body>

</html>