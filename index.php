<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="/Example.css" media="screen" />
		
		<title>휴폐업조회 SDK PHP 5.X Example.</title>
	</head>

	<body>
		<div id="content">


			<p class="heading1">휴폐업조회 API SDK PHP 5.X Example.</p>
		
			<br/>

			<fieldset class="fieldset1">
				<legend>휴폐업조회 API</legend>
				<ul>
					<li><a href="ClosedownExample/checkCorpNum.php">checkCorpNum</a> - 휴폐업조회(단건)</li>
					<li><a href="ClosedownExample/checkCorpNums.php">checkCorpNums</a> - 휴폐업조회(대량)</li>
				</ul>
			</fieldset>
			
			<br />
			<fieldset class="fieldset1">
				<legend>과금 API</legend>
				<ul>
					<li><a href="ClosedownExample/getUnitCost.php">getUnitCost</a> - 조회단가 확인</li>
					<li><a href="ClosedownExample/getBalance.php">getBalance</a> - 잔여포인트 확인</li>
				</ul>
			</fieldset>

			
			<br />
			<?echo phpinfo() ?>
		 </div>
	</body>
</html>