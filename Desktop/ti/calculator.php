<!DOCTYPE html>
<html> 
<head> 
    <title>Tabele</title>
    <link rel="stylesheet" href="formularz.css" />
</head> 
<body>
    <h2><a href="index.php">return &#8592</a></h2>
    <?php 
        $result = "";
        class calculator
        {
            var $a;
            var $b;

            function dzialanie($operator)
            {
                switch($operator)
                {   case '+':
                    return $this->a + $this->b;
                    break;
        
                    case '-':
                    return $this->a - $this->b;
                    break;
        
                    case '*':
                    return $this->a * $this->b;
                    break;
        
                    case '/':
                    return $this->a / $this->b;
                    break;

                    default:
                    return "Nie wybrano działania.";
                }   
            }
            function wynik($a, $b, $c)
            {
                $this->a = $a;
                $this->b = $b;
                return $this->dzialanie($c);
            }
        }
        
        $cal = new calculator();
        if(isset($_POST['submit']))
        {   
            $result = $cal->wynik($_POST['n1'],$_POST['n2'],$_POST['op']);
        }
    ?>

    <form method="post">
    <table ALIGN = CENTER>
        <tr>
            <td>Podaj pierwszą liczbę</td>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td>Podaj drugą liczbę</td>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td>Wybierz działanie</td>
            <td><select name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Oblicz"></td>
        </tr>
        <tr>
            <td><?php echo "Wynik wynosi:  $result"; ?></td>
        </tr>
    </table>
    </form>

    <h2><a href="calculator.php">refresh &#8634</a></h2>
</body> 
</html>
