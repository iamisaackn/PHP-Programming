<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $favcolor = "red";

    switch($favcolor) {
        case "red":
            echo "Your favourite color id red!";
            break;
        case "blue":
            echo "Your favourite color is blue";
            break;
        case "green":
            echo "Your favourite color is green!";
            break;
        default:
        echo "Your favourite color is neither red, blue nor green!";
    }
    ?>
</body>
</html>
