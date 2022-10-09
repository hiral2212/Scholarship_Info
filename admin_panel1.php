<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- iconify  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <style>
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
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i = 0;
	while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $i++;
		 echo'   <tr>
        <td>'.$i.'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['portal_name'].'</td>
        <td><a href='.$row['portal_url'].' target="blank">'.$row['portal_url'].'</a></td>
        <td><form method="post" action="approve.php"><input type="hidden" name="id" value=" '.$id .'"><button class="btn btn-success" type = "submit" name = "approve" >
                <iconify-icon icon="dashicons:yes-alt" style="color: white;margin-top: 5px;" width="30"
                    height="30">
                </iconify-icon>
            </button></form></td>
        <td><form method="post" action="reject.php"><button class="btn btn-danger" name="reject" ><input type="hidden" name="id"  value=" '.$row['id'] .'" >
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
</body>

</html>