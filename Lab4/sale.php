<html>
    <head>
        <title>Product Update Results</title>
    </head>

    <body>
        <font size='5' color='blue'>Update Results for Table Products</font>
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
                $SQLcmd = "Update Products SET Numb = Numb-1 WHERE (Product_desc='" . $_POST["sale"] . "')";
                mysqli_query($connect, $SQLcmd);
                print 'The Query is ' . $SQLcmd;
            }
        ?>
        <br>
        <table>
            <tr>
                <th>Num</th>
                <th>Product</th>
                <th>Cost</th>
                <th>Weight</th>
                <th>Count</th>
            </tr>
            <?php 
            $products = mysqli_query($connect, "SELECT * from Products");
            mysqli_close($connect);
            while($product = mysqli_fetch_array($products)) { ?>
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