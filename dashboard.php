<?php session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
    <script src="./js/chart-js-config.js"></script>
    <title>TechBin</title>
    <script>
        function calc(){
            document.getElementById("redeem").disabled = false;
            var n=document.getElementById("inputAmount").value;
            var x=document.getElementById("pointeq");
            x.value=(n*10000);
            if(x.value> <?php echo $_SESSION['points']; ?>){
                document.getElementById("redeem").disabled = true;
            }
        }
    </script>
</head>
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.php" class="spur-logo"><i class="fas fa-bolt"></i> <span>TechBin</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="dashboard.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="https://github.com/vamsee-cmd/techbin" target="_blank" class="dash-nav-dropdown-item">GitHub</a>
                        <a href="https://www.linkedin.com/in/vamshi-embadi/" target="_blank" class="dash-nav-dropdown-item">LinkedIn</a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <div class="tools">
                    <a href="https://github.com/vamsee-cmd/Techbin" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center">
                    <h6 class="dash-title">Reward Points:</h6></div>
                    <div class="d-flex justify-content-center">
                    <h1 class="dash-title"><b id="points"><?php echo $_SESSION['points']; ?></b></h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row mx-md-n5 span2">
                            <div class="col px-md-5"><div class="border bg-light">
                            <button class="btn btn-primary btn-block btn-xl text-uppercase" id="accesscamera" data-toggle="modal" data-target="#photoModal" style="border-radius: 5%;">Dispose<br>waste</button></div></div>
                            <div class="col px-md-5"><div class="border bg-light">
                            <Button class="btn btn-danger btn-block btn-xl text-uppercase"  data-toggle="modal" data-target="#basicExampleModal" style="border-radius: 5%;">Redeem points</Button></div></div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redeem reward points</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group row justify-content-start d-inline-flex p-2">
    <label for="amount" class="col-sm-2 col-form-label">Enter Amount</label>
    <div class="col-sm-10">
      <input type="text" onkeyup="calc()" class="form-control" id="inputAmount">
    </div>
    
    <label for="equals to " class="col-sm-2 col-form-label">equals to</label>
    <div class="col-sm-10 justify-content-end">
      <input type="text" readonly class="form-control" name="rpoint" id="pointeq">
    </div>
  </div>
      <div class="form-group row">
    <label for="Account number" class="col-sm-2 col-form-label">Account number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group row">
    <label for="confirm account number" class="col-sm-2 col-form-label">confirm Acc number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group row">
    <label for="IFSC code" class="col-sm-2 col-form-label">IFSC code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="redeem" class="btn btn-success">Redeem</button>
      </div>
    </div>
  </div>
</div>
    <!--Modal-->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Capture Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div id="my_camera" class="d-block mx-auto rounded overflow-hidden"></div>
                    </div>
                    <div id="results" class="d-none"></div>
                    <form method="post" id="photoForm">
                        <input type="hidden" id="photoStore" name="photoStore" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mx-auto text-white" id="takephoto">Capture Photo</button>
                    <button type="button" class="btn btn-warning mx-auto text-white d-none" id="retakephoto">Retake</button>
                    <button type="submit" class="btn btn-warning mx-auto text-white d-none" id="uploadphoto" form="photoForm">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/spur.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="./plugin/sweetalert/sweetalert.min.js"></script>
    <script src="./plugin/webcamjs/webcam.min.js"></script>
    <script src="main.js"></script>
    
</body>
</html>