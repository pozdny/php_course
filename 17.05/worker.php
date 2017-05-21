<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 17.05.2017
 * Time: 19:26
 */
echo "Starting\n";

# Создание нового обработчика.
$gmworker= new GearmanWorker();

# Добавление сервера по умолчанию (localhost).
$gmworker->addServer();

# Регистрация функции "reverse" на сервере. Изменение функции обработчика на
# "reverse_fn_fast" для более быстрой обработки без вывода.
$gmworker->addFunction("exampleData", "loadData");

while($gmworker->work());
function loadData($job){
    $workload = $job->workload();
    file_put_contents('text.txt', $workload, FILE_APPEND);
    sleep(5);
}



