<?php
class StrUtils {
	private $_str = "";

	function __construct($newStr) {
		$this -> _str = $newStr;
	}

	public function getStr() {
		return $this -> _str; 
	}

	public function bold() {
		$bold = '<b>'.$this -> _str.'</b>';
		$this -> _str = $bold;
		return $bold;
	}

	public function italic() {
		$italic = '<i>'.$this -> _str.'</i>';
		$this -> _str = $italic;
		return $italic;
	}

	public function underline() {
		$underline = '<u>'.$this -> _str.'</u>';
		$this -> _str = $underline;
		return $underline;
	}

	public function capitalize() {

	}

	public function uglify() {
		$this -> bold();
		$this -> italic();
		$this -> underline();
	}
}

	$myStr = new StrUtils('Hello world');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO</title>
</head>
<body>
	<div>
		<ul>
			<li><?= 'Normal: ' . $myStr -> getStr(); ?></li>
			<li><?= 'Bold: '. $myStr -> bold(); ?></li>
			<li><?= 'Italic: '. $myStr -> italic(); ?></li>
			<li><?= 'Underline: '.$myStr -> underline(); ?></li>
			<li></li>
			<li><?= 'Uglify: '.$myStr -> getStr(); ?></li>
		</ul>
	</div>
	
</body>
</html>