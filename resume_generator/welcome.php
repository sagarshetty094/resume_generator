<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Resume Generator</title>
  </head>
  <body class="background">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Resume Generator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4 sks">
<h3><?php echo "Welcome ". $_SESSION['username']?> ..!Start Making Your Resume...</h3>
<hr>

</div>
<div class="container" id="cv-form">
        <h1 class="text-center my-3">Resume Generator</h1>
        

        <div class="row mt-5">
            <div class="col-md-6">
                <!-- first col -->
                <h3>Personal Information</h3>

                <div class="form-group">
                    <label for="namefield"> your Name</label>
                    <input type="text" id="nameField" placeholder="Enter here" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label for="contactfield"> your phone number</label>
                    <input type="text" id="contactField" placeholder="Enter here" class="form-control">
                </div>

                <!-- <div class="form-group mt-3">
                    <label for="specializationfield"> specialization</label>
                    <input type="text" id="specializationField" placeholder="Enter here" class="form-control">
                </div> -->

                <div class="form-group">
                    <label for="addressfield"> Address</label>
                    <textarea type="text" id="addressField" placeholderf="Enter here" class="form-control"
                        ></textarea>
                </div>

                <div class="form-group mt-3">
                    <label for="">select ur photo</label>
                    <input   id="imgField" type="file" class="form-control">
                </div>

                <p class="text-secoundary my-3">Important Links</p>

                <div class="form-group">
                    <label for="fbfield"> Facebook link</label>
                    <input type="text" id="fbField" placeholder="Enter here" class="form-control">
                </div>

                <div class="form-group">
                    <label for="instafield"> instagram Link</label>
                    <input type="text" id="instaField" placeholder="Enter here" class="form-control">
                </div>

                <div class="form-group">
                    <label for="linkedinfield"> your LinkedIn</label>
                    <input type="text" id="linkedinField" placeholder="Enter here" class="form-control">
                </div>

            </div>
            <div class="col-md-6">
                <!-- second col -->
                <h3>Professional Information</h3>

                <div class="form-group mt-2 ">
                    <label for="field"> objective</label>
                    <textarea id="objectiveField" type="text" placeholder="Enter here" class="form-control" rows="2"></textarea>
                </div>

                <div class="form-group mt-2 " id="we">
                    <label for=""> skills</label>
                    <textarea type="text"placeholder="Enter here" class="form-control weField" rows="3"></textarea>
                </div>
                <!--new text area  -->

                <div class="container text-center mt-2" id="weAddbutton">
                    <button onclick="addNeWWEfield()" class="btn btn-primary btn-sm"> Add</button>
                </div>

                <div class="form-group mt-2" id="aq">
                    <label for=""> Academic Qualification </label>
                    <textarea type="text" placeholder="Enter here" class="form-control aqField" rows="3"></textarea>
                </div>
                <!-- new text area -->

                <div class="container text-center mt-2" id="aqAddbutton">
                    <button onclick="addNeWAQfield()" class="btn btn-primary btn-sm"> Add</button>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3">
            <button onclick="generateCV()" class="btn btn-primary btn-lg">Generate CV </button>
        </div>

    </div>
    <!-- cv template -->

    <div class="container bg" id="cv-template">
        <div class="row">
            <div class="col-md-4 text-center py-5 ">
                <!-- first col -->
                <img id="imgTemplate" src="profile1.png" alt="" class="img-fluid myimg">

                <div class="container">
                    <p id="nameT1"> shetty</p>
                    <p id="addressT">Lorem, ipsum dolor sit amet con</p>
                    <p id="contactT">12553223</p>

                    <hr />
                    <p><a id="fbT" href="#">fb.com</a></p>
                    <p><a id="instaT" href="#">insta.com</a></p>
                    <p><a id="linkedT"  href="#">linkin.com</a></p>
                </div>
            </div>
            <div class="col-md-8 py-5">
                <!-- second col -->
                <h1 id="nameT2"  class="text-center" style="font-weight:700">shetty</h1>

                <!-- objective -->
                <div class="card mt-4 ">
                    <div class="card-header bg">
                        <h3> objective</h3>
                    </div>
                    <div class="card-body ">
                        <p id="objectiveT">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur neque debitis, dolores unde ullam harum? Explicabo perspiciatis, excepturi facilis nesciunt quo in, velit repudiandae eum obcaecati soluta eaque similique, ipsam cupiditate praesentium minus inventore deleniti autem.</p>
                    </div>
                </div>
                <!-- experience -->

                <div class="card mt-4 ">
                    <div class="card-header bg ">
                        <h3> skills</h3>
                    </div>
                    <div class="card-body">
                        <ul id="weT">
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, aperiam.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio!</li>
                        </ul>
                    </div>
                </div>

                <!-- acamdmic -->
                <div class="card mt-4 ">
                    <div class="card-header bg">
                        <h3> Academic Qualification</h3>
                    </div>
                    <div class="card-body">
                        <ul id="aqT">
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, aperiam.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio!</li>
                        </ul>
                    </div>
                </div>

                <div class="container mt-3 text-center">
                    <button id="download" onclick="printCV()" class="btn btn-primary btn-lg">
                        print cv
                    </button>
                </div>
                

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
