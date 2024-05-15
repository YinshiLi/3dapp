<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'></script>
    <link rel="stylesheet" href="../application/css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <title>Coca Cola 3D App template</title>

    <script type="text/javascript">
        // JavaScript Document
        var counter = 0;

        function swap(selected) {
            // First don't display all div id contents
            document.getElementById('home').style.display = 'none';
            document.getElementById('coke').style.display = 'none';
            document.getElementById('sprite').style.display = 'none';
            document.getElementById('pepper').style.display = 'none';

            // Then display the selected div id contents
            document.getElementById(selected).style.display = 'block';
        }

        function changeLook() {
            counter += 1;
            switch (counter) {
                case 1:
                    document.getElementById('theme').style.backgroundColor = 'lightblue';
                    break;
                case 2:
                    document.getElementById('theme').style.backgroundColor = '#FF66oo';
                    break;
                case 3:
                    document.getElementById('theme').style.backgroundColor = 'coral';
                    break;
                case 4:
                    counter = 0;
                    document.getElementById('theme').style.backgroundColor = 'lightgrey';
                    break;
            }
        }

        function changeBack() {
            document.getElementById('theme').style.backgroundColor = '#FFFFFF';
        }


        function spin() {
            var x3dElement = document.getElementById('x3d-coke');
            var viewpoint = x3dElement.getElementsByTagName('Viewpoint')[0];
            console.log(viewpoint);
        }

    </script>
</head>
<body id="theme">

<nav class="navbar navbar-expand-sm navbar_coca_cola">
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('home')">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                       title="About Web 3D Applications"
                       data-content="3D Apps is a final year and postgraduate module ...">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Drinks
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:swap('coke')">Coca Cola</a>
                        <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
                        <a class="dropdown-item" href="javascript:swap('pepper')">Dr Pepper</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main body -->

<div class="container main_contents">

    <div id="main_3d_image">
        <div id="main_text" class="col-xs-12 col-sm-4">
            <div id="title_home"></div>
            <div id="subTitle_home"></div>
            <div id="description_home"></div>
        </div>
    </div>

    <div class="row"> <!-- Main_3D Image or Carousel -->
        <div class="col-xs-12 col-sm-12" style="background-color: red;">
            <!-- The background image (or you could use a Bootstrap Carousel) goes here -->
        </div>
    </div>

    <!-- Home page block element -->
    <div id="home" class="container-fluid main-contents">
        <div class="row">
            <!-- Coca Cola Column -->
            <div class="col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coke.jpg"
                             alt="Coca Cola">
                    </a>
                    <div class="card-body">
                        <div id="title_left" class="card-title homeText"></div>
                        <div id="subTitle_left" class="card-subtitle homeText"></div>
                        <div id="description_left" class="card-text homeText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out
                            more ...</a>
                    </div>
                </div>
            </div>

            <!-- Sprite Column -->
            <div class="col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.jpg" alt="Sprite">
                    </a>
                    <div class="card-body">
                        <div id="title_centre" class="card-title homeText"></div>
                        <div id="subTitle_centre" class="card-subtitle homeText"></div>
                        <div id="description_centre" class="card-text homeText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more
                            ...</a>
                    </div>
                </div>
            </div>

            <!-- Dr Pepper Column -->
            <div class="col-sm-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/pepper.jpg"
                             alt="Dr Pepper">
                    </a>
                    <div class="card-body">
                        <div id="title_right" class="card-title homeText"></div>
                        <div id="subTitle_right" class="card-subtitle homeText"></div>
                        <div id="description_right" class="card-text homeText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out
                            more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End home page -->

    <!-- Coke page block element -->
    <div id="coke" class="container-fluid main_contents" style="display: none;">
        <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class="col-sm-10">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('pepper')">Pepper</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div class="model3D">
                            <x3d id="x3d-coke">
                                <scene>
                                    <inline url="../application/assets/x3d/coke_can.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <a type="button" class="btn btn-primary btn-responsive camera-font" onclick="spin()">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                <div id="gallery_coke"></div>
            </div>
        </div>

        <div class="row">
            <!-- Coca Cola Column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-title drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out
                            more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End coke page -->

    <!-- Sprite page block element -->
    <div id="sprite" class="container-fluid main_contents" style="display: none;">
        <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class="col-sm-10">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('coke')">Coke</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:swap('sprite')">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('pepper')">Pepper</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline url="../application/assets/x3d/sprite_can.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div id="gallery_sprite"></div>
            </div>
        </div>

        <div class="row">
            <!-- Coca Cola Column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-title drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more
                            ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Sprite page -->

    <!-- Pepper page block element -->
    <div id="pepper" class="container-fluid main_contents" style="display: none;">
        <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class="col-sm-10">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('coke')">Coke</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript:swap('pepper')">Pepper</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline url="../application/assets/x3d/pepper_can.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                        <a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div id="gallery_pepper"></div>
            </div>
        </div>

        <!-- Row to hold 1 card to hold the coca cola descriptive text, etc. -->
        <div class="row">
            <!-- Coca Cola Column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-title drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out
                            more ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Pepper page -->
</div>

<nav class="navbar navbar-expand-sm footer">
    <div class="container">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline"></span>
                &copy
                <span> Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a
                        href="javascript:changeBack()">Reset</a> </span>
            </p>
        </div>
        <div class="navbar-text social">
            <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
            <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
            <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
            <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="../application/js/gallery.js"></script>
<script src="../application/js/custom.js"></script>
<script src="../application/js/getData.js"></script>


</body>

<link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
</html>