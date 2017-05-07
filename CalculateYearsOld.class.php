<?php
class CalculateYearsOld
{
	
	public static function calculate($data,$c=1){
		$data = explode('/', $data);

		if($c = 1){
		  $age = (date("md", date("U", mktime(0, 0, 0, $data[0], $data[1], $data[2]))) > date("md")
		    ? ((date("Y") - $data[2]) - 1)
		    : (date("Y") - $data[2]));
		  return $age;
		}else{
			$day = $data[0]; // day
			$month = $data[1]; //month
			$year = $data[2]; //year

			//current year and month
			$cYear = date('Y');
			$cMonth = date('m');
			$cDay = date('d');
			
			$givCurrentYearsOld = $cYear - $year-1;

			if(($cDay == $day && $cMonth == $month) || ($cDay < $day && $cMonth > $month) || ($cDay == $day && $cMonth >= $month)){
				$givCurrentYearsOld = $cYear - $year;
			}else if(($cDay < $day && $cMonth == $month) || ($cDay == $day && $cMonth <= $month)){
				$givCurrentYearsOld = $cYear - $year-1;
			}
		}
		return $givCurrentYearsOld;
	}
}


?>