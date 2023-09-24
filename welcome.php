<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about as</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="./img/Layer 1.png" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">........</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./home.phpu">الرئيسيه<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./startpage.php">من نحن</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        التواصل
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">facbook<svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <a class="dropdown-item" href="#"><i class="bi bi-twitter"> twiter<svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="bi bi-github"></i>Github<svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg></a>
                    </div>
                    <form class="form-inline my-2 my-lg-0">



            </ul>
            <a href="./register.php"><button type="button" class="btn btn-warning">سجل الان</button></a>
            <a href="./index.php"><button type="button" class="btn btn-warning">دخول</button></a>
            <a href="./logout.php"><button type="button" class="btn btn-warning">تسجيل الخروج</button></a>
        </div>
    </nav>
 <!--  -->
</section>
<h1 class="hs"> نحن نقدم لك جميع الخدمات</h1>
<section id="services" class="services">

    <div class="container aos-init aos-animate" data-aos="fade-up">

      

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i  class="saw"><img src="./img/plumbering.png" alt=""></i>
            <h3>السباكه</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i  class="saw"><img src="./img/automobile-with-wrench.png" alt=""></i>
            <h3>المكنيكا</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i  class="saw"><img src="./img/saw.png" alt=""></i>
            <h3>النجاره</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

      </div>
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i  class="saw"><img src="./img/electrician.png" alt=""></i>
            <h3>الكهرباء</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i  class="saw"><img src="./img/architect.png" alt=""></i>
            <h3>الديكور</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i  class="saw"><img src="./img/air-conditioner.png" alt=""></i>
            <h3>فني تكيف</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

      </div>
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i  class="saw"><img src="./img/sewing-machine.png" alt=""></i>
            <h3>الخياطه</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i  class="saw"><img src="./img/tiles.png" alt=""></i>
            <h3>فني ارضيات</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i  class="saw"><img src="./img/painter.png" alt=""></i>
            <h3>نقاش</h3>
            <p> نحن نقدم لك الخدمه باقل سعر ،يمكنك تقيم هذا لخدمه بعد الانتهاء منها</p>
            <a href="./sani3y.html" class="read-more"><span>احجز الان</span> <i class="bi bi-arrow-left"></i></a>
          </div>
        </div>

      </div>
      <div class="row gy-4">

        
    </div>

  </section>
  <!-- fotter -->
<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2018</p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>