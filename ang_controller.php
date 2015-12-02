<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Sample <span style="color: red;">Controller</span></h1>
    <div ng-app="fstApp" ng-controller="fstCont">
        First Name:<input type="text" ng-model="first_name"><br>
        Last Name:<input type="text" ng-model="last_name"><br>
        <p>Full Name => {{ first_name + " " + last_name }}</p>
    </div>
   

<script>
    var app=angular.module('fstApp',[]);
    app.controller('fstCont',function($scope){
       $scope.first_name = "Lional";
       $scope.last_name = "Messi";
    });
</script>
</body>
</html>