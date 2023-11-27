<!DOCTYPE html>
<html> 
<head> 
    <title>Tabele</title>
    <link rel="stylesheet" href="formularz.css" />
</head> 
<body>
    <h2><a href="index.php">return &#8592</a></h2>
    <h1>Przeglądarki na rynku</h1>
    <?php
    $servername = "localhost";
    $username = "s405750";
    $password = "bielaczycwojciech";
    $database = "s405750";

    $connection = mysqli_connect($servername, $username, $password) or die("Niemożliwe połączenie z bazą danych!");

    $db = mysqli_select_db($connection, "s405750") or die("Niemożliwe pobranie bazy!");

    $sql = "SELECT * FROM browsers;";

    $sql_result = mysqli_query($connection, $sql);
 
    echo "<TABLE BORDER=1>";
    echo "<TR><TH>ID</TH><TH>NAZWA</TH><TH>ROK WYDANIA<TH>SILNIK</TH><TH>UDZIAŁ NA RYNKU</TH></TH>";

    while ($row = mysqli_fetch_array($sql_result)) {
        $id = $row["id"];
        $nazwa = $row["nazwa"];
        $rok = $row["rok_wydania"];
        $silnik= $row["silnik"];
        $udzial = $row["udzial_na_rynku"];
        echo "<TR><TD>$id</TD><TD>$nazwa</TD><TD>$rok</TD><TD>$silnik</TD><TD>$udzial</TD></TR>";
        }
        
    echo "</TABLE>";

    mysqli_free_result($sql_result);
    mysqli_close($connection);

    echo '<hr/>';
    $baza = "/home/skibd23_AiR/s405750/public_html/test.php";
    require "$baza";
    ?>
</body> 
</html>

