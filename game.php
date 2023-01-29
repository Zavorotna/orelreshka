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
        <div class="flex head">
            <p>Гра "Орел і Решка"</p>
            <p><a href="index.php">На головну сторінку</a></p>
        </div>
        <header class="whitebox">
            <?php 
                $level = $_POST["level"];
                $game = $_POST["game"];
                $winner = $_POST["winner"];
                $win = $_POST["win"];
                if (isset($_POST["choise"])) {
                    $choise = $_POST["choise"];
                    $coin = rand(0,1);
                    $_POST["game"] = ++$game;
                    echo $game;
                    $side = $coin;
                    if ($coin == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                    else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                    switch ($level) {
                        case 'easy':
                            if ($choise == $coin) {
                                $_POST["win"] = ++$win;
                                echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                            } else {
                                $coin = rand(0,1);
                                if ($choise == $coin) {
                                    $_POST["win"] = ++$win;
                                    echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                                } else {
                                    echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                                }
                            }
                        break;
                        case 'medium':
                                if ($choise == $coin) {
                                    $_POST["win"] = ++$win;
                                    echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                                } else {
                                    echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                                }
                        break;
                        case 'hard':
                            if ($choise == $coin) {
                                $coin = rand(0,1);
                                if ($choise == $coin) {
                                    $_POST["win"] = ++$win;
                                    echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                                } else {
                                    echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                                }
                            } else {
                                echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                            }
                        break;
                    }
                }
            ?>
            <div class="game">
                <form action="
                    <?php
                    if ($game < 10) {
                        echo "game.php";
                    } else {
                        echo "result.php";
                    }
                    ?>" method="post">
                    <?php
                        if ($game < 10) {
                            echo "
                            <h2>Зроби свій вибір</h2>
                            <div class='flex'>
                                    <button class='coin orel' type='submit' name='choise' value='1'></button>
                                    <button class='coin reshka' type='submit' name='choise' value='0'></button>
                                </div>
                            ";
                        } else {
                            echo "
                                <button class='nextbutt' type='submit'>Result</button>
                            ";
                        }
                    ?>
                    <input type="hidden" name="level" value="<?php echo($level); ?>">
                    <input type="hidden" name="game" value="<?php echo($game); ?>">
                    <input type="hidden" name="win" value="<?php echo($win); ?>">
                    <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                </form>
            </div>
        </header>
    </div>
</body>
</html>