var app = angular.module("admin", []);

app.controller('delegateRegCtrl', ['$scope', '$http', function ($scope, $http) {
$scope.delegateregistrations = [];
  getRegistrations($scope, $http, 1);
}]);

function getRegistrations($scope, $http, index){
  $http.get('../myassets/phpscripts/admin/getregistrations.php', {
        params: {
            index: index
        }
     })
     .success(function (data,status) {

       for(var i =0; i <data.Registrations.length; i++){
          $scope.delegateregistrations.push(data.Registrations[i]);
       }

     });

}
