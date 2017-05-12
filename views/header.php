<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle ?></title>
        <link rel="stylesheet" href="http://localhost/site/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="<?php echo $pageLeftLink ?>">Котики</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $pageRightLink ?>"><?php echo $pageRightLinkContent ?></a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->