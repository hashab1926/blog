<?php
function view_component($file, $props)
{
	$view = &get_instance();
	return $view->load->view("./components/{$file}", $props);
}
