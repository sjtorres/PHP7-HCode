<?php

for ($i = 0; $i < 1000; $i += 5) {

	if ($i >= 100 && $i <= 900) {
		continue;
	}

	if ($i === 950) {
		break;
	}

	echo "Posição " . $i . "<br>";
}

?>