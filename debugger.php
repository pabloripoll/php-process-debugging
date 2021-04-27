<?php

/*
  ** DEBUGGER
  * $debugContent must be array or object
*/
$debugContent = print_r([$variable], true);
$debugFile = '/var/www/html/{project-direcotry}/debug.log';
file_put_contents($debugFile, "\n[".date("Y.m.d H:i:s")."]↴\n".$debugContent, FILE_APPEND | LOCK_EX");
/* */

?>
