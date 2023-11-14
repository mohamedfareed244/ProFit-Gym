<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details | Profit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/adminsidebar.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="../public/CSS/addclient.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
    #account-details {
        margin-bottom: 10%;
    }
</style>

<body>
    <?php require("partials/adminsidebar.php") ?>
    <div id="add-body" class="addbody">
        <div class="container">
            <h2 class="table-title">Memberships:</h2>
            <input type="text" id="searchBar" onkeyup="myFunction()" placeholder="Search for names..">

            <div id="tablediv">
                <table id="membershipsTable" class="view-table overflow-auto mh-10">
                    <hr>
                    <thead>
                        <tr>
                            <th scope="col">Package</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Start Date </th>
                            <th scope="col">End Date</th>
                            <th scope="col">Visits </th>
                            <th scope="col">Status </th>
                            <th scope="col">Freeze Duration </th>
                            <th scope="col">Freeze</th>
                            <th scope="col">Sales</th>
                            <th scope="col">pt</th>
                            <th scope="col">inbody</th>
                            <th scope="col">Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">2 Months offer</th>
                            <td>Mohamed fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-info">Freezed</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Mohamed Ahmed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Salwa fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td> fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Mohamed fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Wael Khalid</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Mohamed fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Mohamed fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-info">Freeze</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">6 Months offer</th>
                            <td>Mohamed fareed</td>
                            <td>02-09-2023</td>
                            <td>02-09-2023</td>
                            <td>30</td>
                            <td class="bg-danger">Expired</td>
                            <td>2 Weeks</td>
                            <td><button class="btn btn-freeze">Freeze</button></td>
                            <td>Mohamed fareed</td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                            <button class="btn" onclick="window.location.href='/ProFit-Gym/views/editclient.php'">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <hr>
            <h2 class="table-title">Classes: </h2>
            <div id="tablediv">
                <table class="view-table overflow-auto mh-10">
                    <thead>
                        <tr>
                            <th scope="col">Class Name</th>
                            <th scope="col"> Date </th>
                            <th scope="col">From</th>
                            <th scope="col">To </th>
                            <th scope="col">Status </th>
                            <th scope="col">Class Instructor </th>
                            <th scope="col">Fees </th>
                            <th scope="col">Paid </th>
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Yoga</td>
                            <td>09-09-2023</td>
                            <td>9:00pm</td>
                            <td>11:00pm</td>
                            <td class="bg-success text-white">Attended</td>
                            <td>Mohamed fareed</td>
                            <td>120</td>
                            <td class="bg-danger">Not paid </td>
                            <td>
                            <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <hr>
            <h2 class="table-title">Financials: </h2>
            <div id="tablediv">
                <table class="view-table overflow-auto mh-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Package Name </th>
                                <th scope="col"> Date </th>
                                <th scope="col">Amount </th>
                                <th scope="col">Paid </th>
                                <th scope="col">Remain </th>
                                <th scope="col">Due </th>
                                <th scope="col">Sales </th>
                                <th scope="col">Actions </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2 Months </td>
                                <td>09-09-2023</td>
                                <td>3000</td>
                                <td>2000</td>
                                <td>1000</td>
                                <td>01-10-2023</td>
                                <td>Mohamed fareed </td>
                                <td>
                                <button class="btn">Edit</button>
                                    <button class="btn btn-delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBar");
        filter = input.value.toUpperCase();
        table = document.getElementById("membershipsTable");
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

</html>