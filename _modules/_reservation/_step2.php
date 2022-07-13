<?php
$data['room'] = $_POST['room'];
$data['startDate'] = $_POST['startDate'];
$data['endDate'] = $_POST['endDate'];
$return = request('reservation/query', 'POST', $data);

$data['id'] = $_POST['room'];
$returnRoom = request('rooms/view', 'POST', $data);

$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['phone'] = $_POST['phone'];
$returnAdd = request('reservation/add', 'POST', $data);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Step 1</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular?styles=16710" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- custom -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= URL ?>_include/css/index.css">
</head>

<body class="about-us">

    <!-- hero -->
    <section class="sub-hero">

        <div class="sub-hero-wrap position-relative d-flex align-items-center justify-content-center">
            <div class="position-absolute overlay top-0 start-0 w-100 h-100"></div>
            <img class="position-absolute top-0 start-0 w-100 h-100 o-fit" src="<?= URL ?>_include/img/usedom-die-sonneninsel-der-ostsee.jpg" alt="">
            <h2 class="position-relative text-white display-2">Rezarvasyon Yap</h2>
        </div>
    </section>

    <div class="container">
        <form action="<?= URL ?>reservation/step2" method="POST">
            <input type="hidden" name="room" value="<?= $_POST['room'] ?>">
            <input type="hidden" name="startDate" value="<?= $_POST['startDate'] ?>">
            <input type="hidden" name="endDate" value="<?= $_POST['endDate'] ?>">
            <div class="container">
                <div class="row">
                    <?php if ($returnAdd->status) { ?>
                        <div class="col-12">
                            <h1>Rezarvasyonunuz başarılı bir şekilde alınmıştır. Teşekkürler</h1><br>
                            <h5>
                                <?php
                                if ($returnRoom->status) {
                                ?>
                                    <b>Oda:</b> <?= $returnRoom->data->name; ?> <br>
                                    <b>Giriş Tarihi:</b> <?= $_POST['startDate']; ?> <br>
                                    <b>Çıkış Tarihi:</b> <?= $_POST['startDate']; ?> <br>
                                    <b>Ad Soyad:</b> <?= $_POST['name']; ?> <br>
                                    <b>Telefon:</b> <?= $_POST['phone']; ?> <br>
                                    <b>E-mail:</b> <?= $_POST['email']; ?>

                                <?php } ?>
                            </h5>
                        </div>
                    <?php } else { ?>
                        <div class="col-12">
                            <h1><?= $returnAdd->message ?></h1><br>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </form>

    </div>





    <!-- Footer -->
    <footer></footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= URL ?>_include/js/index.js"></script>
</body>

</html>