<?php
	require_once 'simple_html_dom.php';
	
	$html = new simple_html_dom();
	$html = file_get_html('http://www.bank.gov.ua/control/uk/curmetal/detail/currency?period=daily');
	$nbuUSD;
	$nbuEUR;
	$nbuRUB;
	$privat = array(
	'EUR/UAH' => array('buy'=>'', 'sell'=>''),
	'USD/UAH' => array('buy'=>'', 'sell'=>''),
	'RUB/UAH' => array('buy'=>'', 'sell'=>''),
	);
	$note;
	foreach($html->find('tr') as $tr){
		foreach ($tr->find('td') as $td){
		if ($td->plaintext == '840') {
			//echo '<table>'.$tr.'</table>';
			$note = $tr->plaintext;
			$note = trim($note);
			$nbuUSD = round((float)substr($note, strripos($note, ' ')) / 100, 3);
		}
		if ($td->plaintext == '978') {
			//echo '<table>'.$tr.'</table>';
			$note = $tr->plaintext;
			$note = trim($note);
			$nbuEUR = round((float)substr($note, strripos($note, ' ')) / 100, 3);
		}
		break;
		}			
	}
	//echo $nbuUSD.'<br>';
	//echo $nbuEUR.'<br>';;
	$html->clear();
	$html = file_get_html('https://privatbank.ua/');
	$obj = $html->find('tbody #selectByPB');
	$noteVal;
	$buySell;
	foreach ($obj[0]->find('td') as $td){
		if(!is_numeric($td->plaintext)){
			$noteVal = $td->plaintext;
			$buySell  = 'buy';
			continue;
		}
		$privat[$noteVal][$buySell] = (float)$td->plaintext;
		$buySell  = 'sell';
	}
	//echo $obj[0]->find('td')[0]->plaintext;
	//$obj
	//print_r($privat);
	//print_r($privat);
	//echo array_keys($privat)[0];
	$html->clear();
	unset($html);
	
	echo '<div style="width: 165px; background-color: #ddd; border: 2px solid">'.
	iconv("cp1251","utf-8","Курс НБУ:").'<br>&nbsp;&nbsp;USD/UAH: '.$nbuUSD.'<br>&nbsp;&nbsp;EUR/UAH: '.$nbuEUR.'<br><br>'.
	iconv("cp1251","utf-8","Приват банк:").'<br>';
	for($i = 0; $i < count($privat); ++$i){
		$key = array_keys($privat)[$i];

		echo '&nbsp;&nbsp;'.$key.': '.$privat[$key]['buy'].' / '.$privat[$key]['sell'].'<br>';
	}
	echo '</div>';