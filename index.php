<?php

require_once 'FactoryRobot.php';
require_once 'Robot1.php';
require_once 'Robot2.php';
require_once 'MergeRobot.php';

$factory = new FactoryRobot();
$factory->addType(new Robot1());
$factory->addType(new Robot2());
$mergerRobot = new MergeRobot();
$mergerRobot->addRobot(new Robot1());
$mergerRobot->addRobot($factory->createRobot1(2));
$factory->addType($mergerRobot);
$exemplar = $factory->createMergeRobot(1);
$res = reset($exemplar);
echo $res->getSpeed()."<br>";
echo $res->getWeight();

