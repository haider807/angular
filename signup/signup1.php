<!DOCTYPE html>
<html>
<script src="../angular.min.js"></script>
<link rel="stylesheet" href = "../bootstrap.min.css">
<head>
    <style>
        body { padding-top:30px; }
    </style>
</head>
<body style="margin: 0 300px; background: #ababab;">
<?php //include "menu.php";?>
    <h1>Angular Sample  <span style="color: red;">Sign up</span></h1>
    <div ng-app="signup" ng-controller="signupController">
<div class="container">
<div class="row">  
   
<div class="col-sm-6">
    
  
    <form name="userForm" ng-submit="submitForm()" novalidate>

        <!-- FIRST NAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.first_name.$invalid && !userForm.first_name.$pristine }">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" ng-model="user.first_name" ng-minlength="3" required>
            <p ng-show="userForm.first_name.$invalid && !userForm.first_name.$pristine" class="help-block">Your First name is required.</p>
            <p ng-show="userForm.first_name.$error.minlength" class="help-block">User first name is too short.</p>
        </div>
        
        <!-- LAST NAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.last_name.$invalid && !userForm.last_name.$pristine }">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" ng-model="user.last_name" ng-minlength="3" required>
            <p ng-show="userForm.last_name.$invalid && !userForm.last_name.$pristine" class="help-block">Your Last name is required.</p>
            <p ng-show="userForm.last_name.$error.minlength" class="help-block">User last name is too short.</p>
        </div>
      
        <!-- USERNAME -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }">
            <label>Username</label>
            <input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="3" ng-maxlength="8">
            <p ng-show="userForm.username.$error.minlength" class="help-block">Username is too short.</p>
            <p ng-show="userForm.username.$error.maxlength" class="help-block">Username is too long.</p>
        </div>
        
        <!-- EMAIL -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label>Email</label>
            <input type="email" id="email" name="email" class="form-control" ng-model="user.email">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
        </div>
        
        <div class="form-group">
            <div class="radio">
                <label>
                    <input type="radio" checked name="gender" value="male" required>
                  Male
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="female" required>
                  Female
                </label>
            </div>
        </div>
        
        <button type="submit" ng-click="email_chk()" class="btn btn-primary" ng-disabled="userForm.$invalid">Submit</button>
        
    </form>
  </div>
    <div class="col-sm-6">
    
    
    </div>
</div>
</div>
        <script>
            // create angular app
	var validationApp = angular.module('signup', []);

	// create angular controller
	validationApp.controller('signupController', function($scope,$http) {

		
                // function to submit the form after all validation has occurred
                $scope.submitForm = function() {
                    //alert($scope.user.email);
                    /////////////////ajax check////////////////////////                
                $http({
                    method  : 'POST',
                    async: false,
                    url: 'http://localhost/angular/signup/emailcheck.php',
                    data: { email: $scope.user.email },  // pass in data as strings
                    headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
               })
                .success(function(data) 
                {
                    //console.log(data);
                    $scope.info = data;
                    //alert("Value => "+$scope.info);
                    /////////////////////////////////////////////////////
                    // check to make sure the form is completely valid
                    if($scope.userForm.$valid && $scope.info === '0') {
                            alert('our form is amazing' + $scope.info);
                    }
                    else{
                        alert('Already exist');
                    }
                }
                ).error(function(response,status)
                {
                    console.log('ERROR HERE'+ status);
                });
               

		};
                

	});
        </script>
</body>
</html>
