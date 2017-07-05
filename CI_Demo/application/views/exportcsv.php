<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	.heading {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 19px 0;
		padding: 10px 10px 10px 10px;
	}

	.heading h1{
		color: #444;
		font-size: 19px;
		font-weight: normal;
		float: left;
	}

	.heading a{
		color: #444;
		font-size: 12px;
		font-weight: normal;
		float: left;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 15px 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	
	<div class="heading">
		<h1>Export CSV!</h1>
		<p style="float:right"><a href="<?php echo base_url(); ?>">Back</a></p>
	<div style="clear:both"></div>
	</div>


	<div id="body">
		<a href="<?php echo base_url(); ?>index.php/welcome/downloadCSV">Download</a>
		<a href="<?php echo base_url(); ?>index.php/welcome/downloadArrayToCSV">Download 2</a>

		<table border="1">  
			<tbody>  
			 <tr>  
			    <td>Id</td>  
			    <td>First Name</td>  
			    <td>Last Name</td>  
			 </tr>  
			 <?php  
			 foreach ($records as $record)  
			 {  
			    
			 ?>
				<tr>  
				    <td><?php echo $record->id; ?></td>  
				    <td><?php echo $record->first_name; ?></td>
				    <td><?php echo $record->last_name; ?></td>  
			    	</tr>  
			 <?php 
			 }  
			 ?>  
			</tbody>  
		</table>   
	</div>
</div>

</body>
</html>
