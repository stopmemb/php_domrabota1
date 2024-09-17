<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DomZadanie1 Zaharov</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>
            <div class="header_a">
                <a href="">Главная</a>
            </div>
            <div class="header_a">
                <a href="">О нас</a>
            </div>
            <div class="header_a">
                <a href="">Галерея</a>
            </div>
        </header>
        <div class="zadanie_1">
            <p>Задание 1</p>
            <p>Группа 228 2022 г.</p>
            <p><?php
                $array = ['Анисимов', 'Баширов', 'Вейсалов', 'Гареев', 'Гатиятуллин', 'Загидуллин', 'Закирова', 'Захаров', 'Идиятова', 'Найдёнова'];
                foreach ($array as $i) {
                    echo $i;
                    echo '<br>';
                }
                echo 'Всего студентов ' . count($array);
                echo '<br>';
                ?></p>
            <p><?
                if (in_array('Сидоров', $array)) {
                    echo 'Сидоров есть';
                } else {
                    echo 'Сидорова нету';
                }
                $expelled = array_pop($array);
                echo '<br> Последний человек в группе ', $expelled;
                ?></p>
        </div>
        <div class="zadanie_2">
            <p>Задание 2</p>
            <p><?
                $massive = [
                    "Спортивный" => "Сидоров",
                    "Художественный" => "Емелина",
                    "Музыкальный" => "Иванова",
                    "Литературный" => "Петров",
                    "Биологический" => "Антонова"
                ];
                foreach ($massive as $key => $value) {
                    echo $key . ' ' . '-' . ' ' . $value;
                    echo '<br>';
                }
                ?></p>
        </div>
        <div class="zadanie_3">
            <p>Задание 3</p>
            <p><?
                $student = [
                    'Имя' => 'Богдан',
                    'Фамилие' => 'Захаров',
                    'Группа' => '427WEB',
                    'Хобби' => 'Игра на фортепиано',
                    'Соц. сети' => [
                        'VK' => 'vk.com/bog_zaharov',
                        'Instagram' => '-',
                        'TG' => '@Fellyai'
                    ]
                ];
                foreach ($student as $key => $value) {
                    echo $key . ' ' . '-' . ' ' . $value;
                    echo '<br>';
                }
                foreach ($student['Соц. сети'] as $soc => $link) {
                    echo "$soc: $link<br>";
                }
                ?></p>
        </div>
    </section>
</body>

</html>