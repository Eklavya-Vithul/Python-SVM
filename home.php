<!DOCTYPE html>
<html>
    <title>
        MC Home
    </title>

    <body class="">
        <link href="shared/styles.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
        <?php 
            require("shared/functions.php");
            renderNavbar("Home");
        ?>
    <!--
    <div class="d-flex justify-content-center">
        <h2 class="pageTitle ">Home</h2>
    </div>
    -->

    <div class="bg-dark text-white row">
        <div class="col-0 col-lg-5 d-none d-xl-block d-lg-block">
            <img src="images/Rectangle_abs.svg" alt="">
        </div>
        <div class="col-12 col-lg-7 px-4 d-flex align-items-center">
            <div>
                <h2 class="">
                    Lorem Ipsum
                </h2>
                <h4 class="">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                    qui officia deserunt mollit anim id est laborum.
                </h4>
            </div>
            
        </div>
    </div>

        
    </body>
</html>