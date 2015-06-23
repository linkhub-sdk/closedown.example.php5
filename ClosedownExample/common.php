<?php
require_once '../Closedown/Closedown.php';

//링크아이디
$LinkID = 'TESTER';

//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'SwWxqU+0TErBXy/9TVjIPEnI0VTUMMSQZtJf3Ed8q3I=';

$closedownChecker = new Closedown($LinkID,$SecretKey);
?>