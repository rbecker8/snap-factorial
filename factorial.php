<?php

function factorial($n) {
				if(($n < 0 || $n > 20)) {
					throw(new \Exception("Negatives and integers over 21 are not allowed"));
				}
				return true;
}
			try {
						$fact = 1;
						for ($i = 1; $i<=$fact-1; $i++) {
									$fact = $fact * $i;
						}


			} catch (\Exception $exception) {
					echo 'Message: ' .$exception->getMessage();
			}