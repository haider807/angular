<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body style="margin: 0 300px; background: #ababab;">
<?php //include "menu.php";?>
    <h1>Angular Sample  <span style="color: red;">Blur</span></h1>
    <div ng-app="blur_event" ng-controller="ExampleController">
        <form>
          Name:
          <input type="text" ng-model="user.name" ng-model-options="{ updateOn: 'blur' }" /><br />
          Other data:
          <input type="text" ng-model="user.data" /><br />
        </form>
        <pre>username = "{{user.name}}"</pre>
        <pre>userdata = "{{user.data}}"</pre>
    </div>
<script>
    angular.module('blur_event', [])
.controller('ExampleController', ['$scope', function($scope) {
  $scope.user = {};
}]);
</script>
</body>
</html>