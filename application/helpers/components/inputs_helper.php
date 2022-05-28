<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/application/helpers/utils.php";
function Input($props = [])
{
	return view_component("./Input/Input", $props);
}
