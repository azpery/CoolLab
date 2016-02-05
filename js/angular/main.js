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
    .when("/travail", {templateUrl: "partials/travail.html", controller: "PageCtrl"})
    .when("/activite", {templateUrl: "partials/act.html", controller: "PageCtrl"})
    .when("/ressources", {templateUrl: "partials/ressouces.html", controller: "PageCtrl"})
    .when("/projets/ajouter", {templateUrl: "partials/ajouterProjet.html", controller: "PageCtrl"})
    .when("/projects/1", {templateUrl: "partials/projets.html", controller: "PageCtrl"})
    .when("/projects/1/discussion", {templateUrl: "partials/Discussion.html", controller: "PageCtrl"})
    .when("/projects/1/fichier", {templateUrl: "partials/Fichier.html", controller: "PageCtrl"})
    .when("/projects/1/activite", {templateUrl: "partials/Activite.html", controller: "PageCtrl"})
    .when("/project/1/discussion/1", {templateUrl: "partials/discussionModal.html", controller: "PageCtrl"})
    .when("/project/1/team", {templateUrl: "partials/team.html", controller: "PageCtrl"})
    .when("/projects/1/discussions/add", {templateUrl: "partials/ouvrirDiscussion.html", controller: "PageCtrl"})
    .when("/calendrier", {templateUrl: "partials/calendrier.html", controller: "PageCtrl"})
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
