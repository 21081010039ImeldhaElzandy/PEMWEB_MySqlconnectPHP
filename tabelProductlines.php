<?php 
    //memanggil file conn.php yang berisi koneski ke database
    //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productlines</title>
</head>
<body>
    <h2>TABLE PRODUCTLINES</h2>
        <div>
            <table border=1px>
                <thead bgcolor=silver>
                    <tr>
                        <th> <p> productLine</th>
                        <th>textDescription</th>
                        <th>htmlDescription</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        //proses menampilkan data dari database:
                        //siapkan query SQL
                        $query = "SELECT * FROM productlines";
                        $result = mysqli_query(connection(),$query);
                    ?>
                            
                    <?php while($data = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td> <?php echo $data['productLine']; ?> </td>
                            <td> <?php echo $data['textDescription']; ?> </td>
                            <td> <?php echo $data['htmlDescription']; ?> </td>
                            <td> <?php echo $data['image']; ?> </td>
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