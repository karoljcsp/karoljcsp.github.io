<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

require_once "conexion/config.php";

$username = $password = "";
$username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Ingrese el usuario";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Ingrese la contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            header("location: welcome.php");
                        } else {
                            $password_err = "La contraseña no es correcta";
                        }
                    }
                } else {
                    $username_err = "N se encontó cuenta con ese usuario";
                }
            } else {
                echo "Intente de nuevo más tarde";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="assets/img/smn.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            margin-top: 5%;
        }

        .wrapper {
            width: 400px;
            padding: 20px;
            border: 3px solid black;
            margin: 3%;
            background-color: white !important;
        }

        .container{
            border: 3px solid black;
            width: 550px;
            background-image: linear-gradient(to bottom right, lightblue, blue);
        }
        h1{
            color: blue; 
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>

<body>
    <center>
        <div class="container" >
            <div class="wrapper">
                <h1>Inicio de Sesión</h1>
                <br>
                <p>Ingrese sus credenciales de acceso.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Usuario</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Iniciar">
                    </div>
                    <p>¿No tiene una cuenta? <a href="register.php">Regístrese</a>.</p>
                </form>
            </div>
        </div>
    </center>
</body>

</html>