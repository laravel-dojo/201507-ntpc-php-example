<?php

$var = 'Bob';              // 合法，小寫開頭
$Var = 'Joe';              // 合法，大寫開頭
$_4site = 'hello, world';  // 合法，底線開頭

//$4site = 'hello, world'; // 不合法，數字開頭
/*
Parse error: syntax error, unexpected '4' (T_LNUMBER), expecting variable (T_VARIABLE) or '$' in
*/

?>