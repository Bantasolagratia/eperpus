<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Perpus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../css/app.css" rel="stylesheet">
  
</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header class="sticky-top navbar-expand-lg">
      <div class="netflixLogo">
        <a id="logo" href="/"><img src="../image/logo.png" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
       <div class="search">
        <input type="search" id="search" class="form-control" placeholder="Search" >
        <button type="SUBMIT" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
      </nav>
      <nav class="sub-nav">
        <a href="{{ url('/help') }}">Bantuan</a>
       
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="{{ url('/login') }}">Masuk</a>        

      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
        @yield('contents')
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 2021-2022 Thinksmart Bra Jendra, CV.</p>
      <p>Intern &work 2021-2022</p>
    </footer>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</html>