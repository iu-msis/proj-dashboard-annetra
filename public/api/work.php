<?php
require '../../app/common.php';
// Get task_id
$taskId = intval($_GET['taskId'] ?? 0);
// Fetch all the work for that task id
$work = Work::findByTaskId($taskId);

// convert to json and print
header('Content-type: application/json')

echo json_encode($work);
