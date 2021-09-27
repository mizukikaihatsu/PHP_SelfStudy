<?php
function str2html(string $str):string{
	return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}