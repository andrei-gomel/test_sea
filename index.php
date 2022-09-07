<?php

/*
Логин: tester
Pass: 123456
*/

session_start();

include_once('functions.php');

if (isset($_GET['action']) AND $_GET['action'] == 'login')
		login();

if (isset($_GET['action']) AND $_GET['action'] == 'registration')
		registration();

if (!isset($_POST['submit']))
	include_once('forms.php');