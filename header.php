<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="./dist/css/main.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <div class="wrapper leftCanvas">
            <div class="overlay"></div>
            <div class="offCanvas bg-white">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link p-3">Tentang Kami</a></li>
                    <li class="nav-item">
                        <a href="#dropdown1" class="nav-link p-3" data-toggle="collapse">Akad Syariah</a>
                        <div class="collapse pl-3" id="dropdown1">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 1</a></li>
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#dropdown2" class="nav-link p-3" data-toggle="collapse">Pengajuan Online</a>
                        <div class="collapse pl-3" id="dropdown2">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 1</a></li>
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#dropdown3" class="nav-link p-3" data-toggle="collapse">Beli Motor</a>
                        <div class="collapse pl-3" id="dropdown3">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 1</a></li>
                                <li class="nav-item"><a href="#" class="nav-link p-3">SubMenu 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Login</a></li>
                </ul>
            </div>
            <div class="content">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light mainNavbar">
                    <div class="container">
                    	<button class="navbar-toggler offCanvasToggler d-inline-flex mr-2 d-md-none" type="button">
	                    	<span class="navbar-toggler-icon"></span>
	                    </button>
	                    <a class="navbar-brand" href="#">
	                    	<img src="./dist/img/logo.png" alt="" style="width: 150px;">
	                    </a>
	                    <button class="navbar-toggler" style="visibility: hidden;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
	                    	<span class="navbar-toggler-icon"></span>
	                    </button>
	                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                        <ul class="navbar-nav ml-auto">
	                            <li class="nav-item active">
	                                <a class="nav-link" href="#">Tentang Kami <span class="sr-only">(current)</span></a>
	                            </li>
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
	                                Akad Kredit Syariah
	                                </a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="#">SubMenu 1</a>
	                                    <a class="dropdown-item" href="#">SubMenu 2</a>
	                                </div>
	                            </li>
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
	                                Pengajuan Online
	                                </a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="#">SubMenu 1</a>
	                                    <a class="dropdown-item" href="#">SubMenu 2</a>
	                                </div>
	                            </li>
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
	                                Beli Motor
	                                </a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="#">SubMenu 1</a>
	                                    <a class="dropdown-item" href="#">SubMenu 2</a>
	                                </div>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Login</a>
	                            </li>
	                        </ul>
	                    </div>
                    </div>
                </nav>

                <div class="mainContainer">