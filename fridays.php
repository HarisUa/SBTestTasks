<?
class harisFridays {
	private $y_start, $y_end, $res = 0;

	public function __construct($y_start, $y_end = 0) {

		if ($y_start < 0)
			exit ('Wrong year');

		if ($y_end < $y_start )
			$y_end = $y_start;

		$this->y_start = $y_start;
		$this->y_end = $y_end;

	}

	public function run() {
		$start = $this->y_start;
		$end = $this->y_end;
		
		while ( ($end - $start + 1) > 400 ) {
			$this->res += 167;
			$end -= 400;
		}
		
		
		for( $i = $start; $i <= $end; $i++ ) {
			if(checkdate(2, 29, $i)) {
				for($month = 1; $month <= 12; $month++) {
<<<<<<< HEAD
					$date = new DateTime($i.'-'.$month.'-13');
					
	                if (5 == $date->format('w')) $this->res++;
	            }
=======
					$date = mktime(0, 0, 0, $month, 13, $i);
					if (5 == date('w', $date)) $this->res++;
				}
>>>>>>> 1beded7404e3937a3ad4a09094a3d5d44aa19fab
			}
		}
		return $this->res;
	}

}
<<<<<<< HEAD


$start = microtime(true);
$s = new harisFridays(1,100000004);
echo $s->run();
$time = microtime(true) - $start;
printf('Скрипт выполнялся %.5F сек.\n', $time);
=======
>>>>>>> 1beded7404e3937a3ad4a09094a3d5d44aa19fab
