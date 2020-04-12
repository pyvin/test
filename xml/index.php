<?php

/* Задание 1
*   XML
*  ОТВЕТ - в MessageURLList необходиом сделать экранирования амперсанта
*   из документакции по структуре xml использование & запрещено вместо него нужно исользовать сущьность &amp;
*/


/* Задание 2
*   Напишите код (на PHP) выдающий массив данных: 
*   - Должник: id, тип, имя
*   - Список лотов: по каждому - номер, стоимость, описание.
*/

$debtors = simplexml_load_file('test.xml');


$debtor = [
    'id' => (int) $debtors->Id,
    'type' => (string) $debtors->MessageInfo['MessageType'],
    'name' => (string) $debtors->PublisherInfo->ArbitrManager['FirstName']
];

foreach($debtors->MessageInfo->Auction->LotTable->AuctionLot as $key => $lot_table) {
    $list_lots[] = [
        'nomer' => (int) $lot_table->Order,
        'price' => (int) $lot_table->StartPrice,
        'description' => (string) trim($lot_table->Description)

    ];
}

$task2 = [
    'debtor' => $debtor,
    'list_lots' => $list_lots
];

echo "<pre>";
print_r($task2);
echo "</pre>";