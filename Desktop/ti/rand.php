<!DOCTYPE html>
<html> 
<head> 
    <title>Random</title>
    <link rel="stylesheet" href="rand.css" />
</head> 
<body>
    <h2><a href="index.php">return &#8592</a></h2>
    <form action=" " method="post">
        <label>Ile liczb chcesz wylosować? (od 2 do 4)</label>
        <input type="text" name="number">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $number = (int) $_POST['number'];
        switch ($number){
            case 2:
                echo '<br>'.'Wygenerowane liczby z zakresu od 1 do 15:';
                echo '<hr/>';
                echo '<br>'. $a=mt_rand(1, 15);
                echo ' | ';
                echo $b=mt_rand(1, 15);
                echo '<hr/>';
                echo '<br>'.'Dodanie wylosowanych liczb:';
                $x = $b + $a;
                echo '<br>'. $x;
                echo '<hr/>';
                echo '<br>'.'Mnożenie wylosowanych liczb:';
                $y = $b * $a;
                echo '<br>'. $y;
                break;
            case 3:
                echo '<br>'.'Wygenerowane liczby z zakresu od 1 do 15:';
                echo '<hr/>';
                echo '<br>'. $a=mt_rand(1, 15);
                echo ' | ';
                echo $b=mt_rand(1, 15);
                echo ' | ';
                echo $c=mt_rand(1, 15);
                echo '<hr/>';
                echo '<br>'.'Dodanie wylosowanych liczb:';
                $x = $c + $b + $a;
                echo '<br>'. $x;
                echo '<hr/>';
                echo '<br>'.'Mnożenie wylosowanych liczb:';
                $y = $c * $b * $a;
                echo '<br>'. $y;
                break;
            case 4:
                echo '<br>'.'Wygenerowane liczby z zakresu od 1 do 15:';
                echo '<hr/>';
                echo '<br>'. $a=mt_rand(1, 15);
                echo ' | ';
                echo $b=mt_rand(1, 15);
                echo ' | ';
                echo $c=mt_rand(1, 15);
                echo ' | ';
                echo $d=mt_rand(1, 15);
                echo '<hr/>';
                echo '<br>'.'Dodanie wylosowanych liczb:';
                $x = $d + $c + $b + $a;
                echo '<br>'. $x;
                echo '<hr/>';
                echo '<br>'.'Mnożenie wylosowanych liczb:';
                $y = $d * $c * $b * $a;
                echo '<br>'. $y;
                break;
            default:
                echo '<br>'.'Podano złą liczbę! Spróbuj ponownie.';
        }
    }
    ?>
    <h2><a href="rand.php">refresh &#8634</a></h2>
</body> 
</html> 
   