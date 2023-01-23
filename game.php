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
                switch ($level) {
                    case 'easy':
                        if (isset($_POST["choise"])) {
                            $game += 1;
                            $moneta = rand(0,1);
                            $side = $moneta;
                            $choise = $_POST["choise"];
                            if ($choise == $moneta) {
                                $win += 1;
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                            } else {
                                $moneta = rand(0,1);
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                if ($choise == $moneta) {
                                    $win += 1;
                                    echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                                } else {
                                    echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                                }
                            }
                        } 
                    break;
                    case 'medium':
                        if (isset($_POST["choise"])) {
                            $game += 1;
                            $moneta = rand(0,1);
                            $side = $moneta;
                            $choise = $_POST["choise"];
                            if ($choise == $moneta) {
                                $win += 1;
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                            } else {
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                            }
                        } 
                    break;
                    case 'hard': 
                        if (isset($_POST["choise"]))  {
                            $game += 1;
                            $moneta = rand(0,1);
                            $side = $moneta;
                            $choise = $_POST["choise"];
                            if ($choise == $moneta) {
                                $moneta = rand(0,1);
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                if ($choise == $moneta) {
                                    $win += 1;
                                    echo "<p class='echo'>$side</p><p class='echo'>Ура! Ти виграв!</p>";
                                } else {
                                    echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                                }
                            } else {
                                if ($moneta == 1) $side = "<p class='echo'>Випала сторона</p><p class='echo coin orel'>";
                                else $side = "<p class='echo'>Випала сторона</p><p class='echo coin reshka'></p>";
                                echo "<p class='echo'>$side</p><p class='echo'>Упс! Програв!</p>";
                            }
                        } 
                    break;
                }
            ?>
            <div class="game">
                <form action="
                <?php 
                if ($game == 10) {
                    echo "result.php";
                } else {
                    echo "game.php";
                }
                ?>" method="post">
                    <h2>Зроби свій вибір</h2>
                    <div class="flex">
                        <input type="hidden" name="level" value="<?php echo($level); ?>">
                        <input type="hidden" name="game" value="<?php echo($game); ?>">
                        <input type="hidden" name="win" value="<?php echo($win); ?>">
                        <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                        <button class="coin orel" type="radio" name="choise" value="1"></button>
                        <button class="coin reshka" type="radio" name="choise" value="0"></button>
                    </div>
                </form>
            </div>
        </header>
    </div>
</body>
</html>