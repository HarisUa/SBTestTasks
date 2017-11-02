<?
class harisSqrt {
	private $number, $fix;

	public function __construct($number, $fix = 0) {

		if ($number < 0 ) {
			$number = -$number;
		}

		if ($fix < 0 ) {
			$fix = -$fix;
		}

		$this->number = $number;
		$this->fix = $fix;

	}

	public function run() {

		$x = 1;
		$n = $this->number;
		for( $i = 0; $i < $n; $i++)
		{
			$x = 0.5 * ( $x + $n / $x );
		}
		return number_format($x, $this->fix, '.', ''); 

	}
}