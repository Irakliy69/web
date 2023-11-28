<?php
$servername = "localhost";
$username = "ваш_пользователь";
$password = "ваш_пароль";
$dbname = "Зоопарк";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Животные";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Вид: " . $row["вид"]. " - Имя: " . $row["имя"]. " - Возраст: " . $row["возраст"]. "<br>";
    }
} else {
    echo "0 результатов";
}

?>



INSERT INTO Животные (вид, имя, возраст) VALUES
('Лев', 'Симба', 3),
('Обезьяна', 'Чита', 5),
('Змея', 'Каа', 7),
('Пингвин', 'Куки', 2);