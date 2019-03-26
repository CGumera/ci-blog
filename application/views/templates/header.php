<!DOCTYPE html>
<html>
	<head>
		<title>ciBlog</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
			</div>
			<div class="collapse navbar-collapse" id="navbarColor01">
		      <ul class="navbar-nav mr-auto">
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
		        </li>
		      </ul>
		      <ul class="navbar-nav navbar-right mr-auto">
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
		        </li>
		      </ul>
		    </div>
		<div>
	</nav>
	<div class="container">