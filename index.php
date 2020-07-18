<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuyển sinh đại học thủy lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/cab277e3ef.js"></script>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/formQuestions.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/noidung.css">
  </head>

  <body>
    <div>
      <?php
      require("./public/header/index.php");
      ?>
      <div>
      <?php
        require("./public/slideshow/slideshow.php");
      ?>
        <div class="container"  >
          <div class="label"><h2 class="content">TUYỂN SINH</h2></div>
          <div class="row">
          <div class="hethongtuyensinh col-9">
            <?php
              require("./page/home/noidung/index.php");
            ?>
          </div>
          <div class="form-quetions col-3">
          <?php
            require("./page/home/formquestion/index.php");
          ?>

          </div>
        </div>
        </div>
      </div>
   <?php
    require("./public/footer/index.php");
   ?>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery.includeHTML.js"></script>

  </body>
</html>
