/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('CoolLab', [
  'ngRoute',
  'ngAnimations'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "partials/index.html", controller: "PageCtrl"})
    // Pages
    .when("/index", {templateUrl: "partials/index.html", controller: "PageCtrl"})
    .when("/#", {templateUrl: "partials/index.html", controller: "PageCtrl"})
    .when("/general", {templateUrl: "partials/general.html", controller: "PageCtrl"})
    .when("/basic", {templateUrl: "partials/basic_form.html", controller: "PageCtrl"})
    .when("/simple", {templateUrl: "partials/simple.html", controller: "PageCtrl"})
    .otherwise({templateUrl: "partials/index.html", controller: "PageCtrl"})
}]);

/**
 * Controls the Blog
 */
app.controller('BlogCtrl', function (/* $scope, $location, $http */) {
  console.log("Blog Controller reporting for duty.");
});

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty.");

  // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })
});
app.controller('CabinetListCtrl', function ($scope, $http) {
  $http.get('./model/php/cabinet.php').success(function(data) {
    $scope.cabinet = data;
    console.log(data);
  });

  $scope.orderProp = 'id';
});
