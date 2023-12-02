<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animation.css">
</head>

<body>
    <!-- Модальное окно для бронирования -->
    <div id="bookingModal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="booking-area section-bg pt-120 pb-130"
                style="background-image: url('assets/img/gallery/section_bg04.png')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Title -->
                            <div class="section-tittle text-center mb-40">
                                <span>About Our Restaurant</span>
                                <h2>Book A Table</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <form action="mail.php" class="form-book" id="formBook">
                                <input type="text" name="name" class="form-book__input" placeholder="Name">
                                <input type="email" name="email" class="form-book__input" placeholder="Email">
                                <input type="text" name="phone" class="form-book__input" placeholder="Phone">
                                <button class="btn select-btn" type="submit">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery -->
    <script src="./assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Other Jquery Plugins and main Jquery -->
    <script src="./assets/js/vendor/parallax.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>