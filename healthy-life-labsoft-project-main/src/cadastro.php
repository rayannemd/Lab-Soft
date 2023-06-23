<?php
require_once "conexoeshealthlife/conexaobd.php";
include "conexoeshealthlife/listarbd.php";

$username = $pasword = "";
$username_err = $pasword_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor prencha o campo";
    }elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "O usuário pode conter apenas letras, números e underline";
    }else {
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Usuário já existente";
                }else {
                    $username = trim($_POST["username"]);
                }
            }else {
                echo "Opa!! Algo de errado não está certo";
            }
            mysqli_stmt_close($stmt);
        }
    }

    if (empty(trim($_POST["pasword"]))) {
        $pasword_err = "Por favor digite uma senha!";
    }elseif (strlen(trim($_POST["pasword"])) < 6) {
        $pasword_err = "A senha deve ter pelo menos 6 caracteres";
    }else {
        $pasword = trim($_POST["pasword"]);
    }
    
    if (empty($username_err) && empty($pasword_err)) {
        $sql = "INSERT INTO users (username, pasword) VALUES (?,?)";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            mysqli_stmt_bind_param($stmt,"ss", $param_username, $param_pasword);

            $param_username = $username;
            $param_password = password_hash($pasword, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            }else {
                echo "Oops! Algo de errado.. tente novamente." ;
            }

            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($connection);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Kurale&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lao+Muang+Khong&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Marmelad&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/global.css" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Cadastro</title>
    </head>
    <body>
    <form action="conexoeshealthlife/salvarlogin.php" method="post" class="form-control">
        <div class="v79_81"><div class="v79_82"></div><div class="v79_83"></div><div class="v79_84"></div>
        <div class="v79_94"></div>
        <div class="v79_92"></div>
        <div class="v79_88">
        <div class="v79_89"><div class="v79_90"></div><div class="v79_91"></div></div></div>
        <div class="v81_124"></div>
        <span class="v79_95">Welcome to Health Life</span><div class="v79_96"></div>

            <!-- Inputs -->
            <input type="text" name="username" class="v79_97" placeholder="Username" required maxlength="12"></div>
            <input type="text" name="pasword" class="v79_99" placeholder="********" required maxlength="8">
           
            <!-- Botões -->
            <input type="submit" class="v79_105"/>
            <a href="login.php" class="v114_53">LOGAR-SE</a>
        </div>
            
            <!-- Background -->
            <div class="v79_98"></div>
            <div class="v81_125"></div>
            <div class="v81_126"></div><div class="v81_128"></div><div class="v81_127"></div><div class="v81_129">

        </div><div class="v81_133">
        </div><div class="v81_131"></div><div class="v81_132"></div>
</form>

</body>
</html>