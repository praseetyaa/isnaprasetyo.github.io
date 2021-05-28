<?php 

$serv = "localhost"; $db = "test"; $usr = "root"; $pwd = "";
$conn = mysqli_connect($serv, $usr, $pwd, $db);   

$theme = '';
$sql = 'SELECT theme from theme where id = 1 ';
$result = mysqli_query($conn, $sql);
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
   $theme=$row['theme'];
   
}


?>

<!doctype html>
<html lang="en" class="light">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark light">
    <meta name="theme-color" content="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/cek/<?php echo($theme) ?>.css" id="theme-link">
    <link rel="stylesheet" href="assets/cek/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand m-0" href="#">Navbar</a>
        <input type="text" class="form-control form-control-sm mx-3" placeholder="Search">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="header container my-3">
        <div class="card">
            <div class="card-body text-center"><h1 class="py-5">Header</h1></div>
        </div>
    </section>
    <section class="content container my-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <h5>Content</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <h5>Content</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <h5>Content</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dark-mode container my-3">
        <div class="heading">
            <h5>Theme Preferences</h5>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card img-radio <?php echo $theme=="light" ? 'active' : ''; ?>" id="light">
                    <div class="card-body p-0">
                        <img src="https://github.githubassets.com/images/modules/settings/color_modes/light_preview.svg" style="border-radius: .25rem .25rem 0 0; width: 100%" >
                    </div>
                    <div class="card-footer">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="light" name="theme" value="light" <?php echo $theme=="light" ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="light">
                            Default Light
                          </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card img-radio <?php echo $theme=="dark" ? 'active' : ''; ?>" id="dark">
                    <div class="card-body p-0">
                        <img src="https://github.githubassets.com/images/modules/settings/color_modes/dark_preview.svg" style="border-radius: .25rem .25rem 0 0; width: 100%" id="dark" class="img-radio">
                    </div>
                    <div class="card-footer">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="dark" name="theme" value="dark" <?php echo $theme=="dark" ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="dark">
                            Default Dark
                          </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card img-radio <?php echo $theme=="dimmed" ? 'active' : ''; ?>" id="dimmed">
                    <div class="card-body p-0">
                        <img src="https://github.githubassets.com/images/modules/settings/color_modes/dark_dimmed_preview.svg" style="border-radius: .25rem .25rem 0 0; width: 100%" id="dimmed" class="img-radio">
                    </div>
                    <div class="card-footer">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="dimmed" name="theme" value="dimmed" <?php echo $theme=="dimmed" ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="dimmed">
                            Dark Dimmed
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <form id="addUser" class="form-inline" method="POST" action="">
            <div class="form-group mb-2">
                <label for="name" class="sr-only">Name</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                       required autofocus>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="sr-only">Email</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                       required autofocus>
            </div>
            <button id="submitUser" type="button" class="btn btn-primary mb-2">Submit</button>
        </form>
    </section>
                
    <!-- <script src="assets/cek/javascript.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var html = document.querySelector('html');
        var radios = document.querySelectorAll('input');
        var theme = document.querySelector('#theme-link');

        // setThemeAutomatically();

        function setThemeAutomatically() {
          var current_theme;
          if (window.localStorage.getItem("theme") === null) { 
            window.localStorage.setItem("theme", '<?php echo($theme) ?>')
            current_theme = '<?php echo($theme) ?>';
          } else {
            current_theme = window.localStorage.getItem('theme');
          }
          html.removeAttribute("class");
          html.classList.add(current_theme);
          theme.href = "assets/cek/"+ current_theme +".css";
          
        }

        radios.forEach(function(radio) {
          radio.addEventListener('change', setThemeManually);
        });

        function setThemeManually() {
          var radio = document.getElementsByName("theme");
          for(var i = 0; i < radio.length; i++){
            if (radio[i].checked) {
              // console.log(radio[i].value)
              html.removeAttribute("class");
              html.classList.add(radio[i].value);
              theme.href = "assets/cek/"+ radio[i].value +".css";

              window.localStorage.setItem('theme', radio[i].value);
            }
          }
        }

        $(document).on('click', '.img-radio', function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            $('input[name=theme][value='+ id +']').prop('checked', true);
            $('.card.img-radio').removeClass('active');
            $(this).addClass('active');
            setThemeManually();
        })
    </script>
    <style type="text/css">
        .card.img-radio, .form-check-label{cursor: pointer;}
        .card.img-radio{border: 2px solid transparent;}
        .card.img-radio.active{border: 2px solid var(--bs-info);}
    </style>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
        apiKey: "AIzaSyCJqeyl0isI2GV9UBRDjzRXs4WeVh8XjHg",
        authDomain: "portfolio-2646d.firebaseapp.com",
        projectId: "portfolio-2646d",
        storageBucket: "portfolio-2646d.appspot.com",
        messagingSenderId: "771725706889",
        appId: "1:771725706889:web:30868dc84e88305a2ca858",
        measurementId: "G-EZXQWZJKR8"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    
        var database = firebase.database();

        var lastIndex = 0;
        // Add Data
        $('#submitUser').on('click', function () {
            var values = $("#addUser").serializeArray();
            var name = values[0].value;
            var email = values[1].value;
            var userID = lastIndex + 1;

            console.log(values);

            firebase.database().ref('Users/' + userID).set({
                name: name,
                email: email,
            });

            // Reassign lastID value
            lastIndex = userID;
            $("#addUser input").val("");
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>