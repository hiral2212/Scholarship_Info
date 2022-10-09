<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- iconify  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: black;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            border-spacing: 0;
            padding: 0.7rem 0;
        }

        th {
            background-color: #003975;
            color: white;
        }
    </style>
</head>



<body>
    <section class="govtinfo">
        <div class="container-fluid m-0 p-0">
            <nav class="navbar navbar-expand-lg fs-5" style="background-color: #cfe789">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="" style="color: white;">Home</a>
                            <a class="nav-link" href="" style="color: white;">Authenticate user</a>
                            <a class="nav-link" href="" style="color: white;">Authenticate Scholarship</a>
                            <a class="nav-link" href="" style="color: white;">Add Scholarships</a>
                            <a href="" class="nav-link" style="color: white;"> Login : welcome user</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="headertop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
                    <h1 class="text-center" style="color:#7ca51d;">ScholarshipInfo Portal</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <table>
                <tr>
                    <th>Sr No.</th>
                    <th>Email</th>
                    <th>Portal name</th>
                    <th>URL</th>
                    <th>Approve</th>
                    <th>Delete</th>
                </tr>
                <?php
                include('database/include.php');

                $sql = "SELECT * FROM `special_user` WHERE `status` = 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $i++;
                        echo '   <tr>
        <td>' . $i . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['portal_name'] . '</td>
        <td><a href=' . $row['portal_url'] . ' target="blank">' . $row['portal_url'] . '</a></td>
        <td><form method="post" action="approve.php"><input type="hidden" name="id" value=" ' . $id . '"><button class="btn btn-success" type = "submit" name = "approve" >
                <iconify-icon icon="dashicons:yes-alt" style="color: white;margin-top: 5px;" width="30"
                    height="30">
                </iconify-icon>
            </button></form></td>
        <td><form method="post" action="reject.php"><button class="btn btn-danger" name="reject" ><input type="hidden" name="id"  value=" ' . $row['id'] . '" >
                <iconify-icon icon="entypo:circle-with-cross" style="color: white;margin-top: 5px;"
                    width="30" height="30">
                </iconify-icon>
            </button></form></td>
    </tr>';
                    }
                }

                ?>
            </table>
        </div>
    </div>

    <section class="footerthird pt-2" style="background-color: #cfe789;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex">
                    <ul class="list-unstyled list-inline justify-content-center mx-auto">
                        <li class="list-inline-item">
                            <a href="#" target="_self">Copyright
                                Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_self">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_self">Terms and
                                Conditions</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_self">Disclaimer</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_self">Hyperlink
                                Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" target="_self">Site Map</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="footerfirst pt-3" style="background-color: black;color:white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 offset-xl-3 offset-lg-2 pb-1 pt-1">
                    <p class="text-center disclaimer">
                        This site is designed, developed with all copyrights.<br> Updated at 9th October 2022
                    </p>
                </div>
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 offset-xl-2 offset-lg-1 pb-2">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>