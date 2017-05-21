<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 17.05.2017
 * Time: 20:27
 */
echo "Starting\n";
$gmworker = new GearmanWorker();
$gmworker->addServer();
$gmworker->addFunction('exampleData', 'loadData');
while ($gmworker->work());
function loadData($job)
{
	$workload = $job->workload();
	file_put_contents('text.txt', $workload, FILE_APPEND);
	sleep(5);
}
