<?php

namespace TDD;

include_once 'sumClass.php';

$numbers = [1, 2, 3, 4, 5];

$sum = sumClass::sum($numbers);

?>

<h1>Sum of 1, 2, 3, 4, 5</h1>
<p>Answer: <?= $sum; ?></p>