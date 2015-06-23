<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../Example.css" media="screen" />
		<title>휴폐업조회 SDK PHP 5.X Example.</title>
	</head>
<?php
	include 'common.php';
	// 조회단가 확인

	try {
		$unitCost = $closedownChecker->GetUnitCost();
	}
	catch(ClosedownException $je) {
		$code = $je->getCode();
		$message = $je->getMessage();
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>휴폐업조회 단가 확인</legend>
				<ul>
					<?
						if(isset($unitCost)) { 
					?>
							<li>조회단가 : <? echo $unitCost ?></li>
					<?
						} else {
					?>
							<li>Response.code : <? echo $code ?> </li>
							<li>Response.message : <? echo $message ?></li>
					<?
						}
					?>		
				</ul>
			</fieldset>
		 </div>
	</body>
</html>