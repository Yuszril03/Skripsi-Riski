 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>TraveLand - Tambah Data Kegiatan</title>

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

     <!-- Select2 CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

     <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
     <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
     <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>
     <script src="//cdn.ckeditor.com/4.19.1/basic/ckeditor.js"></script>


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
             height: 150px;

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

         .select2 .selection .select2-selection ul li {
             color: black;
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
                             <h1 class="m-0">Edit Rekening Bank</h1>
                         </div><!-- /.col -->
                         <div class="col-sm-6">
                             <ol class="breadcrumb float-sm-right">
                                 <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                 <li class="breadcrumb-item active">Daftar Bank</li>
                                 <li class="breadcrumb-item active">Edit Rekening Bank</li>
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
                             <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                 <i class="bi bi-card-list text-primary"></i> Data Detail Kegiatas
                             </div>

                             <div class="row">
                                 <div class="col-6">
                                     <div class="form-group">
                                         <label for="">Nama Bank</label>
                                         <input type="text" id="namaBank" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                     </div>
                                 </div>
                                 <div class="col-6">
                                     <div class="form-group">
                                         <label for="">Rekening Bank</label>
                                         <input type="text" id="rekeningBank" onkeypress="return hanyaAngka(this)" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                     </div>
                                 </div>
                             </div>

                             <form id="myform" action="">
                                 <div class="form-group">
                                     <label for="isi-BeritaEvent" class="col-form-label">Cara Pembayaran</label>
                                     <!-- <textarea class="form-control" style="border-radius: 15px;" id="caraPembayaran" cols="30" rows="5"></textarea> -->
                                     <textarea class="form-control" name="editor1" id="editor1" rows="5" cols="30"></textarea>
                                     <span id="error" class="text-danger">Mohon untuk mengisi kolom ini !!!</span>
                                 </div>

                                 <div class="form-group">
                                     <label for="">Gambar Bank</label>
                                     <div class="file-upload">
                                         <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                         <div class="Imagees">
                                             <img src="<?= base_url() ?>/Image/Icon/UploadProfile.svg" id="NoneImage" alt="">
                                             <img src="" id="AddImage" alt="">
                                         </div>
                                         <center>
                                             <div class="image-upload-wrap" style="margin-top: -160px ;">
                                                 <input id="uploadFilee" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                 <div class="drag-text mt-4">
                                                     <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                 </div>
                                             </div>

                                             <p class="image-title">Uploaded Image</p>

                                         </center>

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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

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

         // $('#tag').select2();
         $('#tag').select2();
         $("#error").hide()

         // $('select').select2({
         //     theme: 'bootstrap'
         // })

         $("#errorTag").hide()
         $("#groupMulai").show()
         $("#groupAkhir").hide()



         $('#btnCancelImage').hide()
         $('#AddImage').hide()
         $('.image-title').hide()
         $('#NoneImage').show()

         var parseJsonAdmin = {};

         const ValueItem = ref(db, 'Master-Data-Bank/<?= $DataID ?>');
         onValue(ValueItem, (kontenns) => {
             let PostD = {

                 NamaBank: kontenns.val().NamaBank,
                 RekeningBank: kontenns.val().RekeningBank,
                 CaraPembayaran: kontenns.val().CaraPembayaran,
                 Status: kontenns.val().StatusBank,
                 GambarBank: kontenns.val().GambarBank,
                 TanggalBuat: kontenns.val().TanggalBuat,
                 TanggalUpdate: kontenns.val().TanggalUpdate

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
                 if (kontenns.val().GambarBank == "") {
                     $('#btnCancelImage').hide()
                     $('#AddImage').hide()
                     $('.image-title').hide()
                     $('#NoneImage').show()
                     $('.image-upload-wrap').show();
                 } else {
                     document.getElementById('AddImage').src = kontenns.val().GambarBank
                     $('#btnCancelImage').show()
                     $('#AddImage').show()
                     $('.image-title').hide()
                     $('#NoneImage').hide()
                     $('.image-upload-wrap').hide();

                 }

                 // Replace the <textarea id="editor1"> with a CKEditor 4
                 // instance, using default configuration.
                 CKEDITOR.replace('editor1');

                 document.getElementById('namaBank').value = kontenns.val().NamaBank
                 document.getElementById('rekeningBank').value = kontenns.val().RekeningBank
                 document.getElementById('editor1').value = kontenns.val().CaraPembayaran


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
                     let idData = ['namaBank', 'rekeningBank', 'editor1'];
                     let jumlah = 0;
                     var data = CKEDITOR.instances.editor1.getData();
                     const fileupload = $('#uploadFilee').prop('files')[0];

                     //  const tempsTag = document.getElementsByClassName('select2-selection__choice');
                     //  let arrayTag = [];
                     //  for (let i = 0; i < tempsTag.length; i++) {
                     //      let temps = tempsTag[i].innerText
                     //      let resultSplit = temps.split("×\n");
                     //      arrayTag.push(resultSplit[1]);
                     //  }

                     for (let i = 0; i < idData.length; i++) {
                         if (i == 2) {
                             if (data == "") {
                                 jumlah++;
                                 $("#error").show()
                             } else {
                                 $("#error").hide()
                             }
                         } else if (document.getElementById(idData[i]).value == "") {
                             jumlah++;
                             $('#' + idData[i]).addClass('is-invalid')
                         } else {
                             $('#' + idData[i]).removeClass('is-invalid')
                         }
                     }

                     if (jumlah == 0) {
                         console.log(data);
                          if (Boolean(fileupload) == false) {
                              let PostD = {
                                  NamaBank: document.getElementById('namaBank').value,
                                  RekeningBank: document.getElementById('rekeningBank').value,
                                  CaraPembayaran: data,
                                  GambarBank: parseJsonAdmin.GambarBank,
                                  StatusBank: parseJsonAdmin.Status,
                                  TanggalBuat: parseJsonAdmin.TanggalBuat,
                                  TanggalUpdate: new Date().toString("ID")

                              };
                              const updates = {};
                              updates['/Master-Data-Bank/<?= $DataID ?>'] = PostD;
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
                                      location.href = "<?= base_url() ?>/Daftar-Bank"
                                  }
                              })

                          } else {

                              const storageRef = refImage(storage, 'images-bank/' + new Date().getTime() + ' - ' + fileupload.name);

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
                                              NamaBank: document.getElementById('namaBank').value,
                                              RekeningBank: document.getElementById('rekeningBank').value,
                                              CaraPembayaran: data,
                                              GambarBank: downloadURL,
                                              StatusBank: parseJsonAdmin.Status,
                                              TanggalBuat: parseJsonAdmin.TanggalBuat,
                                              TanggalUpdate: new Date().toString("ID")
                                          };
                                          const updates = {};
                                          updates['/Master-Data-Bank/<?= $DataID ?>'] = PostD;
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
                                      location.href = "<?= base_url() ?>/Daftar-Bank"
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
             })
         })
     </script>

     <script>
         $('#tag').select2();
         // $('select').select2({
         //     theme: 'bootstrap'
         // })

         $("#errorTag").hide()
         $("#groupMulai").hide()
         $("#groupAkhir").hide()

         function GetKegiatan(id) {
             if (id == "") {
                 $("#groupMulai").hide()
                 $("#groupAkhir").hide()
             } else if (id == "Berita") {
                 document.getElementById('tanggalKEgiatanLabel').innerHTML = "Tanggal Berita"
                 $("#groupMulai").show()
                 $("#groupAkhir").hide()
             } else if (id == "Event") {
                 document.getElementById('tanggalKEgiatanLabel').innerHTML = "Tanggal Mulai"
                 $("#groupMulai").show()
                 $("#groupAkhir").show()
             }
         }

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
         }).trigger("change");

         $("input").on("change", function() {
             this.setAttribute(
                 "data-date",
                 moment(this.value, "YYYY-MM-DD")
                 .format(this.getAttribute("data-date-format"))
             )
         }).trigger("change");



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
                     location.href = "<?= base_url() ?>/Daftar-Bank"
                 }
             })
         }

         function hanyaAngka(evt) {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))

                 return false;
             return true;
         }
     </script>


 </body>



 </html>