app.controller('CustomerCtrl',['$http','$scope', function($http,$scope){
    $scope.customername = 'Kushan shanuka';
    $scope.formtext = 'example value';
//    Materialize.updateTextFields();
    $scope.customername = $http.get('api/test').success(function(d){
        $scope.customername = d;
    });
}]);