<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Orel i reshka</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Гра "Орел і Решка"</h1>
            <div class="flex dark-box">
                <form action="game.php" method="post">
                    <?php
                    // рахунок перемог для розблокування рівня
                    if (!isset($_POST["winner"])) {
                        $winner = 0;
                    } else {
                        $winner = $_POST["winner"];
                    }
                    ?>
                    <p class="level">
                        <input type="hidden" name="game" value="0">
                        <input type="hidden" name="win" value="0">
                        <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                        <button class="button" type="submit" name="level" value="easy"><p>Легкий</p></button>
                        <button class="button" type="submit" name="level" value="medium" 
                        <?php 
                        // розблокування рівня при виграші на попередньому
                        if ($winner == 0) {
                            echo "disabled";
                        }
                        ?> ><p>Середній</p></button>
                        <button class="button" type="submit" name="level" value="hard" 
                        <?php 
                        if ($winner != 2) {
                            echo "disabled";
                        }
                        ?> ><p>Важкий</p></button>
                    </p>
                </form>
            </div>
        </header>
    </div>
</body>
</html>