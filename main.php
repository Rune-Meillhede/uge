<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Multi Card Carousel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Custom Colors -->
    <link rel="stylesheet" href="colors.css">


</head>

<body>
    

    <main>
        <div class="container py-5">

            <h2 class="text-center mb-5">Kategorier</h2>

            <?php

            $cards = [
                [
                    "title" => "Card 1",
                    "text"  => "Dette er card nummer 1",
                    "image" => "https://picsum.photos/id/1011/500/300"
                ],
                [
                    "title" => "Card 2",
                    "text"  => "Dette er card nummer 2",
                    "image" => "https://picsum.photos/id/1015/500/300"
                ],
                [
                    "title" => "Card 3",
                    "text"  => "Dette er card nummer 3",
                    "image" => "https://picsum.photos/id/1016/500/300"
                ],
                [
                    "title" => "Card 4",
                    "text"  => "Dette er card nummer 4",
                    "image" => "https://picsum.photos/id/1020/500/300"
                ],
                [
                    "title" => "Card 5",
                    "text"  => "Dette er card nummer 5",
                    "image" => "https://picsum.photos/id/1024/500/300"
                ]
            ];

            ?>

            <!-- Swiper Carousel -->
            <div class="swiper cardSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($cards as $card): ?>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <img src="<?= $card['image']; ?>" class="card-img-top" alt="<?= $card['title']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $card['title']; ?></h5>
                                    <p class="card-text"><?= $card['text']; ?></p>
                                    <a href="#" class="btn btn-primary">Læs mere</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper('.cardSwiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
            });
        </script>
    </main>
</body>

</html>
</main>

</body>

</html>