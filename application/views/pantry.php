<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="view-header">
        <div class="container">
        <div class="row">
            <div class="col-sm col-md">
                <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>/assets/img/logo.png"></a>
                <div class="nama"><h4><b>Selamat Datang, xxxxxxxxxxxxxxx</b> </h4></div>            
            </div>
        </div>
        </div>
    </nav>
    <!menu>
    <div class="">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="title"><b>Menu Item 1</b></li>
                        <li><a href="#">Menu Item 1</a></li>
                        <li><a href="#">Menu Item 2</a></li>
                        <li><a href="#">Menu Item 3</a></li>
                        <li><a href="#">Menu Item 4</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            </div>
    </div>

    <!main>
        <div class="nav-menu">
            <div class="container" id="mycontainer">
                <p><h4><center>Makanan</center></h4></p>
                <hr>
                <!isi content>
                <form class="bootstrap-form-with-validation">
            <div class="form-group">
                <label class="control-label" for="text-input">Text Input</label>
                <input class="form-control" type="text" name="text-input" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input">Password Input</label>
                <input class="form-control" type="password" name="password-input" id="password-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input">Email Input</label>
                <input class="form-control" type="email" name="email-input" id="email-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="textarea-input">Textarea </label>
                <textarea class="form-control" name="textarea-input" id="textarea-input"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="search-input">Search Input Group</label>
                <div class="input-group">
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input class="form-control" type="search" name="search-input" id="search-input">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="file-input">File Input</label>
                <input type="file" name="file-input" id="file-input">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label" for="checkbox-input">
                        <input type="checkbox" name="checkbox-input">Checkbox</label>
                </div>
            </div>
            <div class="form-group">
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group">Radio</label>
                </div>
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group" checked="">Radio</label>
                </div>
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group">Radio</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Static Control</label>
                <p class="form-static-control">A basic template showing the proper way to create bootstrap forms using form group components, labels and input fields.</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </form>
            </div>            
        </div>
    </div>
    </div>

    <!main>


    <!footer>
    <footer>
        <div class="row container">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Company<span>logo </span></a></h3>
               <!-- <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>-->
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <!--<div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>-->
            </div>
            
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>