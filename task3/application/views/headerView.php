<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Comments Page</title>

	<style>
		h2 {
			margin-top: 0;
		}
		.container {
			max-width: 600px;
			margin: 20px auto;
		}
		.form {
			box-sizing: border-box;
			text-align: center;
			width: 100%;
			background: #FAFAFA;
			padding: 20px;
			border: 1px solid #CCCCCC;
		}
		.form .first_input {
			float: left;
			width: 48%;
		}
		.form .second_input {
			float: right;
			width: 48%;
		}
		.form .textarea {
			width: 100%;
		}
		.form input, textarea {
			margin-bottom: 20px;
			padding: 5px 10px 5px 15px;
			width: 100%;
			box-sizing: border-box;
		}
		.form button {
			box-sizing: border-box;
			width: 30%;
			padding: 10px 15px;
			color: #000000;
			cursor: pointer;
		}
		.form .notice {
			text-align: center;
			font-size: 17px;
			color: #000000;
		}
		.comments_block {
			width: 100%;
			box-sizing: border-box;
		}
		.comments_block h2 {
			text-align: center;
		}
		.comments_block .author {
			float: left;
			width: 50%;
		}
		.comments_block .date {
			float: right;
			width: 50%;
			text-align: right;
		}
		.comments_block .message {
			width: 100%;
		}
		.comments_block .comment {
			box-sizing: border-box;
			width: 100%;
			padding: 10px 15px;
			border: 1px solid #CCCCCC;
			margin-bottom: 20px;
		}
		.pagination {
			text-align: center;
			margin-top: 30px;
		}
		.pagination a, .currentlink {
			padding: 5px 10px;
			text-decoration: none;
			margin: 8px;
			border: 1px solid #CCCCCC;
		}
		.pagination .currentlink {
			background-color: #dddddd;
		}
		.pagination a:hover {
			background-color: #CCCCCC;
		}
		.pagination a:focus {
			color: #009900;
		}
	</style>
</head>
<body>


