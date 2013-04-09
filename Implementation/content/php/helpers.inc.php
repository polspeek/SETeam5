<?php

// Used for returning text encoded for use as html

function html($text)
{
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
// Used for echoing html
function htmlout($text)
{
	echo html($text);
}

?>