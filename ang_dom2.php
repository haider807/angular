<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Sample <span style="color: red;">Events</span></h1>
    <div ng-app="fstApp" ng-controller="fstCont">
        <button ng-click="toggle();">Toggle</button>
        <div ng-show="mySec">
            <table>
                <tr>
                    <td>First Name</td><td><input type="text" ng-model="first_name"></td>
                </tr>
                <tr>
                    <td>Last Name</td><td><input type="text" ng-model="last_name"></td>
                </tr>
            </table>
            <p>Full Name => {{first_name+" "+ last_name}}</p>
        </div>
    </div>
   

<script>
    var app=angular.module('fstApp',[]);
    app.controller('fstCont',function($scope){
       $scope.first_name = "Lional";
       $scope.last_name = "Messi";
       $scope.mySec = true;
       $scope.toggle = function(){
            $scope.mySec = !$scope.mySec;
       };
    });
</script>
</body>
</html>