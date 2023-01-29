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
            <div class="form">
                <form action="index.php" method="post" class="form">
                <?php 
                    $level = $_POST["level"];
                    $win = $_POST["win"];
                    $winner = $_POST["winner"];
                    $lose = 10-$win;
                    if ($win >= 5) {
                        echo "<p class='echo'>Вітаю! Ти переміг!</p>";
                        if ($level == "easy" && $winner == 0 || $level == "medium" && $winner == 1) {
                            $_POST["winner"] = ++$winner;
                            echo "<p class='echo'>Відкрито наступний рівень</p>";
                        }
                    } else {
                        echo "<p class='echo'>Нажаль ти програв! Спробуй ще раз</p>";
                    }
                ?>
                    <div class="flex">
                        <input type="hidden" name="level" value="<?php echo($level); ?>">
                        <input type="hidden" name="winner" value="<?php echo($winner); ?>">
                        <div class="border"><label>Перемоги<input type="text" name="win" value="<?php echo($win); ?>"></label></div>
                        <div class="border"><label>Програші<input type="text" name="lose" value="<?php echo($lose); ?>"></label></div>
                    </div>
                    <button class="nextbutt" type="submit" name="sub" value="sub">Далі</button>
                </form>
            </div>
        </header>
    </div>
</body>
</html>