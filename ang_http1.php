<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Js Sample ng-if <span style="color: red;">HTTP Table Example</span></h1>
    <div ng-app="fstApp" ng-controller="fstCont">
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Is-active</th>
            </tr>
            <tr ng-repeat="x in info">
                <td ng-if="$even" style="background-color:#f1f1f1">{{x.id}}</td>
                <td ng-if="$odd">{{x.id}}</td>
                <td ng-if="$even" style="background-color:#f1f1f1">{{x.username}}</td>
                <td ng-if="$odd">{{x.username}}</td>
                <td ng-if="$even" style="background-color:#f1f1f1"> {{x.is_active}}</td>
                <td ng-if="$odd"> {{x.is_active}}</td>
            </tr>
        </table>
    </div>
   

<script>
    var app = angular.module('fstApp',[]);
    app.controller('fstCont',function($scope,$http){
        $http.get("http://localhost/angular/data.php")
        .then(function(resp){$scope.info = resp.data.records;});
    });
</script>
</body>
</html>