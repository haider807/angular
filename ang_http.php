<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
    <style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd)	{
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<?php //include "menu.php";?>
    <h1>Angular Js Sample <span style="color: red;">HTTP Example</span></h1>
    <div ng-app="fstApp" ng-controller="fstCont">
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Is-active</th>
            </tr>
            <tr ng-repeat="x in info">
                <td>{{x.id}}</td>
                <td>{{x.username}}</td>
                <td> {{x.is_active}}</td>
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