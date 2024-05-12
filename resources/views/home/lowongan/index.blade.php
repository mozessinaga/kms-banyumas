<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS Banyumas - Lowongan Tersedia</title>
    <style>
        .wrapper-img-banner {
            max-width: 100%;
            max-height: 600px;
        }

        .img-banner {
            width: 100%;
        }

        /* Animasi fadeIn */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .justified-text {
            text-align: justify;
        }

        .service-box {
            border: 1px solid #000000;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <header>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="wrapper-img-banner">
                        <img src="/img/banner8.png" class="img-banner fade-in" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-img-banner">
                        <img src="/img/banner9.jpg" class="img-banner fade-in" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="wrapper-img-banner">
                        <img src="/img/banner10.jpg" class="img-banner fade-in" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <div class="text-dark text-center fade-in">
                <h2 class="fade-in mb-2">Lowongan yang Tersedia</h2>
            </div>
            <div class="text-dark text-center fade-in">
                <p class="fade-in mb-5">____________________________________________________________</p>
            </div>

            <div class="row">

                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-md-3 my-3 fade-in">
                        <div class="card shadow-sm">
                            <div class="wrapper-card-blog">
                                <img src="/img/logo2.jpeg" class="img-card-blog" alt="">
                            </div>
                            <div class="text-center p-3">
                                <a href="" class="text-decoration-none">
                                    <h5>Lowongan Pabrik</h5>
                                </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor


            </div>
    </main>
</body>

</html>
