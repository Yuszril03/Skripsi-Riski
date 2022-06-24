<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/LoginAdmin/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url() ?>/LoginAdmin/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <img src="<?= base_url() ?>/Image/Icon/penuhLogo.png" width="110" alt="">
                    <h2 class="heading-section">Masuk Administrator</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Kata Sandi" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
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

    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="<?= base_url() ?>/ConfigFirebase/Config.js"></script>

    <script>
        console.log(database)
    </script>

</body>

</html>