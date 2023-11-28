<?php
// Создание текстового файла и запись информации
$fileContent = "ФИО: Ваше_ФИО\nГород: Ваш_город\nУчебное заведение: Ваше_учебное_заведение";

$filePath = "my_info.txt";
file_put_contents($filePath, $fileContent);

// Чтение файла и вывод в браузер
$fileContent = file_get_contents($filePath);
echo "<pre>$fileContent</pre>";
?>