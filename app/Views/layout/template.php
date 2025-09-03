<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,165.3C672,192,768,224,864,224C960,224,1056,192,1152,192C1248,192,1344,224,1392,240L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

    <section id="contact">

        <div class="container">
            <div class="col">
                <div class="row">
                    <center>
                        <h2>Follow Me</h2>
                    </center>

                    <center>
                        <div class="row mt-3">
                            <div class="card ml-4 text-white text-center" style="width: 18rem;">
                                <div class="card-header bg-danger display-4 pt-4 pb-4">
                                    <i class="bi bi-instagram"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-danger">INSTAGRAM</h5>
                                    <a href="https://www.instagram.com/tunashondasukabumi" class="btn btn-danger">Follow</a>
                                </div>
                            </div>

                            <div class="card ml-4 text-white text-center" style="width: 18rem;">
                                <div class="card-header bg-primary display-4 pt-4 pb-4">
                                    <i class="bi bi-facebook"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-primary">FACEBOOK</h5>
                                    <a href="https://www.facebook.com/tunashondasukabumi" class="btn btn-primary">Follow</a>
                                </div>
                            </div>

                            <div class="card ml-4 text-white text-center" style="width: 18rem;">
                                <div class="card-header bg-info display-4 pt-4 pb-4">

                                    <i class="bi bi-twitter"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-info">TWITTER</h5>
                                    <a href="https://www.twitter.com/tunashondasukabumi" class="btn btn-info">Follow</a>
                                </div>
                            </div>
                    </center>
                </div>

            </div>
        </div>
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#dc3545" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,101.3C384,107,480,117,576,144C672,171,768,213,864,197.3C960,181,1056,107,1152,90.7C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <footer class="bg-danger text-white text-center pb-5">
        <p><a class="text-white fw-bold">created by tim Faris Andika Putra</a></p>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="js"></script>

</body>

</html>