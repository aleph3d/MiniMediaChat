<?php
unset($itx);
$itx['validuser'] = FALSE;
if (!$itx['validuser']) {
//User is not valid - define the validUser to false ouput to login screen.
define('validUser',FALSE);
}
else {
}