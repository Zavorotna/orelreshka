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
            <?php 
                if ($_POST) {
                    $level = $_POST["level"];
                    $choise = (isset($_POST["choise"]));
                    $game = 0;
                    $win = 0;
                }
            ?>
                <form action="game.php" method="post">
                    <?php
                    if (!isset($_POST["winner"])) {
                        $winner = 1;
                    } else {
                        $winner = $_POST["winner"];
                    }
                    ?>
                    <p class="level">
                        <input type="hidden" name="level" value="<?php echo($level); ?>">
                        <input type="hidden" name="game" value="0">
                        <input type="hidden" name="win" value="0">
                        <input type="hidden" name="choise" value="0">
                        <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                        <button class="button" type="submit" name="level" value="easy"><p>Easy</p></button>
                        <button class="button" type="submit" name="level" value="medium" 
                        <?php 
                        if ($winner >= 2) {
                            echo "undisabled";
                        } else {
                            echo "disabled";
                        }
                        ?> ><p>Medium</p></button>
                        <button class="button" type="submit" name="level" value="hard" 
                        <?php 
                        if ($winner >= 3 && $level == "medium") {
                            echo "undisabled";
                        } else {
                            echo "disabled";
                        }
                        ?> ><p>Hard</p></button>
                    </p>
                </form>
            </div>
        </header>
    </div>
</body>
</html>