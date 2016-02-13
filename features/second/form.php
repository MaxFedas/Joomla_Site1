<?php
	$var = rand(0, 2);
	//echo $var. ' - from form.php <br>';
	echo '<link href="styles.css" rel="stylesheet">';
	echo '<div class="field">';
	if ($_POST){		
		echo '<form action="form.php" method="post">';
		if ($_POST['subTurn'] == 1){
			for ($i = 0; $i < 3; ++$i){
				echo '<div><input type="submit" name="door" value="'.$i.'"></div>';
			}			
			echo '<input type="hidden" name="subTurn" value="0">';
			if($_POST['door'] != $_POST['preTurn']){
				echo '<input type="hidden" name="ChangeTrys" value="'.($_POST["ChangeTrys"] + 1).'">';
				if ($_POST['door'] == $_POST['res']){
					echo '<input type="hidden" name="ChangeWin" value="'.($_POST["ChangeWin"] + 1).'">';
				}
				else {
					echo '<input type="hidden" name="ChangeWin" value="'.$_POST["ChangeWin"] .'">';
				}
				echo '<input type="hidden" name="UnChangeTrys" value="'.$_POST["UnChangeTrys"].'">';
				echo '<input type="hidden" name="UnChangeWin" value="'.$_POST["UnChangeWin"].'">';
			}
			else{
				echo '<input type="hidden" name="ChangeTrys" value="'.$_POST["ChangeTrys"].'">';
				echo '<input type="hidden" name="ChangeWin" value="'.$_POST["ChangeWin"].'">';				
				echo '<input type="hidden" name="UnChangeTrys" value="'.($_POST["UnChangeTrys"] + 1).'">';
				if ($_POST['door'] == $_POST['res']){
					echo '<input type="hidden" name="UnChangeWin" value="'.($_POST["UnChangeWin"] + 1).'">';
				}
				else {
					echo '<input type="hidden" name="UnChangeWin" value="'.$_POST["UnChangeWin"].'">';
				}
			}		
			echo '<input type="hidden" name="preTurn" value="">';			
			echo '<input type="hidden" name="res" value="'.$var.'">';				
		}
		else {
			for ($i = 0; $i < 3; ++$i){
				echo '<div><input type="submit" name="door" value="'.$i;
				if ($i != $_POST['res'] && $i != $_POST['door'] && !$isTrue){
					echo '" hidden = "true';
					$isTrue = !$isTrue;
				}
				echo '"></div>';
			}		
			echo '<input type="hidden" name="subTurn" value="1">';
			echo '<input type="hidden" name="ChangeTrys" value="'.$_POST["ChangeTrys"].'">';
			echo '<input type="hidden" name="ChangeWin" value="'.$_POST["ChangeWin"].'">';
			echo '<input type="hidden" name="UnChangeTrys" value="'.$_POST["UnChangeTrys"].'">';
			echo '<input type="hidden" name="UnChangeWin" value="'.$_POST["UnChangeWin"].'">';		
			echo '<input type="hidden" name="preTurn" value="'.$_POST["door"].'">';
			echo '<input type="hidden" name="res" value="'.$_POST["res"].'">';			
		}
		echo '</form>';
		//echo $_POST['door'];	
	} else{
		echo '<form action="form.php" method="post">';
		for ($i = 0; $i < 3; ++$i){
			echo '<div><input type="submit" name="door" value="'.$i.'"></div>';
		}
		echo '<input type="hidden" name="subTurn" value="0">';
		echo '<input type="hidden" name="ChangeTrys" value="0">';
		echo '<input type="hidden" name="ChangeWin" value="0">';
		echo '<input type="hidden" name="UnChangeTrys" value="0">';
		echo '<input type="hidden" name="UnChangeWin" value="0">';		
		echo '<input type="hidden" name="preTurn" value="">';
		echo '<input type="hidden" name="res" value="'.$var.'">';
		echo '</form>';
	}
	echo '</div>';
	if($_POST){
	$ChPercent = 0;
	$UnChPercent = 0;
	if ($_POST["ChangeTrys"] != 0)	{
		$ChPercent = ($_POST["ChangeWin"] / $_POST["ChangeTrys"]) * 100;
	}
	if ($_POST["UnChangeTrys"] != 0) {
		$UnChPercent = ($_POST["UnChangeWin"] / $_POST["UnChangeTrys"]) * 100;
	}
		
	echo '<div class="field">Change trys: '.$_POST["ChangeTrys"].'<br>
	&nbsp;&nbsp;Win: '.$_POST["ChangeWin"].'<br>&nbsp;&nbsp;Percent of win'.
	round($ChPercent, 2).' %<br>UnChange trys: '.
	$_POST["UnChangeTrys"].'<br>&nbsp;&nbsp;Win: '.$_POST["UnChangeWin"].
	'<br>&nbsp;&nbsp;Percent of win:'.round($UnChPercent, 2).'%</div>';}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	