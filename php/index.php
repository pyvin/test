<?php

/*
*   Задание 1
*   Напишите код (функцию, класс), которая проверяет простое число или нет
*   На вход - число, выход - да/нет
*/
class PrimeNumber {

    function checkNumber($number) {
        
        $result =  'Да';

        // 1 - не является простым числом
        if ($number == 1) {
            return 'Нет';
        }
    
        // перебор возможных делителей
        for ($d = 2; $d * $d <= $number; $d++ ) {
            if ($number % $d == 0) {
                $result = 'Нет';
            }
        }

        return $result;
    }
}

$primer = new PrimeNumber();
echo $primer->checkNumber(3);
echo '<br/>';

/*
*   Задание 2
*   Есть счет, в котором указана сумма с НДС, есть дата счета и все прочие атрибуты.
*   Напишите класс, в нем метод - в который на вход поступает информация о счете, 
*   на выходе - стоимость без НДС (страна - Российская Федерация)
*/

echo '---------------------------';
echo '<br/>';
echo 'Задание 2';

class Chet {
    function infoChet($id_chet, $info = '') {

        $chet = [
            100 => [
                'id' => 100,
                'date' => '14.04.2020 14:00',
                'price' => 1000,
                'name_chet' => 'Оптлата 1',
                'nds' => 20,
                'currency' => 'руб'
            ],
            101 => [
                'id' => 100,
                'date' => '14.04.2020 14:00',
                'price' => 2000,
                'name_chet' => 'Оптлата 2',
                'nds' => 20,
                'currency' => 'руб'
            ],
            102 => [
                'id' => 100,
                'date' => '14.04.2020 14:00',
                'price' => 2000,
                'name_chet' => 'Оптлата 2',
                'nds' => 20,
                'currency' => 'руб'
            ]
        ];

        if (array_key_exists($id_chet, $chet)) {
            if (is_int($chet[$id_chet]['price']) && is_int($chet[$id_chet]['nds'])) {
                $price = $chet[$id_chet]['price'] - (($chet[$id_chet]['price'] / 100) * $chet[$id_chet]['nds']);
                $result = 'стоимость без НДС = ' . $price . ' ' . $chet[$id_chet]['currency'];
            } else {
                $result = 'Перменнная не является числом';
            }
        
        } else {
            $result = 'Информации по id = ' . $id_chet . 'Не найдено';
        }
        return $result;
    }
}


$chet = new Chet();
echo $chet->infoChet(100);