<html>

<body>
    <h2>Калькулятор</h2>
    <form method="post" action="">
        <label for="x">Введите число x:</label>
        <input type="number" name="x" required>
        <br>

        <label for="y">Введите число y:</label>
        <input type="number" name="y" required>
        <br>

        <input type="submit" name="operation" value="Сложение">
        <input type="submit" name="operation" value="Умножение">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];

        $operation = $_POST["operation"];

        if ($operation == "Сложение") {
            $result = $x + $y;
            echo "<p>Результат сложения: $result</p>";
        } elseif ($operation == "Умножение") {
            $result = $x * $y;
            echo "<p>Результат умножения: $result</p>";
        }
    }
    ?>
</body>

</html>