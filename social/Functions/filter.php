<?php

$text = "!@#$%^&*()_(*&^%$#@!%$^@&#*$&(OIYKUJHGGWTH#&*I)P&*(^&^%$GRTHY%J&^*%I&^)*L&K$^UJY%#H$#G%@$#^%^<&(^";

function Email($email)
{
$emal = preg_replace('/[^a-zA-Z0-9._@\-]/', '', $email);
return $emal;
}




function strng($strng)
{
$strig = preg_replace('/[^a-zA-Z0-9. \n]/', '', $strng);
return $strig;
}




?>