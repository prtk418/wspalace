<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo base_url('favicon.png'); ?>" type="image/gif" sizes="16x16">
	<title>Workshop Palace</title>
    <link href="<?php echo base_url('assets/css/app.min.1.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/app.min.2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-left" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('logo.png'); ?>"></a>
    		</div>
    		<ul class="nav navbar-nav pull-right">
      			<li class="active"><a class="btn btn-primary btn-lg" href="<?php echo base_url('workshops'); ?>">Workshops</a></li>
            <?php if($this->session->userdata('id') != NULL) { ?>
            <li><a class="btn btn-default btn-lg" id="logout-btn" href="<?php echo base_url('logout'); ?>">Logout</a></li>
            <?php } ?>
    		</ul>
  		</div>
	</nav>
