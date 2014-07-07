<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Let-Me-Eat/css/style.css">
    </head>

    <body>
        <header>
            <div class="container my-nav">
                    <nav class="navbar navbar-default" role="navigation">
                                    <div class="navbar-header">                        
                                        <a class="navbar-brand">Let Me Eat</a>
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse ">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="<?php echo SITE_URL;?>" class="">Главная</a></li>
                                            <li><a href="<?php echo (SITE_URL+"index.php?page=connect")?>">Присоединиться</a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>
                                            <li class="hidden-md hidden-sm hidden-xs"><a href="#"></a></li>

                                            <li>
                                                <form class="navbar-form" role="search">
                                                    <div class="form-group name-search"> 
                                                        <div class="input-group">
                                                            <input type="search" class="form-control" placeholder="Поиск по названию">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="submit">
                                                                    <span class="glyphicon glyphicon-search"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </li>

                                            <li>
                                                 <div class="btn-group">
                                                    <button class="btn btn-default navbar-btn city-check dropdown-toggle" type="button" data-toggle="dropdown">
                                                        <span>Иркутск</span>
                                                        <span class="caret"></span>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>   
                    </nav>
            </div>

        </header>
    </body>

<?php


?>