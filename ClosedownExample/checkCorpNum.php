<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../Example.css" media="screen" />
		<title>휴폐업조회 SDK PHP 5.X Example.</title>
	</head>
<?php
	include 'common.php';
	// 휴폐업조회 - 단건	

	if(isset($_GET['CorpNum']) && $_GET['CorpNum'] != ''){

		// 조회할 사업자번호
		$CorpNum = $_GET['CorpNum'];	

		try {
			$result = $closedownChecker->checkCorpNum($CorpNum);
		}
		catch(ClosedownException $ce) {
			$code = $ce->getCode();
			$message = $ce->getMessage();
		}
	}
?>
	<body>
		<div id="content">
			<p class="heading1">Response</p>
			<br/>
			<fieldset class="fieldset1">
				<legend>휴폐업조회 - 단건</legend>
					<div class ="fieldset4">
					<form method= "GET" id="corpnum_form" action="checkCorpNum.php">
						<input class= "txtCorpNum left" type="text" placeholder="사업자번호 기재" id="CorpNum" name="CorpNum" value ='<?= (isset($result->corpNum) ? $result->corpNum : "") ?>'"tabindex=1/>
						<p class="find_btn find_btn01 hand" onclick="search()" tabindex=2>조회</p>
					</form>
					</div>
			</fieldset>
			<?
				if(isset($result)) { 
			?>
				<fieldset class="fieldset2">
					<legend>휴폐업조회 - 단건</legend>
					<ul>
						<li>사업자번호(corpNum) : <?= $result->corpNum?></li>		
						<li>사업자유형(type) : <?= $result->type?></li>	
						<li>휴폐업상태(state) : <?= $result->state?></li>
						<li>휴폐업일자(stateDate) : <?= $result->stateDate?></li>	
						<li>국세청 확일일자(checkDate) : <?= $result->checkDate?></li>	
					</ul>
					<p class="info">> state (휴폐업상태) : null-알수없음, 0-등록되지 않은 사업자번호, 1-사업중, 2-폐업, 3-휴업</p>
					<p class="info">> type (사업 유형) : null-알수없음, 1-일반과세자, 2-면세과세자, 3-간이과세자, 4-비영리법인, 국가기관</p>
					<br/>
				</fieldset>

			<?
				} if(isset($code)) {
			?>

				<fieldset class="fieldset2">
					<legend>휴폐업조회 - 단건</legend>
					<ul>
						<li>Response.code : <? echo $code ?> </li>
						<li>Response.message : <? echo $message ?></li>
					</ul>
				</fieldset>
			<?
				}
			?>		

		 </div>

     	 <script type ="text/javascript">
		 window.onload=function(){
			 document.getElementById('CorpNum').focus();
		 }
		 
		 function search(){
			document.getElementById('corpnum_form').submit();
		 }
		 
		 </script>
	</body>
</html>