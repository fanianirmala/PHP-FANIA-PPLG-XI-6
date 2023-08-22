<?php
    $hh;
    $mm;
    $ss;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data waktu setelah ditambahkan 1 detik</title>
</head>
<body>
    <h1>Data waktu setelah ditambahkan 1 detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>hh</td>
                <td></td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>mm</td>
                <td></td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>ss</td>
                <td></td>
                <td><input type="number" name="ss"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
    <br>

    <?php
        if(isset($_POST['submit'])){
            $hh = $_POST['hh'];
            $mm = $_POST['mm'];
            $ss = $_POST['ss'];

            //proses
            $ss = $ss + 1;

            //output
            if ($ss >= 60){
                $mm = $mm + 1;
                $ss = 00;

                if ($mm >=60){
                    $hh = $hh + 1;
                    $mm = 00;
                    $ss = 00;

                    if ($hh >=24){
                        $hh = 00;
                        $mm = 00;
                        $ss = 00;
                    }
                }

                   
            }
            else {
                $ss = $ss;
            }

            echo $hh . ".";
            echo $mm . ".";
            echo $ss;
        }


    ?>

</body>
</html>