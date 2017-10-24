var app = angular.module("app");

app.directive("myNavbar", function() {
    return {
        restrict: 'E',
        replace: true,
        transclude: false,
        // scope: {title: "=navbarTitle"},
        templateUrl: '../views/navbar.php'
        // '<nav class="navbar navbar-dark bg-dark">         <a class="navbar-brand" href="#">IFA</a>         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">             <span class="navbar-toggler-icon"></span>         </button>         <div class="collapse navbar-collapse" id="navbarText">             <ul class="navbar-nav mr-auto">             <li class="nav-item active">                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>             </li>             <li class="nav-item">                 <a class="nav-link" href="#">Features</a>             </li>             <li class="nav-item">                 <a class="nav-link" href="#">Pricing</a>             </li>             </ul>             <span class="navbar-text">             Navbar text with an inline element            </span>         </div>         </nav>'
        // link: function(scope, element, attrs) {
        //     scope.showMe = true;
        // }
        // template: '<h1>COUCOU je suis la directive !</h1>'
    }
})
