<?php

$database = false;

if ($database) {
	echo 'connected';
} else {
	trigger_error('Could not connect to DB', E_USER_NOTICE);
}

