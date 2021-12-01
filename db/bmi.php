<?php  
class BMI extends db {

	public $height;
	public $weight;
	public $age;
	public $gender;
	public $db;
	public $data;
	public $bmi;

	public function __construct($height, $weight, $age, $gender) {
		$this->height = $height;
		$this->weight = $weight;
		$this->age = $age;
		$this->gender = $gender;
		$this->db = new db;
	}

	private function getData() {
		$this->data = $this->db->query('SELECT * FROM bmi_data WHERE age = ? AND gender = ?', $this->checkAge(), $this->gender)->fetchArray();
		return $this->data;
	}

	private function checkAge() {
		if($this->age >= 17) {
			$this->age = 18;
			$this->gender = "adult";
		}
		return $this->age;
	}

	private function calcBMI() {
		$this->cmToMeters();
		$this->bmi = round($this->weight / ($this->height * $this->height), 1);
		return $this->bmi;
	}

	public function returnData(){
		if($this->age >= 17){
			$this->calcBMI();
			$this->getData();
			if($this->bmi >= 40) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "ziekelijk overgewicht")
					</script>';
			} elseif($this->bmi >= 30) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "ernstig overgewicht")
					</script>';
			} elseif($this->bmi >= 27) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "matig overgewicht")
					</script>';
			} elseif($this->bmi >= 25) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "licht overgewicht")
					</script>';
			} elseif($this->bmi >= 18.5) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "normaal")
					</script>';
			} elseif($this->bmi <= 18.5) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "ondergewicht")
					</script>';
			}
		}else {
			$this->calcBMI();
			$this->getData();
			if($this->bmi > intval($this->data["obese"])) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "obese")
					</script>';
			} elseif($this->bmi > intval($this->data["heavy"])) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "heavy")
					</script>';
			} elseif($this->bmi > intval($this->data["light"])) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "normal")
					</script>';
			}elseif($this->bmi < intval($this->data["light"])) {
				echo '<script type="text/javascript">
						$(".result").attr("value", "light")
					</script>';
			}
		}

		
	}

	private function cmToMeters() {
		if($this->height > 3) {
			$this->height /= 100;
		}
	}


}

?>