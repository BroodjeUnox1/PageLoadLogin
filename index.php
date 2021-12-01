<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
  <style type="text/css">
      tr:nth-child(even) {background: #dee2e6}
tr:nth-child(1){background: #4f5559}
.results::-webkit-scrollbar {
  display: none;
}
  </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12 p-0"><?php include("./navbar.php");?></div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12"><?php include("./banner.php");?></div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <?php include("./content.php")?>
            </div>
        </div>
    </section>
    <section class="container-fluid px-0 fixed-bottom">
        <div class="row">
          <div class="col p-0"><?php include("footer.php");?></div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>