<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="css/site.css" />
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
</head>

<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div align="center" class="item active">
            <img src="images/carousel/carousel1.jpg" alt="Image 1" class="img-responsive" />
            <div class="carousel-caption" role="option">
            </div>
        </div>
        <div align="center" class="item">
            <img src="images/carousel/carousel2.jpg" alt="Image 2" class="img-responsive" />
            <div class="carousel-caption" role="option">
            </div>
        </div>
        <div align="center" class="item">
            <img src="images/carousel/carousel3.jpg" alt="Image 3" class="img-responsive" />
            <div class="carousel-caption" role="option">
            </div>
        </div>
        <div align="center" class="item">
            <img src="images/carousel/carousel4.jpg" alt="Image 4" class="img-responsive" />
            <div class="carousel-caption" role="option">
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr />
<div align="center" class="title"><h3>WE MAKE PRODUCTS WITH FABRIC FROM AROUND THE WORLD</h3></div>
<hr />
<div class="row">
    <div align="center" class="col-md-4">
        <h4 class="title">Men's Hats</h4>
        <hr />
        <img src="images/globetrotter5panel.jpg" alt="Globetrotter 5-panel" class="img-responsive" />
        <hr />
<!--
        @if (User.IsInRole("Admin"))
        {
            <a asp-controller="Hats" asp-action="Index" asp-route-id="1" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
        else
        {
            <a asp-controller="CustomerHats" asp-action="Index" asp-route-id="1" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
-->
    </div>
    <div align="center" class="col-md-4">
        <h4 class="title">Women's Hats</h4>
        <hr />
        <img src="images/serengeteebeanie.jpg" alt="Serengetee beanie" class="img-responsive" />
        <hr />
<!--
        @if (User.IsInRole("Admin"))
        {
            <a asp-controller="Hats" asp-action="Index" asp-route-id="2" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
        else
        {
            <a asp-controller="CustomerHats" asp-action="Index" asp-route-id="2" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
-->
    </div>
    <div align="center" class="col-md-4">
        <h4 class="title">Children's Hats</h4>
        <hr />
        <img src="images/camden5panel.jpg" alt="Camden 5-panel" class="img-responsive" />
        <hr />
<!--
        @if (User.IsInRole("Admin"))
        {
            <a asp-controller="Hats" asp-action="Index" asp-route-id="3" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
        else
        {
            <a asp-controller="CustomerHats" asp-action="Index" asp-route-id="3" class="btn btn-warning">Explore <span class="glyphicon glyphicon-fast-forward"></span></a>
        }
-->
    </div>
</div>
</body>
</html>
