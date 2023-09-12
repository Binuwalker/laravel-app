<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-2.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Martel&display=swap" rel="stylesheet">
    <script src="../js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Martel', sans-serif;
        }
    </style>
</head>

<body>
    <div class="w-100 content-group-a">
        <div class="container">
            <div class="header-contents p-4 w-100">
                <div class="logo">
                    <img src="../img/Logo.png" alt="Logo" width="90" height="90" loading="lazy">
                </div>
                <div class="heading">Gale Ranch Notary, Apostille and Financial Services</div>
            </div>
            <nav class="navbar navbar-expand-lg top-nav ps-2 pe-2">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="links">
                        <li class="link">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="link">
                            <a class="nav-link" href="<?= url('services') ?>">Services</a>
                        </li>
                        <li class="link">
                            <a class="nav-link" href="<?= url('/reviews') ?>">Reviews</a>
                        </li>
                        <li class="link">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="link">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="link">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="m-5">
        <div class="box-head dis-flex align-items-center justify-content-center font-size-4 font-weight-2">
            What We Do?
        </div>
        <div class='dis-flex align-items-center justify-content-center'>
        <div class='custom-hr'></div>
    </div>
        <div class="boxes gap-4">
            <div class="box p-4">
                <div><i class="font-size-4 fa-solid fa-feather"></i></div>
                <div class='font-size-2-h mt-3 font-weight-2'>Notary - Mobile</div>
                <div class='mt-2'>
                    Notary - Mobile (San Ramon, Dublin, Pleasanton, Walnut Creek)
                </div>
            </div>
            <div class="box p-4">
                <div><i class="font-size-4 fa-solid fa-book"></i></div>
                <div class='font-size-2-h mt-3 font-weight-2'>Apostille Service</div>
            </div>
            <div class="box p-4">
                <div>
                    <i class="font-size-4 fa-solid fa-heart-pulse"></i>
                </div>
                <div class='font-size-2-h mt-3 font-weight-2'>Trust and Estates</div>
                <div class='mt-2'>
                    Will/Trust/Health-Care Directive through Attorney Service
                </div>
            </div>
            <div class="box p-4">
                <div><i class="font-size-4 fa-solid fa-pen-nib"></i></div>
                <div class='font-size-2-h mt-3 font-weight-2'>Notary - Loan Signing Agent</div>
            </div>
            <div class="box p-4">
                <div>
                    <i class="font-size-4 fa-solid fa-plane-arrival"></i>
                </div>
                <div class='font-size-2-h mt-3 font-weight-2'>Immigration Services</div>
            </div>
            <div class="box p-4">
                <div><i class="font-size-4 fa-solid fa-hand-holding-dollar"></i></div>
                <div class='font-size-2-h mt-3 font-weight-2'>Financial Services</div>
            </div>
        </div>
    </div>
    <div class="subscribe container">
            <div class="subscribe-contents">
                <div class="quote-container">
                    <div class="subscribe-heading">Subscribe:</div>
                    <div class="subscribe-quote">To receive Bay Area Events, Finance and Notary Info,
                        Discount/FREE offers</div>
                </div>
                <div class="button-container">
                    <div class="btn-container-bg"><button class="button">Hit to view subscription
                            Form</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="footer pt-4 pb-4" style="color: #ffffff;">
        <div class="p-3">
            <div class="res-768px-dis-block dis-flex justify-content-space-between">
                <div class="dis-flex align-items-center position-re bottom-5">
                    <div>
                        <img src="../img/Logo.png" alt="Logo" width="80" height="80" loading="lazy"
                            class="position-re top-1">
                    </div>
                    <div class="font-2 font-strength-600">
                        <div>Gale Ranch Notary, </div>
                        <div>Apostille and Financial Services</div>
                    </div>
                </div>
                <div class="res-576px-dis-block dis-flex make-gap-6 p-4 pt-0 mt-0">
                    <div>
                        <div class="text-transform-uppercase font-strength-600 res-576px-mt-3 font-1">Quick Links</div>
                        <div class="mt-4 cursor-pointer make-text-decoration-underline-onhover">Blog</div>
                        <div class="mt-3 cursor-pointer make-text-decoration-underline-onhover">Reviews</div>
                        <div class="mt-3 cursor-pointer make-text-decoration-underline-onhover">subscription</div>
                    </div>
                    <div>
                        <div class="text-transform-uppercase font-strength-600 res-576px-mt-3 font-1">Others</div>
                        <div class="mt-4 cursor-pointer make-text-decoration-underline-onhover">Services</div>
                        <div class="mt-3 cursor-pointer make-text-decoration-underline-onhover">FAQ</div>
                    </div>
                    <div>
                        <div class="text-transform-uppercase font-strength-600 res-576px-mt-3 font-1">Contact No</div>
                        <div class="mt-4 cursor-pointer make-text-decoration-underline-onhover">(925) 322 3131</div>
                    </div>
                </div>
            </div>
            <hr class="text-fill-grey-100" />
            <div class="res-768px-dis-block dis-flex justify-content-space-between pt-3">
                <div class="text-fill-grey-100">© 2022 GaleRanchNotary. All Rights Reserved.</div>
                <div class="dis-flex align-items-center make-gap-4 font-3 text-fill-grey-100 res-768px-mt-3">
                    <div class="cursor-pointer">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <div class="cursor-pointer">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="cursor-pointer">
                        <i class="fa-brands fa-yelp"></i>
                    </div>
                    <div class="cursor-pointer">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="cursor-pointer">
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                    <div class="cursor-pointer">
                        <i class="fa-solid fa-envelope-circle-check"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
