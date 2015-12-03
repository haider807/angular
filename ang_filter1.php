<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Sample <span style="color: red;">Controller</span></h1>
    <div ng-app="fstapp" ng-controller="fstcontoller">
        First Name:<input type="text" ng-model="first_name"><br>
        Last Name:<input type="text" ng-model="last_name"><br>
        <p>Full Name => {{ first_name + " " + last_name | uppercase }}</p>
        
    </div>
   

<script>
    
    
    angular.module('fstapp',[]).controller('fstcontoller',function($scope){
       $scope.first_name = "Jordi",
       $scope.last_name = "Alba"
    });
    
</script>
</body>
</html>