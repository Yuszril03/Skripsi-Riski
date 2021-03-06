<!doctype html>
<html lang="en">

<head>
    <title>TraveLand - Login Administrator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/LoginAdmin/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url() ?>/LoginAdmin/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <img src="<?= base_url() ?>/Image/Icon/LogoAJAwhite.png" width="110" alt="">
                    <h2 class="heading-section">Masuk Administrator</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input id="Pass" type="password" class="form-control" placeholder="Kata Sandi" required>
                                <span toggle="#Pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="button" id="submitData" class="form-control btn btn-primary submit px-3">Masuk</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url() ?>/LoginAdmin/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/LoginAdmin/js/popper.js"></script>
    <script src="<?= base_url() ?>/LoginAdmin/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/LoginAdmin/js/main.js"></script>
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


        // set(ref(db, 'Data-Administrator/' + "adm3"), {
        //     Email: "Apaloh",
        //     KataSandi: "111111"
        // });

        // const upddd = {
        //     Email: "Coba",
        //     KataSandi: "333"
        // }

        // const updates = {};
        // updates['/Data-Administrator/adm3'] = upddd;
        // update(ref(db), updates);


        var parseJsonAdmin = [];

        const starCountRef = ref(db, 'Data-Administrator/');
        onValue(starCountRef, (snapshot) => {
            const data = snapshot.val();
            const keys = Object.keys(data);
            for (const isi in keys) {
                const ValueItem = ref(db, 'Data-Administrator/' + keys[isi]);
                onValue(ValueItem, (kontenn) => {
                    let PostD = {
                        IDkey: keys[isi],
                        Email: kontenn.val().Email,
                        KataSandi: kontenn.val().KataSandi,
                        NamaAdmin: kontenn.val().NamaAdmin
                    };
                    parseJsonAdmin.push(PostD)
                })
            }

        });

        // console.log(parseJsonAdmin)

        document.getElementById('submitData').addEventListener('click', function() {
            let idLogin = ['Email', 'Pass'];
            var jumlah = 0;
            for (let i = 0; i < idLogin.length; i++) {
                if (document.getElementById(idLogin[i]).value == "") {
                    jumlah++;
                    $('#' + idLogin[i]).addClass('is-invalid')
                } else {
                    $('#' + idLogin[i]).removeClass('is-invalid')
                }
            }
            if (jumlah == 0) {
                let trueLogin = 0;
                let dataSession = {};

                for (let j = 0; j < parseJsonAdmin.length; j++) {
                    if (document.getElementById('Email').value == parseJsonAdmin[j].Email &&
                        md5(document.getElementById('Pass').value) == parseJsonAdmin[j].KataSandi) {
                        trueLogin = 1;
                        dataSession = parseJsonAdmin[j];
                    }
                }
                // console.log(dataSession)
                if (trueLogin == 1) {

                    $.ajax({
                        url: '<?= base_url() ?>/Login/AuthAdmin',
                        type: "POST",
                        data: dataSession,
                        dataType: "JSON"
                    }).done((result) => {
                        location.href = "<?= base_url() ?>/Beranda-Admin"
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