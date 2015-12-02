<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular <span style="color: red;">ng-controller</span></h1>
    <div ng-app="fstApp" ng-controller="fstCont">
        First Name:<input type="text" ng-model="first_name"><br>
        Last Name:<input type="text" ng-model="last_name">
    </div>

</body>
</html>