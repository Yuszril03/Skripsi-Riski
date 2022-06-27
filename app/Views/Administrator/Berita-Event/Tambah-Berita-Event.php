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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
            height: 120px;
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
                            <h1 class="m-0">Tambah Berita & Event</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Berita & Event</li>
                                <li class="breadcrumb-item active">Tambah Berita & Event</li>
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
                            <form id="myform" action="">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="">Gambar Berita</label>
                                            <div class="file-upload">
                                                <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                                <div class="Imagees">
                                                    <img src="<?= base_url() ?>/Image/Icon/UploadProfile.svg" id="NoneImage" alt="">
                                                    <img src="" id="AddImage" alt="">
                                                </div>
                                                <center>
                                                    <div class="image-upload-wrap" style="margin-top: -150px ;">
                                                        <input id="uploadFilee" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                        <div class="drag-text mt-4">
                                                            <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                        </div>
                                                    </div>
                                                    <p class="image-title">Uploaded Image</p>
                                                </center>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul" class="col-form-label">Judul:</label>
                                            <input type="text" class="form-control" style="border-radius: 15px;" placeholder="Isi Judul" id="judul">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal-BeritaEvent" class="col-form-label">Tanggal</label>
                                            <input type="date" class="form-control" data-date="" onchange="(hanyaAngka)" data-date-format="DD MMMM YYYY" style="border-radius: 15px;" id="tanggalBeritaEvent">
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
                                            <label for="alamat-BeritaEvent" class="col-form-label">Alamat</label>
                                            <input type="hidden" id="latitute">
                                            <input type="hidden" id="longlitude">
                                            <textarea readonly class="form-control" style="border-radius: 15px; height: 130px;" id="alamatBeritaEvent" cols="30" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi-BeritaEvent" class="col-form-label">Isi Berita</label>
                                    <textarea class="form-control" style="border-radius: 15px;" id="isiBeritaEvent" cols="30" rows="5"></textarea>
                                </div>
                                <div class="float-right">
                                    <button type="button" id="submitData" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                    <button type="button" onclick="location.href='<?= base_url() ?>/BeritaEvent'" class=" btn btn-secondary m-1" style="border-radius: 15px;">close</button>
                                </div>
                            </form>
                        </div>
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

        let parseJsonBerita = [];
        let LastID = ""

        var parseJsonAdmin = [];

        const starCountRef = ref(db, 'Data-Berita-Event/');
        onValue(starCountRef, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            for (const isi in keys) {
                const ValueItem = ref(db, 'Data-Berita-Event/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {
                    let LastID = keys[isi]
                    let PostD = {
                        IDkey: keys[isi],
                    };
                    parseJsonAdmin.push(PostD)
                })
            }

        });



        // let judulBE = document.getElementById('judul').value;
        document.getElementById('submitData').addEventListener('click', function() {
            let form = ['judul', 'tanggalBeritaEvent', 'alamatBeritaEvent', 'isiBeritaEvent'];
            var angka = 0;
            const fileupload = $('#uploadFilee').prop('files')[0];



            for (let i = 0; i < form.length; i++) {
                if (document.getElementById(form[i]).value == "") {
                    angka++;
                    $('#' + form[i]).addClass('is-invalid')
                } else {
                    $('#' + form[i]).removeClass('is-invalid')
                }
            }

            if (angka == 0) {

                if (Boolean(fileupload) == false) {
                    if (parseJsonAdmin.length == 0) {
                        set(ref(db, 'Data-Berita-Event/' + "BE-1"), {
                            Judul: document.getElementById('judul').value,
                            TanggalEvent: document.getElementById('tanggalBeritaEvent').value,
                            Alamat: document.getElementById('alamatBeritaEvent').value,
                            IsiBerita: document.getElementById('isiBeritaEvent').value,
                            LinkImage: "",
                            StatusBerita: 1,
                            Longlitute: document.getElementById('longlitude').value,
                            Latitute: document.getElementById('latitute').value,
                            TanggalBuat: new Date().toLocaleString("id-ID"),
                            TanggalUpdate: new Date().toLocaleString("id-ID")
                        });
                    } else {
                        var idLst = parseJsonAdmin[parseJsonAdmin.length - 1].IDkey
                        let SplitData = idLst.split("-");
                        let nextID = "BE-" + (Number(SplitData[1]) + 1);
                        set(ref(db, 'Data-Berita-Event/' + nextID), {
                            Judul: document.getElementById('judul').value,
                            TanggalEvent: document.getElementById('tanggalBeritaEvent').value,
                            Alamat: document.getElementById('alamatBeritaEvent').value,
                            IsiBerita: document.getElementById('isiBeritaEvent').value,
                            LinkImage: "",
                            StatusBerita: 1,
                            Longlitute: document.getElementById('longlitude').value,
                            Latitute: document.getElementById('latitute').value,
                            TanggalBuat: new Date().toLocaleString("id-ID"),
                            TanggalUpdate: new Date().toLocaleString("id-ID")
                        });
                    }

                    Swal.fire({
                        title: 'Berhasil',
                        text: "Data Berhasil Tersimpan",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "<?= base_url() ?>/Berita-Event"
                        }
                    })

                } else {
                    const storageRef = refImage(storage, 'images-berita-event/' + fileupload.name);

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

                                if (parseJsonAdmin.length == 0) {
                                    set(ref(db, 'Data-Berita-Event/' + "BE-1"), {
                                        Judul: document.getElementById('judul').value,
                                        TanggalEvent: document.getElementById('tanggalBeritaEvent').value,
                                        Alamat: document.getElementById('alamatBeritaEvent').value,
                                        IsiBerita: document.getElementById('isiBeritaEvent').value,
                                        LinkImage: downloadURL,
                                        StatusBerita: 1,
                                        Longlitute: document.getElementById('longlitude').value,
                                        Latitute: document.getElementById('latitute').value,
                                        TanggalBuat: new Date().toLocaleString("id-ID"),
                                        TanggalUpdate: new Date().toLocaleString("id-ID")

                                    });

                                } else {
                                    var idLst = parseJsonAdmin[parseJsonAdmin.length - 1].IDkey
                                    let SplitData = idLst.split("-");
                                    let nextID = "BE-" + (Number(SplitData[1]) + 1);
                                    set(ref(db, 'Data-Berita-Event/' + nextID), {
                                        Judul: document.getElementById('judul').value,
                                        TanggalEvent: document.getElementById('tanggalBeritaEvent').value,
                                        Alamat: document.getElementById('alamatBeritaEvent').value,
                                        IsiBerita: document.getElementById('isiBeritaEvent').value,
                                        LinkImage: downloadURL,
                                        StatusBerita: 1,
                                        Longlitute: document.getElementById('longlitude').value,
                                        Latitute: document.getElementById('latitute').value,
                                        TanggalBuat: new Date().toLocaleString("id-ID"),
                                        TanggalUpdate: new Date().toLocaleString("id-ID")
                                    });

                                }

                                // console.log('File available at', downloadURL);
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
                            location.href = "<?= base_url() ?>/Berita-Event"
                        }
                    })
                    // document.getElementById('myform').reset()

                }



                // set(ref(db, 'Data-Berita-Event/' + ""), {

                //     Judul: document.getElementById('judul').value,
                //     TanggalEvent: document.getElementById('tanggal-BeritaEvent').value,
                //     Alamat: document.getElementById('alamat-BeritaEvent').value,
                //     IsiBerita: document.getElementById('isi-BeritaEvent').value,
                //     LinkImage: "",
                //     Langlitute: "",
                //     Latitute: ""
                // });

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Judul, Berita dan Alamat Tidak Boleh Kosong!'
                })
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
            document.getElementById('latitute').value = lngLat.lat;
            document.getElementById('longlitude').value = lngLat.lng;

            $.ajax({
                url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
                dataType: "JSON"
            }).done(result => {
                $("#alamatBeritaEvent").val(result.features[0].place_name)
            })

        }

        marker.on('dragend', onDragEnd);

        $("input").on("change", function() {
            this.setAttribute(
                "data-date",
                moment(this.value, "YYYY-MM-DD")
                .format(this.getAttribute("data-date-format"))
            )
        }).trigger("change")

        $("input").on("change", function() {
            this.setAttribute(
                "data-date",
                moment(this.value, "YYYY-MM-DD")
                .format(this.getAttribute("data-date-format"))
            )
        }).trigger("change")
    </script>


</body>



</html>