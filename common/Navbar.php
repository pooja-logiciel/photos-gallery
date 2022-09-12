<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                <a class="nav-link" href="home.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="public.php?public=1">public</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="public.php?public=0">private</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="popular.php?most-popular= 1">Most Popular</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-outline-success" type="submit"><a href="logout.php">Log Out    </a><i class="fa fa-sign-out" aria-hidden="true"></i>
             </button>
            </form>
          </div>
      </div>
  </nav>
</body>
</html>