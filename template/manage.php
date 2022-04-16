<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- All Style Bootstrap or anything -->
    <link rel="icon" href="../assets/image/feather.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    .content-left{
        direction: ltr;
    }
    .content-right{
        float: right;
    }
    .content-box{
        display: inline-block;
    }
    .section{
        margin: 15px 0px;
        border-radius: 0.5rem;
        background-color: #3d7199;
        padding: 15px 20px;
    }
    .tb{
        background-color: #f5f5f5 !important;
        padding: 15px;
        border-radius: 0.5rem;
    }
</style>
<body>

    <!-- Bootstrap container -->
        <div class="container">
            <!-- header -->
            <div class="header-section  section">
                <!-- Left content in header -->
                <div class="content-left content-box">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Active</button>
                        <button type="button" class="btn btn-secondary">Passive</button>
                    </div>
                    <div class="btn btn-light" ><span><img src="../assets/image/home.svg" alt=""></span></div>
                </div>

                <!-- Right content in header -->
                <div class="content-right  content-box">
                    <button class="btn btn-warning">Sign out</button>
                </div>
            </div>
            <!-- header -->

            <!-- manage -->
            <div class="manage-section  section">
                <!-- table box -->
                <div class="tb">
                    <!-- table -->
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                            <th scope="col">Location Title</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Lat</th>
                            <th scope="col">Lng</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">Home</th>
                            <td>4.17.2022</td>
                            <td>25.312</td>
                            <td>53.215</td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary">Active</button>
                                <button type="button" class="btn btn-secondary">Passive</button>
                            </div>
                            <div class="btn btn-light">Locate</div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage -->
        </div>
    <!-- Bootstrap container -->

    <!-- All java script file  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>