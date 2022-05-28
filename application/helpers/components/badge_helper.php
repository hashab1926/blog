<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/application/helpers/utils.php";
function Badge($props = [])
{
	return view_component("./Badge/Badge", $props);
}
