<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Sample ng-disabled <span style="color: red;">DOM</span></h1>
    <div ng-app="" ng-init="myCheck=true">
        <button ng-disabled="myCheck">Hello</button><br>
        <input type="checkbox" ng-model="myCheck"/>Button
        <p>Check box value {{myCheck}}</p>
    </div>
   
</body>
</html>