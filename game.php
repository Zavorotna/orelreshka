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
        <header class="whitebox">
            <h1>Гра "Орел і Решка"</h1>
            <p><a href="index.php">На головну сторінку</a></p>
            <?php 
                $level = $_POST["level"];
                $choise = $_POST["choise"];
                $game = $_POST["game"];
                $winner = $_POST["winner"];
                $game += 1;
                $moneta = rand(0,1);
                $side = $moneta;
                $win = $_POST["win"];
                switch ($level) {
                    case 'easy':
                        echo "Легкий рівень";
                        if (isset($choise)) {
                            if ($choise == $moneta) {
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                else $side = "<p>Reshka</p>";
                                echo "<p>$side You win</p>";
                            } else {
                                $moneta = rand(0,1);
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                else $side = "<p>Reshka</p>";
                                if ($choise == $moneta) {
                                    echo "<p>$side You win</p>";
                                } else {
                                    echo "<p>$side You lose</p>";
                                }
                            }
                        } else {
                            echo "<p>enter your choise</p>";
                        }
                    break;
                    case 'medium':
                        echo "medium";
                        if (isset($choise)) {
                            if ($choise == $moneta) {
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                else $side = "<p>Reshka</p>";
                                echo "<p>$side You win</p>";
                            } else {
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                else $side = "<p>Reshka</p>";
                                echo "<p>$side You lose</p>";
                            }
                        } else {
                            echo "<p>enter your choise</p>";
                        }
                    break;
                    case 'hard': 
                        echo "hard";
                        if (isset($choise)) {
                            if ($choise == $moneta) {
                                $moneta = rand(0,1);
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                else $side = "<p>Reshka</p>";
                                if ($choise == $moneta) {
                                    if ($moneta == 1) $side = "<p>Orel</p>";
                                    else $side = "<p>Reshka</p>";
                                    echo "<p>$side You win</p>";
                                } else {
                                    if ($moneta == 1) $side = "<p>Orel</p>";
                                    else $side = "<p>Reshka</p>";
                                    echo "<p>$side You lose</p>";
                                }
                            } else {
                                if ($moneta == 1) $side = "<p>Orel</p>";
                                    else $side = "<p>Reshka</p>";
                                    echo "<p>$side You lose</p>";
                            }
                        } else {
                            echo "<p>enter your choise</p>";
                        }
                    break;
                }
            ?>
            <div class="game">
                <form action="
                <?php 
                if ($game == 11) {
                    echo "result.php";
                } else {
                    echo "game.php";
                    if ($choise == $moneta) {
                        $win += 1;
                    }
                }
                ?>" method="post">
                    <h2>Зроби свій вибір</h2>
                    <div class="flex">
                        <input type="hidden" name="level" value="<?php echo($level); ?>">
                        <input type="hidden" name="game" value="<?php echo($game); ?>">
                        <input type="hidden" name="win" value="<?php echo($win); ?>">
                        <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                        <button class="button coin" type="radio" name="choise" value="1">Orel</button>
                        <button class="button coin" type="radio" name="choise" value="0">Reshka</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
</body>
</html>