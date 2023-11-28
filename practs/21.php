<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <label for="name">Ваше имя:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">Ваш возраст:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="city">Ваш город:</label>
        <input type="text" id="city" name="city" required><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        echo "Меня зовут $name.<br>";
        echo "Мне $age лет.<br>";
        echo "Я живу в городе $city.";
    }
    ?>
</body>
</html>