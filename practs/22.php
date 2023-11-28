<!DOCTYPE html>
<html>

<body>
    <form method="POST" action="">
        <label for="number">Введите число x:</label>
        <input type="number" id="number" name="number" required><br>
        <input type="submit" value="Проверить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $x = $_POST['number'];

        if ($x > 0) {
            echo "Число $x - положительное.";
        } elseif ($x == 0) {
            echo "Число $x равно нулю.";
        } else {
            echo "Число $x - отрицательное.";
        }
    }
    ?>
</body>

</html>