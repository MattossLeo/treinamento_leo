<html>
    <head>
        <meta lang="pt-br">
        <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
    <body>
    <section class="list_course">
        <div class="container">
            <div class="block-title">
                <div class="row align-items-center">
                    <div class="col" style="display: flex; align-items: center; justify-content: space-evenly; align-content: space-between;">
                        <img src="image/selo.svg" alt="Selo MEC">
                        <h3>Cursos reconhecidos pelo MEC pela Portaria nº 1.065, de 18 de outubro de 2018.</h3>
                </div>
            </div>
            <div class="row">
                <?php
                $i = 1;
                while ($i <= 12):
                ?>
                <div class="col-lg-3 col-md-6 col-card-course ">
                    <a href="#box-form" class="link-courses">
                        <div class="box-card-course" style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 59%), rgb(0 0 0 / 59%)), url('image/educação.png'); background-size: cover;" title="ADMINISTRAÇÃO">
                            <h3 class="card-title title-course-area">EDUCAÇÃO</h3>
                            <h5 class="card-title sub-title-course-area">207 cursos disponiveis </h5>
                            <div class="box-btn-course">
                                <span class="btn-course">Ver todos</span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    $i++;
                endwhile;
                ?>

            </div>
        </div>
    </section>
    </body>
</html>