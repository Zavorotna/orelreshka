<!DOCTYPE html>
<html lang="en">
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
            <div class="form">
                <form action="index.php" method="post">
                <?php 
                    $level = $_POST["level"];
                    $win = $_POST["win"];
                    $winner = $_POST["winner"];
                    $lose = 10-$win;
                    if ($win > $lose) {
                        $winner += 1;
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