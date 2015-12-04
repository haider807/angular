<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Sample <span style="color: red;">Validation</span></h1>
    <form ng-app="fstApp" ng-controller="fstCont" name="myform" novalidate>
       
        
            <p>First Name<br>
                <input type="text" name="first_name" ng-model="first_name" required>
                <span style="color: red;" ng-show="myform.first_name.$dirty && myform.first_name.$invalid">
                    <span ng-show="myform.first_name.$error.required">User First name is required</span>
                </span>
            </p>    
            <p>Last Name<br><input name="last_name" type="text" ng-model="last_name" required>
                <span style="color: red;" ng-show="myform.last_name.$dirty && myform.last_name.$invalid">
                    <span ng-show="myform.last_name.$error.required">User Last name is required</span>
                </span>
            </p>
            <p>Email<br><input type="email" name="email" ng-model="email" required>
                <span style="color: red;" ng-show="myform.email.$dirty && myform.email.$invalid">
                    <span ng-show="myform.email.$error.required">User Email is required</span>
                </span>
            </p>
            <p>
                <input type="submit" ng-disabled="myform.first_name.$dirty && myform.first_name.$invalid ||
                   myform.last_name.$dirty && myform.last_name.$invalid ||
                    myform.email.$dirty && myform.email.$invalid">
            </p>               
            <p>Full Name => {{first_name+" "+ last_name}}</p>
        </form>
    
   

<script>
    var app=angular.module('fstApp',[]);
    app.controller('fstCont',function($scope){
       $scope.first_name = "Ghullam";
       $scope.last_name = "Yasin";
       $scope.email = "Yasin@yasinandsons.com";
    });
</script>
</body>
</html>