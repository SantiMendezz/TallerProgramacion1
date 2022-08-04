<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('public/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Data Tables -->
    <!-- <link href="<?php echo base_url('public/assets/datatables/css/dataTables.bootstrap5.min.css');?>" rel="stylesheet"> -->
    <!-- Normalize -->
    <link href="<?php echo base_url('public/assets/css/normalize.css');?>" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="<?php echo base_url('https://fonts.googleapis.com');?>">
    <link rel="preconnect" href="<?php echo base_url('https://fonts.gstatic.com');?>" crossorigin>
    <link href="<?php echo base_url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap');?>" rel="stylesheet">
    <!-- Hoja de estilo -->
    <link href="<?php echo base_url('public/assets/css/mainStyles.css');?>" rel="stylesheet">
    <title><?php echo($titulo);?></title>
</head>
<body>
    <header class="header">
        <a href="<?php echo base_url('dashboard'); ?>">
            <img class="header__logo" src="<?php echo base_url('public/assets/img/logo.png');?>">
        </a>
    </header>