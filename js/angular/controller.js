angular.module('tutorialWebApp', [])
.controller('CabinetListCtrl', function ($scope, $http) {
  $http.get('../model/php/cabinet.php').success(function(data) {
    $scope.cabinet = data;
  });

  $scope.orderProp = 'id';
});