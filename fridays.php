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

		for( $i = $start; $i <= $end; $i++ ) {
			if(date("L",mktime(0,0,0,1,1,$i))) {
				for($month = 1; $month <= 12; $month++) {
	                $date = mktime(0, 0, 0, $month, 13, $i);
	                if (5 == date('w', $date)) $this->res++;
	            }
			}
		}

		return $this->res;
	}

}