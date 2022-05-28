<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/application/helpers/utils.php";
function CardNews($props)
{
	return view_component("./Card/CardNews", $props);
}
