<?php

class HelloWorldPageTemplate4 extends PT_IronSummitMedia_startbootstrap_simple_sidebar {
	
	protected $PrevClassExampleNumber;
	protected $CurClassExampleNumber;
	protected $NextClassExampleNumber;

	public function __construct(){
		parent::__construct();
		
		$this->CalcPrevAndNextClassExampleNumbers();
	}

	private function CalcPrevAndNextClassExampleNumbers(){
		$PageClassName = get_class($this);
		$arrPageClassName = explode('_', $PageClassName);
		$CurentClassExampleNumber = $arrPageClassName[1];
		
		$PrevClassExampleNumber = $CurentClassExampleNumber - 1;
		$NextClassExampleNumber = $CurentClassExampleNumber + 1;
		
		$this->PrevClassExampleNumber = self::CheckForLessThanTenAndAddZeroIfNeeded($PrevClassExampleNumber);
		$this->CurClassExampleNumber = $CurentClassExampleNumber;
		$this->NextClassExampleNumber = self::CheckForLessThanTenAndAddZeroIfNeeded($NextClassExampleNumber);
	
	}

	private static function CheckForLessThanTenAndAddZeroIfNeeded($ClassExampleNumber){
		$ClassExampleNumberWithZeroAddedIfNeeded = $ClassExampleNumber;
		
		if($ClassExampleNumberWithZeroAddedIfNeeded < 10) {
			$ClassExampleNumberWithZeroAddedIfNeeded = '0' . $ClassExampleNumberWithZeroAddedIfNeeded;
		}
		
		return $ClassExampleNumberWithZeroAddedIfNeeded;
	}

	public function __destruct(){
		parent::__destruct();
	}

	protected function BODY(){
		parent::BODY();
		?>


<table style='width: 100%; height: 40px'>
	<tr>
		<td style='text-align: left'><a href='HelloWorld_<?php print $this->PrevClassExampleNumber ?>.php'>Prev</a></td>
		<td style='text-align: right'><a href='HelloWorld_<?php print $this->NextClassExampleNumber ?>.php'>Next</a></td>
	</tr>
</table>

<?php
		
		print "<h1>Hello World {$this->CurClassExampleNumber}</h1>";
	
	}

}
