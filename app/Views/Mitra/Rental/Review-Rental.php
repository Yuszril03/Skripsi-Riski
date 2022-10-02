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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        .chacked {
            color: #ffc107;
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Review Kamar Hotel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Review Kamar Hotel</li>
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
                            <div class="table-responsive">
                                <table id="Table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">Kode Pemesanan</th>
                                            <th>Nama Rental</th>
                                            <th>Nama Kendaraan</th>
                                            <th style="width: 70px;">Rating</th>
                                            <th>Nama Pemesan</th>
                                            <th>Komentar</th>
                                            <th>Tanggapan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>

            <!-- Modal tanggapan -->
            <div class="modal fade" id="TambahTanggapan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content" style="border-radius: 15px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Berikan Tanggapan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Tanggapan<sup><span class="text-danger">*</span></sup></label>
                                <textarea name="fasilitasKamarEdit" id="TanggapanKomentar" class="form-control" style="border-radius: 15px;" rows="5" placeholder="Ketik di sini..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button id="submit" type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= view('Mitra/Template-Mitra/Footer') ?>

        <!-- Control Sidebar -->
        <aside class=" control-sidebar control-sidebar-dark">
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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script type="module">
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

        var idDataa = "";

        var parseJsonTransaksi = [];
        var table = $('#Table').DataTable({
            "lengthChange": false,

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



        var noo = 0;
        var datatEmpsDetails = [];
        const database1 = ref(db, 'Transaction-Rental');
        onValue(database1, (snapshot1) => {
            const dataTransaksi = snapshot1.val();
            const keysTransaksi = Object.keys(snapshot1.val());
            datatEmpsDetails = keysTransaksi

            for (const isi in keysTransaksi) {
                const database2 = ref(db, 'Transaction-Rental/' + keysTransaksi[isi]);
                onValue(database2, (snapshot2) => {
                    const dataRental = snapshot2.val();

                    //User
                    const database3 = ref(db, 'Master-Data-Customer/' + dataRental.IdCutomer);
                    onValue(database3, (snapshot3) => {
                        const dataCustomer = snapshot3.val();

                        //Nama Wisata
                        const database4 = ref(db, 'Master-Data-Rental/' + dataRental.IdMitra);
                        onValue(database4, (snapshot4) => {
                            const masterDataHotel = snapshot4.val();

                            //Detail Kamar
                            const database5 = ref(db, 'Master-Data-Rental-Detail/' + dataRental.IdMobil);
                            onValue(database5, (snapshot5) => {

                                if (snapshot2.val().IdMitra == "<?= session()->get('IDKelola') ?>") {
                                    let PostData = {
                                        IDKey: keysTransaksi[isi],
                                        NamaHotel: snapshot4.val().NamaRental,
                                        NamaKamar: snapshot5.val().NamaKendaraan,
                                        Rating: snapshot2.val().Rating,
                                        NamaCustomer: snapshot3.val().NamaCustomer,
                                        UlasanCustomer: snapshot2.val().UlasanCustomer,
                                        UlasanMitra: snapshot2.val().UlasanMitra,

                                        BuktiTraksaksi: snapshot2.val().BuktiTraksaksi,
                                        CheckIn: snapshot2.val().CheckIn,
                                        CheckOut: snapshot2.val().CheckOut,
                                        HargaMobil: snapshot2.val().HargaMobil,
                                        IdCutomer: snapshot2.val().IdCutomer,
                                        IdMobil: snapshot2.val().IdMobil,
                                        IdMitra: snapshot2.val().IdMitra,
                                        JenisPembayaran: snapshot2.val().JenisPembayaran,
                                        JumlahHari: snapshot2.val().JumlahHari,
                                        UkuranMobil: snapshot2.val().UkuranMobil,
                                        StatusTransaksi: snapshot2.val().StatusTransaksi,
                                        TotalSemua: snapshot2.val().TotalSemua,
                                        TanggalBuat: snapshot2.val().TanggalBuat,
                                        TanggalUpdate: snapshot2.val().TanggalUpdate
                                    }

                                    parseJsonTransaksi.push(PostData)

                                    // let StatusData = '';
                                    let ActionData = ``;
                                    let komentarData = '';
                                    let tanggapanData = '';
                                    let jumlah = 5;
                                    let tempoo = ``
                                    for (let i = 1; i <= jumlah; i++) {
                                        if (Number(snapshot2.val().Rating) >= i) {
                                            tempoo += `<i class="bi bi-star-fill chacked"></i>`;
                                        } else {
                                            tempoo += `<i class="bi bi-star"></i>`;
                                        }
                                    };

                                    if (snapshot2.val().UlasanCustomer == "") {
                                        komentarData = `<span>Tidak Ada Komentar</span>`;
                                    } else {
                                        komentarData = snapshot2.val().UlasanCustomer;
                                    }

                                    if (snapshot2.val().UlasanMitra == "" && snapshot2.val().UlasanCustomer == "") {
                                        tanggapanData = `<span>Tidak Ada tanggapan Karena Belum Ada Komentar</span>`;

                                    } else if (snapshot2.val().UlasanMitra == "") {
                                        tanggapanData = `<span>Belum Ada Tanggapan</span>`;
                                        ActionData =
                                            `<button id="EditDetails" data-id="${keysTransaksi[isi]}" class="btn btn-warning btn-sm m-1 openData" title="Edit Data" data-toggle="modal" data-target="#TambahTanggapan" style="border-radius: 15px;"><i class="bi bi-pen"></i>Tanggapi Komentar</button>
                    `;
                                    } else {
                                        tanggapanData = snapshot2.val().UlasanMitra;
                                    }

                                    const options = {
                                        weekday: 'long',
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    };


                                    if (Number(snapshot2.val().StatusTransaksi) == 1) {
                                        // data tidak ditampilkan
                                    } else if (Number(snapshot2.val().StatusTransaksi) == 2) {
                                        // data tidak ditampilkan
                                    } else if (Number(snapshot2.val().StatusTransaksi) == 3) {
                                        // data tidak ditampilkan
                                    } else {
                                        table.row.add([
                                            `<input type ="hidden" name ="idDetailT[]" value ="${keysTransaksi[isi]}" > ` +
                                            keysTransaksi[isi],
                                            `<input type ="hidden" name ="NamaHotelT[]" value ="${snapshot4.val().NamaRental}" > ` +
                                            snapshot4.val().NamaRental,
                                            `<input type ="hidden" name ="NamaHotelT[]" value ="${snapshot5.val().NamaKendaraan}" > ` +
                                            snapshot5.val().NamaKendaraan,
                                            `<input type ="hidden" name ="RatingT[]" value ="tempoo" > ` +
                                            tempoo,
                                            `<input type ="hidden" name ="NamaCustomerT[]" value ="${snapshot3.val().NamaCustomer}" > ` +
                                            snapshot3.val().NamaCustomer,
                                            `<input type ="hidden" name ="KomentarCustomerT[]" value ="${komentarData}" > ` +
                                            komentarData,
                                            `<input type ="hidden" name ="TanggapanMitraT[]" value ="${tanggapanData}" > ` +
                                            tanggapanData,

                                            ActionData
                                        ]).draw(false)
                                    }
                                }
                            })
                        })
                    })
                })
            }
            // console.log(parseJsonTransaksi)
        })


        $(document).on('click', '.openData', function() {
            var idData = $(this).data('id');
            idDataa = idData;

        })


        document.getElementById('submit').addEventListener('click', function() {
            let form = ['TanggapanKomentar'];
            var angka = 0;

            for (let i = 0; i < form.length; i++) {
                if (document.getElementById(form[i]).value == "") {
                    angka++;
                    $('#' + form[i]).addClass('is-invalid')
                } else {
                    $('#' + form[i]).removeClass('is-invalid')
                }
            }
            if (angka == 0) {
                var ss = 0;
                for (let i = 0; i < parseJsonTransaksi.length; i++) {
                    if (parseJsonTransaksi[i].IDKey == idDataa) {
                        ss = i
                    }
                }
                // console.log(parseJsonTransaksi[ss])
                let PostD = {

                    BuktiTraksaksi: parseJsonTransaksi[ss].BuktiTraksaksi,
                    CheckIn: parseJsonTransaksi[ss].CheckIn,
                    CheckOut: parseJsonTransaksi[ss].CheckOut,
                    HargaMobil: parseJsonTransaksi[ss].HargaMobil,
                    IdCutomer: parseJsonTransaksi[ss].IdCutomer,
                    IdMobil: parseJsonTransaksi[ss].IdMobil,
                    IdMitra: parseJsonTransaksi[ss].IdMitra,
                    JenisPembayaran: parseJsonTransaksi[ss].JenisPembayaran,
                    JumlahHari: parseJsonTransaksi[ss].JumlahHari,
                    UkuranMobil: parseJsonTransaksi[ss].UkuranMobil,
                    Rating: parseJsonTransaksi[ss].Rating,
                    StatusTransaksi: parseJsonTransaksi[ss].StatusTransaksi,
                    TotalSemua: parseJsonTransaksi[ss].TotalSemua,
                    UlasanCustomer: parseJsonTransaksi[ss].UlasanCustomer,
                    UlasanMitra: document.getElementById('TanggapanKomentar').value,
                    TanggalBuat: parseJsonTransaksi[ss].TanggalBuat,
                    TanggalUpdate: new Date().toString("ID")

                };
                const updates = {};
                updates['Transaction-Rental/' + idDataa] = PostD;
                update(ref(db), updates);

                Swal.fire({
                    title: 'Berhasil',
                    text: "Data Berhasil Tersimpan",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "<?= base_url() ?>/Review-Rental"
                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Form Tidak Boleh Kosong!'
                })
            }



        })
    </script>
</body>

</html>