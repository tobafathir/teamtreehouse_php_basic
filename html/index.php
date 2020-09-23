<?php   
    $nama="Toba Fathir A";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Threehouse <?php echo $nama; ?></title>
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body>

    <!-- class container -->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-3 border bg-black  p-0">
                <div class="d-flex flex-coloumn m-5 ">
                    <img class="d-flex position-abslolute  p-0" src="images/nike.png" alt="srigala" width="150px">
                </div>
                
                <div class="d-flex flex-coloumn m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $nama; ?></p>
                    </div>
                </div>
            </div>
            
            <!-- class content  -->
            <div class="content col-lg-9 border vh-100 p-0">
                <div class="d-flex flex-coloumn">
                    <p class="h2">My first page PHP</p>
                </div>
                
                <section class="pl-5">
                    <p class="h2">Unit</p>
                    <?php include "inc/units.php"; ?>                      
                    <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                </section>
                
                <section class="pl-5">
                    <p class="h2">String</p>
                    <?php include "inc/string.php"; ?>                      
                    <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                </section>
                
                <div class="d-flex flex-coloumn">
                
                </div>


                <div class="d-flex position-absolute fixed-bottom">
                    <p class="font-weight-normal mx-auto p-3">&copy; <?php echo $nama; ?></p>
                </div>
            </div>
            
        </div>
    </div>

    <script src="asset/js/jquery-3.5.1.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/rbootstap.min.js"></script>
    </body>
</html>