<!DOCTYPE html>
<html>

<body>
    <h1>Введите информацию о вашем любимом фильме:</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Название фильма: <input type="text" name="movieTitle"><br>
        Имя актера: <input type="text" name="actorName"><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $movieTitle = $_POST['movieTitle'];
        $actorName = $_POST['actorName'];

        function showMovieInfo($title, $actor)
        {
            echo "<h2>Ваш любимый фильм: $title</h2>";
            echo "<p>Главную роль в фильме играет: $actor</p>";
        }

        showMovieInfo($movieTitle, $actorName);
    }
    ?>
</body>

</html>