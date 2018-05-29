<?php

/**
 * @param $callback
 */
function test($callback) {
	// processo

	$callback();
}

test(function () {
	echo "Terminou!";
});

?>