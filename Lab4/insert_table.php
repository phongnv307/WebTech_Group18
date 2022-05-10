<html>
    <head>
        <title>Insert Results</title>
    </head>

    <body>
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
                $SQLcmd = "INSERT INTO $table_name VALUES ('0','"
                    . $_POST['desc'] . "','"
                    . $_POST['cost'] . "','"
                    . $_POST['weight'] . "','"
                    . $_POST['numb'] . "')";
                if (mysqli_query($connect, $SQLcmd)) {
                    print 'The Query is ' . $SQLcmd;
                    print"<br>Insert to $mydb was successfull!";
                }
                mysqli_close($connect);
            }
        ?>
    </body>
</html>