<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>number</td>
        </tr>

        <?php
        include 'db.php';

        $sql = "select * from form";

        $result = $conn->query($sql);
         
            while ($row = $result->fetch_assoc()) {
               ?>
               <tr>
               <td><?php echo $row['name']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['number']?></td>
               <td><a href='edit.php?id=<?php echo $row['id']?>'>Edit</a>
                <a href='delete.php?id=<?php echo $row['id']?>'>Delete</a></td>
                </tr>
               </tr>
               <?php
            }
      
        ?>

    </table>
</body>
</html>