<?php
function lottery($ticket, $win) {
	$count_win = 0;
	foreach ($ticket as $value) {
		$count = 0;
		for ($i = 0; $i < strlen($value[0]); $i++) {
			if ($value[1] == ord($value[0][$i])) {
				$count += 1;
			}
		}
		if ($count == 1 ) {
			$count_win += 1;
		}
	}
	return $count_win >= $win ? 'Winner!' : 'Loser!';
}  
?>
