
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    if (
        strlen($name) > 3
        && (strpos($email, '@') > 0 && strpos($email, '.') > 3)
        && (is_numeric($age))
    ) {
        echo "Accesso Riuscito";
        echo '<br> </br>';
        echo $name;
        echo '<br> </br>';
        echo $email;
        echo '<br> </br>';
        echo $age;
    } else {
        echo "Accesso Negato";
    }
    
    
    
        ?>