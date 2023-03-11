<?php 
        //memanggil file conn.php yang berisi koneski ke database
        //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
        include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee</title>
</head>
<body>
    <h2 style="margin: 30px 0 30px 0;">TABLE EMPLOYEES</h2>
        <div>
            <table border=1px>
                <thead bgcolor=silver>
                    <tr>
                        <th> <p> employeeNumber</th>
                        <th>lastName</th>
                        <th>firstName</th>
                        <th>extension</th>
                        <th>email</th>
                        <th>officeCode</th>
                        <th>reportsTo</th>
                        <th>jobTitle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        //proses menampilkan data dari database:
                        //siapkan query SQL
                        $query = "SELECT * FROM employees";
                        $result = mysqli_query(connection(),$query);
                    ?>
                            
                    <?php while($data = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td> <?php echo $data['employeeNumber']; ?> </td>
                            <td> <?php echo $data['lastName']; ?> </td>
                            <td> <?php echo $data['firstName']; ?> </td>
                            <td> <?php echo $data['extension']; ?> </td>
                            <td> <?php echo $data['email']; ?> </td>
                            <td> <?php echo $data['officeCode']; ?> </td>
                            <td> <?php echo $data['reportsTo']; ?> </td>
                            <td> <?php echo $data['jobTitle']; ?> </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>    
        </main>
    </div>
</div>
</body>
</html>