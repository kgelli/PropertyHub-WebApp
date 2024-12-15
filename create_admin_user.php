<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin Table PHP Script</title>
</head>

<body>
    <?php
    require("db.php");

    $sql = "CREATE TABLE admin_data(
        admin_id int(6) unsigned auto_increment primary key,
        admin_name varchar(30) not null,
        admin_user_id varchar(20) not null,
        admin_email varchar(30) not null,
        admin_password varchar(30) not null
    );";

    if ($conn->query($sql) === TRUE) {
        echo "Table admin created";
    } else {
        echo "Table admin already exists";
    }

    // Insert default admin account
    $insert_admin = "INSERT INTO admin_data (admin_name, admin_user_id, admin_email, admin_password) 
                    VALUES ('Admin', 'admin', 'admin@nebulanest.com', 'admin')";

    if ($conn->query($insert_admin) === TRUE) {
        echo "<br>Default admin account created";
    } else {
        echo "<br>Default admin account already exists";
    }

    $conn->close();
    ?>
    <div>
        <a href="index.php"><input type="button" id="btn1" value="Home"></a>
    </div>
</body>

</html>