<!DOCTYPE html>
<html lang="en">

<head>
    <title>TraveLand - Login Mitra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/vendors/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/LoginMitra/css/main2.css">


    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Masuk Mitra TraveLand
                    </span>


                    <div id="alertEmail" class="wrap-input100 validate-input" data-validate="Email Tidak Valid">
                        <input class="input100" type="text" name="email" id="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div id="alertPass" class="wrap-input100 validate-input" data-validate="Kata Sandi Tidak Valid">
                        <input class="input100" type="password" name="pass" id="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Kata Sandi</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">

                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Lupa Kata Sandi
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="button" id="Submittt" class="login100-form-btn">
                            Masuk
                        </button>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url('<?= base_url() ?>/Image/Icon/5570863.jpg'); background-color: rgba(255,255,255,100);">
                    <p class="headerLogin">Selamat Datang</p>
                    <p class="headerLogin-sub">Di Website Pengelolaan Mitra TraveLand</p>
                    <img class="imgHeader" src="<?= base_url() ?>/Image/Icon/Digital presentation-cuate.svg" alt="">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/LoginMitra/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>/LoginMitra/vendors/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/vendors/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/LoginMitra/js/main.js"></script>
    <script src="<?= base_url() ?>/MD5/md5.min.js"></script>
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

        var parseJsonPartner = []

        const starCountRef2 = ref(db, 'Master-Data-Mitra/');
        onValue(starCountRef2, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            // console.log(keys)

            for (const isi in keys) {
                const ValueItem = ref(db, 'Master-Data-Mitra/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {

                    const ValueAccount = ref(db, 'Master-Data-Account-Mitra/' + keys[isi]);
                    onValue(ValueAccount, (accounts) => {
                        let DataMitraa = {
                            Nama: kontenn.val().NamaMitra,
                            Email: kontenn.val().EmailMitra,
                            KataSandi: accounts.val().KataSandiMitra,
                            Jenis: accounts.val().JenisMitra,
                            IDKelola: accounts.val().IDKelolaMitra,
                            IdKey: keys[isi]

                        }
                        parseJsonPartner.push(DataMitraa);
                    })

                })
            }
            console.log(parseJsonPartner)

        });


        document.getElementById('Submittt').addEventListener('click', function() {
            let idData = ['email', 'pass']
            let jumlah = 0;

            for (let i = 0; i < idData.length; i++) {
                if (i == 0) {
                    if (document.getElementById(idData[i]).value == "") {
                        jumlah++;
                        $("#alertEmail").addClass('alert-validate')
                    } else {
                        $("#alertEmail").removeClass('alert-validate')
                    }
                } else {
                    if (document.getElementById(idData[i]).value == "") {
                        jumlah++;
                        $("#alertPass").addClass('alert-validate')
                    } else {
                        $("#alertPass").removeClass('alert-validate')
                    }
                }
            }


            if (jumlah == 0) {
                let trueLogin = 0;
                let dataSession = {};

                for (let j = 0; j < parseJsonPartner.length; j++) {
                    if (document.getElementById('email').value == parseJsonPartner[j].Email &&
                        md5(document.getElementById('pass').value) == parseJsonPartner[j].KataSandi) {
                        trueLogin = 1;
                        dataSession = parseJsonPartner[j];
                    }
                }
                // console.log(dataSession)
                if (trueLogin == 1) {

                    $.ajax({
                        url: '<?= base_url() ?>/Login/AuthMitra',
                        type: "POST",
                        data: dataSession,
                        dataType: "JSON"
                    }).done((result) => {
                        location.href = "<?= base_url() ?>/Beranda-Mitra"
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email atau Kata Sandi Tidak Valid!'
                    })
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email atau Kata Sandi Tidak Boleh Kosong!'
                })
            }

        })
    </script>

</body>

</html>