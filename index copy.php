<?php
// Функция для определения этапа тренировки спортсмена
function determineTrainingStage($age) {
    if($age >= 6 && $age <= 12) {
        return "Начинающий";
    } elseif($age >= 13 && $age <= 18) {
        return "Средний уровень";
    } elseif($age >= 19) {
        return "Профессионал";
    } else {
        return "Возраст должен быть больше или равен 6";
    }
}

// Получение возраста от пользователя
$age = intval(readline("Введите возраст спортсмена: "));

// Вызов функции и вывод результата
$trainingStage = determineTrainingStage($age);
echo "Спортсмен находится на этапе: $trainingStage";
