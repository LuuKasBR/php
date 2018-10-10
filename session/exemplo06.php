<?php

require_once ("exemplo03.php");

//printa o caminho físico aonde a sessão grava
echo session_save_path();

//status da sessão. Caso printe 0, a sessão está desativada. Se for 1, a sessão está desabilitada. Se for 2, uma sessão está ativada.
var_dump(session_status());


?>