<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Edit Customer</title>

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
            height: 100px;
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
                            <h1 class="m-0">Edit Data Customer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Data Customer</li>
                                <li class="breadcrumb-item active">Edit Data Customer</li>
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
                            <form action="">
                                <div class="w-100 bg-gray rounded p-2 mb-2">
                                    <i class="fas fa-user"></i> Data Pribadi Customer
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="">Upload Foto Profil</label>

                                            <div class="file-upload">
                                                <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                                <div class="Imagees">
                                                    <img src="<?= base_url() ?>/Image/Icon/UploadProfile.svg" id="NoneImage" alt="">
                                                    <img src="" id="AddImage" alt="">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="judul-BeritaEvent" class="col-form-label">Nama Pengguna <sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" class="form-control" style="border-radius: 15px;" id="namaCust" placeholder="Ketik di sini...">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="EmailData-Usert" class="col-form-label">Email <sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" class="form-control" style="border-radius: 15px;" id="EmailCust" placeholder="Ketik di sini...">
                                        </div>

                                        <div class="form-group">
                                            <label for="judul-BeritaEvent" class="col-form-label">Nomor Telpon <sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" class="form-control" name="angka" id="nomorCust" placeholder="Ketik di sini..." style="border-radius: 15px;">

                                        </div>
                                        <div class="form-group">
                                            <label for="isi-BeritaEvent" class="col-form-label">Jenis Kelamin <sup><span class="text-danger">*</span></sup></label>
                                            <div class="row ml-2">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="gender" id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">
                                                        Laki - Laki
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="gender" id="inlineRadio2" value="0">
                                                    <label class="form-check-label" for="inlineRadio2">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal-LahirPengguna" class="col-form-label">Tanggal Lahir <sup><span class="text-danger">*</span></sup></label>
                                            <input type="date" class="form-control" data-date="" data-date-format="DD MMMM YYYY" style="border-radius: 15px;" id="tanggalCust">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="alamatUser">Alamat <sup><span class="text-danger">*</span></sup></label>
                                    <textarea type="text" name="" id="alamatCust" class="form-control" placeholder="Ketik di sini..." aria-describedby="helpId" style="border-radius: 15px;"></textarea>
                                </div>
                                <div class="w-100 bg-gray rounded p-2">
                                    <i class="fas fa-user-cog"></i> Data Akun Customer (Optional)
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="judul-BeritaEvent" class="col-form-label">Kata Sandi Baru</label>
                                            <input type="password" class="form-control" style="border-radius: 15px;" id="pass" placeholder="Ketik di sini...">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="judul-BeritaEvent" class="col-form-label">Konfirmasi Kata Sandi Baru</label>
                                            <input type="password" class="form-control" style="border-radius: 15px;" id="Konfpass" placeholder="Ketik di sini...">
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="button" id="submitData" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                    <button type="button" onclick="KeluarForm()" class=" btn btn-secondary m-1" style="border-radius: 15px;">close</button>
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

        $('#btnCancelImage').hide()
        $('#AddImage').hide()
        $('.image-title').hide()
        $('#NoneImage').show()

        var parseJsonAdmin = {};

        const ValueItem = ref(db, 'Master-Data-Customer/<?= $DataID ?>');
        onValue(ValueItem, (kontenn) => {
            let PostD = {
                Nama: kontenn.val().NamaCustomer,
                Gender: kontenn.val().Gender,
                Telefon: kontenn.val().TelefonCustomer,
                Status: kontenn.val().StatusCustomer,
                Email: kontenn.val().EmailCustomer,
                Alamat: kontenn.val().AlamatCustomer,
                tanggalLahir: kontenn.val().TanggalLahirCustomer,
                TanggalBuat: kontenn.val().TanggalBuat,
                TanggalUpdate: kontenn.val().TanggalUpdate,
                fotoCustomer: kontenn.val().fotoCustomer
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
                if (kontenn.val().fotoCustomer == "") {
                    $('#btnCancelImage').hide()
                    $('#AddImage').hide()
                    $('.image-title').hide()
                    $('#NoneImage').show()
                    $('.image-upload-wrap').show();
                } else {
                    document.getElementById('AddImage').src = kontenn.val().fotoCustomer
                    $('#btnCancelImage').show()
                    $('#AddImage').show()
                    $('.image-title').hide()
                    $('#NoneImage').hide()
                    $('.image-upload-wrap').hide();

                }

                if (kontenn.val().Gender == 1) {
                    document.getElementById('inlineRadio1').checked = true
                } else {
                    document.getElementById('inlineRadio2').checked = true

                }

                document.getElementById('namaCust').value = kontenn.val().NamaCustomer
                document.getElementById('EmailCust').value = kontenn.val().EmailCustomer
                document.getElementById('nomorCust').value = kontenn.val().TelefonCustomer
                document.getElementById('tanggalCust').value = kontenn.val().TanggalLahirCustomer
                document.getElementById('alamatCust').value = kontenn.val().AlamatCustomer
            }



        })

        document.getElementById('submitData').addEventListener('click', function() {
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
                    let idData = ['namaCust', 'EmailCust', 'nomorCust', 'gender', 'tanggalCust', 'alamatCust'];
                    let jumlah = 0;
                    const fileupload = $('#uploadFilee').prop('files')[0];
                    let gender = $('input[name="gender"]:checked').val();

                    if (document.getElementById('pass').value != "") {
                        //Jika Tidak Ada Update Kata Sandi
                        if (document.getElementById('Konfpass').value == "") {
                            $('#Konfpass').addClass('is-invalid')
                            $('#pass').removeClass('is-invalid')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Konfirmasi Kata Sandi Harus Terisi!'
                            })

                        } else if (document.getElementById('Konfpass').value != document.getElementById('pass').value) {
                            $('#Konfpass').addClass('is-invalid')
                            $('#pass').addClass('is-invalid')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Konfirmasi Kata Sandi Tidak Sama!'
                            })
                        } else {
                            $('#pass').removeClass('is-invalid')
                            $('#Konfpass').removeClass('is-invalid')

                            for (let i = 0; i < idData.length; i++) {
                                if (i == 3) {
                                    if (Boolean(gender) == false) {
                                        $('#inlineRadio1').addClass('is-invalid')
                                        $('#inlineRadio2').addClass('is-invalid')
                                        jumlah++;
                                    } else {
                                        $('#inlineRadio1').removeClass('is-invalid')
                                        $('#inlineRadio2').removeClass('is-invalid')
                                    }
                                } else if (document.getElementById(idData[i]).value == "") {
                                    $('#' + idData[i]).addClass('is-invalid')
                                    jumlah++;
                                } else {
                                    $('#' + idData[i]).removeClass('is-invalid')
                                }
                            }

                            if (jumlah == 0) {
                                if (Boolean(fileupload) == false) {
                                    let PostD = {
                                        NamaCustomer: document.getElementById('namaCust').value,
                                        Gender: Number(gender),
                                        TelefonCustomer: document.getElementById('nomorCust').value,
                                        StatusCustomer: parseJsonAdmin.Status,
                                        EmailCustomer: document.getElementById('EmailCust').value,
                                        fotoCustomer: parseJsonAdmin.fotoCustomer,
                                        TanggalLahirCustomer: document.getElementById('tanggalCust').value,
                                        AlamatCustomer: document.getElementById('alamatCust').value,
                                        TanggalBuat: parseJsonAdmin.TanggalBuat,
                                        TanggalUpdate: new Date().toString("ID"),
                                    };
                                    const updates = {};
                                    updates['/Master-Data-Customer/<?= $DataID ?>'] = PostD;
                                    update(ref(db), updates);

                                    let postAccount = {
                                        KataSandi: md5(document.getElementById('pass').value)
                                    }
                                    const updatesAccout = {};
                                    updatesAccout['/Master-Data-Account-Customer/<?= $DataID ?>'] = postAccount;
                                    update(ref(db), updatesAccout);

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
                                            location.href = "<?= base_url() ?>/Data-Customer"
                                        }
                                    })

                                } else {

                                    const storageRef = refImage(storage, 'images-customer/' + new Date().getTime() + '-' + fileupload.name);

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
                                                let PostD = {
                                                    NamaCustomer: document.getElementById('namaCust').value,
                                                    Gender: Number(gender),
                                                    TelefonCustomer: document.getElementById('nomorCust').value,
                                                    StatusCustomer: parseJsonAdmin.Status,
                                                    EmailCustomer: document.getElementById('EmailCust').value,
                                                    fotoCustomer: downloadURL,
                                                    TanggalLahirCustomer: document.getElementById('tanggalCust').value,
                                                    AlamatCustomer: document.getElementById('alamatCust').value,
                                                    TanggalBuat: parseJsonAdmin.TanggalBuat,
                                                    TanggalUpdate: new Date().toString("ID"),
                                                };
                                                const updates = {};
                                                updates['/Master-Data-Customer/<?= $DataID ?>'] = PostD;
                                                update(ref(db), updates);

                                                let postAccount = {
                                                    KataSandi: md5(document.getElementById('pass').value)
                                                }
                                                const updatesAccout = {};
                                                updatesAccout['/Master-Data-Account-Customer/<?= $DataID ?>'] = postAccount;
                                                update(ref(db), updatesAccout);
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
                                            location.href = "<?= base_url() ?>/Data-Customer"
                                        }
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
                    } else {
                        //Jika ada update kata sandi
                        for (let i = 0; i < idData.length; i++) {
                            if (i == 3) {
                                if (Boolean(gender) == false) {
                                    $('#inlineRadio1').addClass('is-invalid')
                                    $('#inlineRadio2').addClass('is-invalid')
                                    jumlah++;
                                } else {
                                    $('#inlineRadio1').removeClass('is-invalid')
                                    $('#inlineRadio2').removeClass('is-invalid')
                                }
                            } else if (document.getElementById(idData[i]).value == "") {
                                $('#' + idData[i]).addClass('is-invalid')
                                jumlah++;
                            } else {
                                $('#' + idData[i]).removeClass('is-invalid')
                            }
                        }


                        if (jumlah == 0) {
                            if (Boolean(fileupload) == false) {
                                let PostD = {
                                    NamaCustomer: document.getElementById('namaCust').value,
                                    Gender: Number(gender),
                                    TelefonCustomer: document.getElementById('nomorCust').value,
                                    StatusCustomer: parseJsonAdmin.Status,
                                    EmailCustomer: document.getElementById('EmailCust').value,
                                    fotoCustomer: parseJsonAdmin.fotoCustomer,
                                    TanggalLahirCustomer: document.getElementById('tanggalCust').value,
                                    AlamatCustomer: document.getElementById('alamatCust').value,
                                    TanggalBuat: parseJsonAdmin.TanggalBuat,
                                    TanggalUpdate: new Date().toLocaleString("id-ID"),
                                };
                                const updates = {};
                                updates['/Master-Data-Customer/<?= $DataID ?>'] = PostD;
                                update(ref(db), updates);
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: 'Data berhasil tersimpan.',
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Okey'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href = "<?= base_url() ?>/Data-Customer"
                                    }
                                })

                            } else {

                                const storageRef = refImage(storage, 'images-customer/' + new Date().getTime() + '-' + fileupload.name);

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
                                            let PostD = {
                                                NamaCustomer: document.getElementById('namaCust').value,
                                                Gender: Number(gender),
                                                TelefonCustomer: document.getElementById('nomorCust').value,
                                                StatusCustomer: parseJsonAdmin.Status,
                                                EmailCustomer: document.getElementById('EmailCust').value,
                                                fotoCustomer: downloadURL,
                                                TanggalLahirCustomer: document.getElementById('tanggalCust').value,
                                                AlamatCustomer: document.getElementById('alamatCust').value,
                                                TanggalBuat: parseJsonAdmin.TanggalBuat,
                                                TanggalUpdate: new Date().toLocaleString("id-ID"),
                                            };
                                            const updates = {};
                                            updates['/Master-Data-Customer/<?= $DataID ?>'] = PostD;
                                            update(ref(db), updates);
                                        });
                                    }
                                );

                                Swal.fire({
                                    title: 'Berhasil',
                                    text: 'Data berhasil tersimpan.',
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Okey'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href = "<?= base_url() ?>/Data-Customer"
                                    }
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
                }
            })
        })
    </script>

    <script>
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



        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }

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
                    location.href = "<?= base_url() ?>/Data-Customer"
                }
            })
        }
    </script>


</body>

</html>