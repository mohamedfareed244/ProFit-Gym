<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--css/icons/boostrap/jquery/fonts/images start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/adminsidebar.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="../public/CSS/addclient.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--css/icons/boostrap/jquery/fonts/images start-->

    <title>Admin Dashboard</title>

</head>

<body>
    <?php include("partials/adminsidebar.php") ?>
    <div id="add-body" class="addbody">

        <div class="container">
            <h1 class="view-title">Coaches:</h1>
            <input type="text" id="searchBar" onkeyup="myFunction()" placeholder="Search for names..">
            <div id="tablediv">
                <table id="coachesTable" class="view-table overflow-auto mh-10">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Class</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>example@gmail.com</td>
                            <td>Body Attack</td>
                            <td>011111111</td>
                            <td>50000</td>
                            <td>New Cairo City</td>
                            <td>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>

                            <td>Mervat Mohammed</td>
                            <td>example@gmail.com</td>
                            <td>Yoga</td>
                            <td>011111111</td>
                            <td>50000</td>
                            <td>New Cairo City</td>
                            <td>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>

                            <td>Hannah Ahmed</td>
                            <td>example@gmail.com</td>
                            <td>Pilates</td>
                            <td>011111111</td>
                            <td>50000</td>
                            <td>New Cairo City</td>
                            <td>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            
      

        </div>
    </div>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchBar");
            filter = input.value.toUpperCase();
            table = document.getElementById("coachesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>