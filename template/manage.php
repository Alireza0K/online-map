<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- All Style Bootstrap or anything -->
    <link rel="icon" href="<?= site_url("assets/image/feather.svg")?>">
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
    .status-verified{
        min-width: 70px;
        background-color: #74df7c;
        padding: 5px 5px;
        text-align: center;
        border-radius: 0.4rem;
        color: #fff;
    }
    .status-unverified{
        min-width: 70px;
        background-color: #df7474;
        padding: 5px 5px;
        text-align: center;
        border-radius: 0.4rem;
        color: #fff;
    }
    iframe{
        width: 100%;
        height: 900px;
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
                        <a href="?status=1"><button type="button" class="btn btn-success">Active</button></a>
                        <a href="?status=0"><button type="button" class="btn btn-primary">Passive</button></a>
                    </div>
                    <a href="<?= site_url("index.php"); ?>"><div class="btn btn-light" ><span><img src="<?php echo site_url('/assets/image/home.svg'); ?>" alt=""></span></div></a>
                </div>

                <!-- Right content in header -->
                <div class="content-right  content-box">
                    <button class="btn btn-warning" id="sign-out">Sign out</button>
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
                            <th scope="col">Tool</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Showing All location -->
                            <?php foreach($get_locations as $location): ?>
                                <tr>
                                <th scope="row"><?= $location->Name ?></th>
                                <td><?= $location->Created_at ?></td>
                                <td><?= $location->Lat ?></td>
                                <td><?= $location->Lng ?></td>
                                <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary  Activate-location" data-location-id="<?= $location->ID ?>">Active</button>
                                    <button type="button" class="btn btn-secondary  Deactivate-location" data-location-id="<?= $location->ID ?>">Passive</button>
                                </div>
                                <button  class="btn btn-light locatedmap" data-location="<?= $location->ID ?>"  data-bs-toggle="modal" data-bs-target="#exampleModal">Locate</button>
                                </td>
                                <td><div id="Status-eye" class="status  Status-eye  <?= $location->Status ? "status-verified" : "status-unverified" ?>"><?= $location->Status ? "verified" : "unverified" ?></div></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage -->
        </div>
    <!-- Bootstrap container -->

    <!-- Modal -->
    <div class="modallll" >
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Located location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Map -->
                <iframe src="" frameborder="0" id="map-in-there"></iframe>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- All java script file  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo  site_url("assets/js/authentication.js")?>"></script>
    <script>
        //  Located map
        $(document).ready(function(){
            $(".locatedmap").click(function(){
                $("#map-in-there").attr("src" , '<?= BASE_URL ?>?location=' + $(this).attr("data-location"));
            });
            $(".Activate-location").click(function(e){
                const location_id = $(this).attr("data-location-id");
                $.ajax({
                    url : "process/ajaxhandler.php",
                    method : "post",
                    data : {
                        action : "active-location",
                        loc_id : location_id
                    },
                    success :function(response){                            
                        location.reload();
                    }
                });
            });
            $(".Deactivate-location").click(function(e){
                const location_id = $(this).attr("data-location-id");
                $.ajax({
                    url : "process/ajaxhandler.php",
                    method : "post",
                    data : {
                        action : "deactive-location",
                        loc_id : location_id
                    },
                    success :function(response){                            
                        location.reload();
                    }
                });
            });
        });
    </script>
</body>
</html>