<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Chemical',
    'title' => 'Chemical Exchange',
    'version' => '2021-05-23-21-20-06',
    'priority' => 0,
    'location' => 'chemical.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
