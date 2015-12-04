<!DOCTYPE html>
<html lang="en-US">
    <link rel="stylesheet" href = "bootstrap.min.css">
    <script src="angular.min.js"></script>
    <body ng-app="fstApp" ng-controller="fstCont">
<?php //include "menu.php";?>
        <h1>User form of <span style="color: red;">Bootstrap</span></h1>
   
        <div class="container">
            <h2>System Users</h2>
            <table class="table table-striped">
                <thead><tr>
                  <th>Edit</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                </tr></thead>
                <tbody><tr ng-repeat="user in users">
                  <td>
                    <button class="btn" ng-click="editUser(user.id)">
                    <span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit
                    </button>
                  </td>
                  <td>{{ user.first_name }}</td>
                  <td>{{ user.last_name }}</td>
                </tr></tbody>
            </table>
            <hr>
                <button class="btn btn-success" ng-click="editUser('new')">
                    <span class="glyphicon glyphicon-user">Create new user</span>
                </button>
            <hr>
            <form class="form-horizontal" ng-hide="hideform">
                <h3 ng-show="edit">Create user</h3>
                <h3 ng-hide="edit">Edit user</h3>
                <div class="form-group">
                    <label class="col-sm-2 control-label">First Name:</label>
                    <div class="col-sm-10">
                      <input type="text" ng-model="first_name" ng-disabled="!edit" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Last Name:</label>
                    <div class="col-sm-10">
                      <input type="text" ng-model="last_name" ng-disabled="!edit" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10">
                      <input type="password" ng-model="password" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Repeat Password:</label>
                    <div class="col-sm-10">
                      <input type="password" ng-model="rep_password" placeholder="Repeat Password">
                    </div>
                </div>
                <button class="btn btn-success" ng-disabled="error || incomplete">
                    <span class="glyphicon glyphicon-save"></span> Save Changes
                </button>
            </form>
        </div>
        <script>
            angular.module("fstApp",[]).controller("fstCont",function($scope){
                $scope.first_name = '';
                $scope.last_name = '';
                $scope.password = '';
                $scope.rep_password = '';
                $scope.users = [
                    {id:1, first_name:'Lional',last_name:"Messi" },
                    {id:2, first_name:'Neymar',last_name:"Jr" },
                    {id:3, first_name:'Louis',last_name:"Suraz" },
                    {id:4, first_name:'Eden',last_name:"Hazzrad" },
                    {id:5, first_name:'Zlatan',last_name:"Ibrimovich" },
                    {id:6, first_name:'Peter',last_name:"Cech" }
                ];
                $scope.hideform = true;
                $scope.edit = true;
                $scope.error = false;
                $scope.incomplete = false;
                $scope.editUser = function(id)
                {
                    $scope.hideform = false;
                    if(id =='new')
                    {
                        $scope.edit = true;
                        $scope.incomplete =true;
                        $scope.first_name = '';
                        $scope.last_name = '';
                    }
                    else{
                        $scope.edit = false;
                        $scope.first_name = $scope.users[id-1].first_name;
                        $scope.last_name = $scope.users[id-1].last_name; 
                    }
                };
                $scope.$watch('password',function(){$scope.test();});
                $scope.$watch('rep_password',function(){$scope.test();});
                $scope.$watch('first_name',function(){$scope.test();});
                $scope.$watch('last_name',function(){$scope.test();});
                $scope.test=function(){
                    if($scope.password !==$scope.rep_password)
                    {
                        $scope.error = true;
                    }
                    else{
                        $scope.error = false;
                    }
                    $scope.incomplete = false;
                    if($scope.edit && (!$scope.first_name.length || !$scope.last_name.length || !$scope.password.length || !$scope.rep_password.length))
                    {
                        $scope.incomplete = true;
                    }
                };
            });
        </script>
    </body>
</html>

