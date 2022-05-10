<html>
    <head>
        <title>Table Output</title>
    </head>

    <body>
        <font size='5' color='blue'>Products Data</font>
        <br>
        <?php
            $server = 'localhost';
            $user = 'root';
            $pass ='';
            $mydb = 'mydatabase';
            $table_name = 'Products';
            $connect = mysqli_connect($server, $user, $pass, $mydb);

            if (!$connect) {
                die ("Cannot connect to $server using $user");
            } else {
                $SQLcmd = "SELECT * from Products";
                $products = mysqli_query($connect, $SQLcmd);
                print 'The Query is ' . $SQLcmd;
                mysqli_close($connect);
            }
        ?>

        <table>
            <tr>
                <th>Num</th>
                <th>Product</th>
                <th>Cost</th>
                <th>Weight</th>
                <th>Count</th>
            </tr>
            <?php while($product = mysqli_fetch_array($products)) { ?>
            <tr>
                <td> <?= $product[0] ?> </td>
                <td><?= $product[1] ?></td>
                <td> <?= $product[2] ?> </td>
                <td><?= $product[3] ?></td>
                <td> <?= $product[4] ?> </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>

<style>
        table, th, td {
        border:1px solid black;
        }
</style>