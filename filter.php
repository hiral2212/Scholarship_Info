<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filter form</title>

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
        }

        .dataTable {
            margin: 0 auto;
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

        .col-md-3,
        .col-md-4 {
            margin: 1rem auto;
        }

        input {
            padding: 2px;
            border-radius: 2px;
        }

        select {
            padding: 2px;
            border-radius: 2px;
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
        <div class="filter border border-secondary p-3">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Search name: </label>
                    <input type="text" placeholder="Search.." name="search" class="form-control">
                </div>
                <div class="col-md-4 ">
                    <label for="">Category: </label>
                    <select name="category" id="" class="form-select" aria-label="Default select example">
                        <option value="General">General</option>
                        <option value="OBC">OBC</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Income: </label>
                    <select name="category" id="" class="form-select" aria-label="Default select example">
                        <option value="1,00,000 to 2,00,000">1,00,000 to 2,00,000</option>
                        <option value="2,00,000 to 3,50,000">2,00,000 to 4,00,000</option>
                        <option value="4,00,000 to 6,00,000">4,00,000 to 6,00,000</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="type1">
                        <input type="radio" name="type1" id="" class="ms-5">
                        <label for="">National</label>
                        <input type="radio" name="type1" id="" class="ms-5">
                        <label for="">International</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="type2">
                        <input type="radio" name="type2" id="" class="ms-5">
                        <label for="">Government</label>
                        <input type="radio" name="type2" id="" class="ms-5">
                        <label for="">Private</label>
                    </div>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-lg btn-primary mt-3">Find</button>
            </center>
        </div>
        <div class="dataTable mt-5">
            <div class="row">
                <table>
                    <tr>
                        <th>Scholarship Name</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Guidlines</th>
                        <th>FAQs</th>
                        <th>Apply link</th>
                    </tr>
                    <tr>
                        <td>xyz</td>
                        <td>xyz</td>
                        <td>xyz</td>
                        <td>xyz</td>
                        <td>xyz</td>
                        <td> <button type="submit" class="btn btn-primary">Apply</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br><br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>