<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/application/helpers/utils.php";
function ChevronRight($props = [])
{
	return view_component("./Icons/Chevron/ChevronRight", $props);
}

function MenuOpen($props = [])
{
	return view_component("./Icons/Menu/MenuOpen", $props);
}
