<?php
include 'conexoeshealthlife/menu.php';
include 'conexoeshealthlife/listarbd.php';
include 'conexoeshealthlife/deletar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Listar dados</title>
</head>

<body>
    <div class="container col-md-6">
        <h1>Histórico de calculos</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Imc</th>
                    <th scope="col">Iac</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php while ($users = mysqli_fetch_assoc($listardados)) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $users['id']; ?></th>
                        <td><?php if ($users['username'] != null) echo $users['username']; ?></td>
                        <td><?php if ($users['imc'] != null)echo $users['imc']; ?></td>
                        <td><?php if ($users['iac'] != null)echo $users['iac']; ?></td>
                        <td>
                            <a href="conexoeshealthlife/deletar.php?id_users=<?php echo $users['id']; ?>" class="btn btn-danger"> Deletar </a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>