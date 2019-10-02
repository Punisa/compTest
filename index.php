<?php

require('vendor/autoload.php');

use deep\Hi;
use deep\deeper\DeeperHi;

class myHi extends Hi {

}

class myDeeperHi extends DeeperHi {

}

$myhi = new myHi();
$mydhi = new myDeeperHi();

$myhi->sayHi();
$mydhi->sayDeeperHi();

?>