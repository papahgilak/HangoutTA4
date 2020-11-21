<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title> <?php echo $judul; ?></title>

  </head>
  <body>
  	<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000000;" >
  <a class="navbar-brand" href="#" style="color: white;" >Hangout Finder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url();?>" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>about"style="color: white;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>cafel" style="color: white;">Cafe List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>finder"style="color: white;">Finder</a>
      </li>
    </ul>
  </div>
</nav>
