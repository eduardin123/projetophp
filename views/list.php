
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php?action=create">Novo Aluno</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Idade</td>
            <td>Ações</td>
        </tr>

        <?php while($row = mysqli_fetch_assoc($alunos)){ ?>
            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['nome']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['idade']; ?> </td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $row ['id']; ?>">editar</a>
                    <a href="index.php?action=delete&id=<?php echo $row['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>