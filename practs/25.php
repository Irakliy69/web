<!DOCTYPE html>
<html>

<body>
    <form method="POST" action="">
        <label for="month">Месяц рождения:</label>
        <input type="text" id="month" name="month" required><br>
        <input type="submit" value="Проверить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $month = strtolower($_POST['month']);

        if ($month == 'март' || $month == 'апрель' || $month == 'май') {
            echo "Вы родились весной!";
        } elseif ($month == 'июнь' || $month == 'июль' || $month == 'август') {
            echo "Будем отмечать твой день рождения летом!";
        } elseif ($month == 'сентябрь' || $month == 'октябрь' || $month == 'ноябрь') {
            echo "Осень – время твоего дня рождения!";
        } elseif ($month == 'декабрь' || $month == 'январь' || $month == 'февраль') {
            echo "Ура, скоро зима – день твоего рождения!";
        } else {
            echo "Некорректный месяц.";
        }
    }
    ?>
</body>

</html>