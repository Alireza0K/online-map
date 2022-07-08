<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <!-- All Style Bootstrap or anything -->
    <link rel="icon" href="<?= site_url("assets/image/user.svg")?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    .box-for-login{
        background-color: #4D4C7D;
        padding: 15px 0px;
        margin: 20px 0px;
        border-radius: 0.5rem;
        text-align: center;
    }
    .form-label{
        color: #fff;
    }
</style>
<body>
    
    <!-- Login Form -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <!-- Box for Login form -->
            <div class="col-5  box-for-login">
                <!-- First input  for get Username -->
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <div class="d-flex justify-content-center">
                        <div class="col-6"><input type="text" class="form-control" id="Username" placeholder="Alireza-admin"></div>   
                    </div>
                </div>

                <!-- Second input  for get Password -->
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <div class="d-flex justify-content-center">
                        <div class="col-6"><input type="password" class="form-control" id="Password" placeholder="#fas!f51#da$@!b"></div>   
                    </div>
                </div>

                <button class="btn btn-light" id="authentication">Login</button>
            </div>
        </div>
    </div>
    <!-- Login Form -->

    <!-- All java script file  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo  site_url("assets/js/authentication.js")?>"></script>
</body>
</html>