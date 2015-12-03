<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Js Sample Filter currency <span style="color: red;">Controller</span></h1>
    <div ng-app="fstapp" ng-controller="fstcontoller">
        Quantity:<input type="number" ng-model="qty">
        Price:<input type="number" ng-model="price"><br>
        <p>Total price => {{ qty * price | currency }}</p>
        
    </div>
   

<script>
    
    var app = angular.module('fstapp',[]);
    app.controller('fstcontoller',function($scope){
       $scope.qty = 1;
       $scope.price = 11;
    });
    
</script>

</body>
</html>