
var app = angular.module('App', [
  'ngRoute'
]);

app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {

    $routeProvider.when("/", {templateUrl: "view/inicio.html"});

    $routeProvider.when("/Productos/nuevo", {templateUrl: "../view/producto/create.html"});
    $routeProvider.when("/Productos", {templateUrl: "../view/producto/ver.html"});
    $routeProvider.when("/Tipo", {templateUrl: "../view/comprobantes/tipo.html"});
    $routeProvider.when("/Comprobantes", {templateUrl: "../view/comprobantes/crear.html"});

    $routeProvider.when("/Factura/nuevo", {templateUrl: "../view/comprobantes/factura/create.html"});

    $routeProvider.otherwise("/404", {templateUrl: "partials/404.html"});

    //$locationProvider.html5Mode({ enabled: true, requireBase: false });
}]);