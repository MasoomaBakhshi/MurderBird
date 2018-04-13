<?php
	//retrieve the functions
	include('db_connection.php');
	require('functions_messages.php');
	require('functions.php');
	session_start(); 
	//destroy the user session
	session_destroy();
	redirect('..\login.php');
?>