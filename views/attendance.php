<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance | Admin</title>
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
    <?php require("../partials/adminsidebar.php") ?>
    <div id="add-body" class="addbody">
        <div class="container" style="margin-left:-4%;">
            <h2 class="table-title">Attendance:</h2>
            <div id="tablediv">
                <table class="table overflow-auto mh-10">
                    <thead>
                        <tr>
                            <th>Name:</th>
                            <th>Phone Number:</th>
                            <th>Email:</th>
                            <th>Job Title:</th>
                            <th>Attendance:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Karim Ayman</td>
                            <td>011111111</td>
                            <td>example@gmail.com</td>
                            <td>HR</td>
                            <td><input type="checkbox" id="att" name="att" value="att">
                                <label for="att"></label><br>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>