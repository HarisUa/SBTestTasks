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
					$date = new DateTime($i.'-'.$month.'-13');
					
	                if (5 == $date->format('w')) $this->res++;
	            }
			}
		}
		return $this->res;
	}
}