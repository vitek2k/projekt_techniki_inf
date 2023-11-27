<?php

    function polaczenie()
    {
        $servername = "localhost";
        $username = "s405750";
        $password = "bielaczycwojciech";
        $database = "s405750";

        $connection = mysqli_connect($servername, $username, $password) or die("Niemożliwe połączenie z bazą danych!");

        $db = mysqli_select_db($connection, "s405750") or die("Niemożliwe pobranie bazy!");
        if ($connection) {
            $db = mysqli_select_db($connection, "s405750")
            or die("Niemożliwe pobranie bazy");
        }
        return $connection;
    }

    function wyswietlanie()
    {
        $connection = polaczenie();
        //
        $sql = "SELECT * FROM browsers;";
    
        $result = mysqli_query($connection, $sql)
        or die("Nie można wykonać zapytania!");
    
        $cnt = 0;
        $content = "
            <table>
                <tr>
                    <TR><TH>ID</TH><TH>NAZWA</TH><TH>ROK WYDANIA<TH>SILNIK</TH><TH>UDZIAŁ NA RYNKU</TH></TH>
                </tr>";
    
        while ($res = mysqli_fetch_array($result)) {
            $cnt++;
    
            $content .= "<TR>
                               <TD>$cnt   </TD>
                               <TD>$res[2]</TD>
                               <TD>$res[1]</TD>
                               <TD>$res[3]</TD>
                               <TD><a href=\"" . $_SERVER['PHP_SELF'] . "?oper=3&usr=$res[0]\">Edytuj</a></TD>
                               <TD><a href=\"" . $_SERVER['PHP_SELF'] . "?oper=5&usr=$res[0]\">Usuń</a></TD>
                               </TR>";
        }
    
        $content .= "</table>";
        return $content;
    }


    function pobierz($usr) // Pobranie danych konkretnego usera o danym id
    {
        $res = null;
        if (!isset($usr)) {
            return $res;
        }
        $connection = polacz();
        //
        $sql = "SELECT * FROM browsers where id='$usr';";

        $result = mysqli_query($connection, $sql)
        or die("Nie można wykonać zapytania!");
        if (mysqli_num_rows($result) == 1) {
            $res = mysqli_fetch_array($result);
        }
        return $res;
    }

    function modyfikacja($sql) // 
    {
        $connection = polacz();
        if (mysqli_query($connection, $sql)) {
            $message = "Dane zostałyy zmodyfikowane";
        } else {
            $message = "Dane nie zostały zmodyfikowane, spróbuj ponownie!";
        }
        return $message;
    }
    
?>