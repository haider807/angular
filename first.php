<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
<div ng-app="">
 	<p>Name : <input type="text" ng-model="name"></p>
        <h1>Hello {{name}}</h1>
        <h3 ng-bind="name">Wao => </h3>
</div>

</body>
</html>