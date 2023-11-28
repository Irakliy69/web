<!DOCTYPE html>
<html>

<body>
    <form method="POST" action="">
        <label for="length">Длина:</label>
        <input type="number" id="length" name="length" required><br>

        <label for="width">Ширина:</label>
        <input type="number" id="width" name="width" required><br>

        <input type="submit" value="Вычислить площадь">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = $_POST['length'];
        $width = $_POST['width'];

        $area = $length * $width;

        echo "Площадь прямоугольника: $area";
    }
    ?>
</body>

</html>