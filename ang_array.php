<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Print a single array of info using <span style="color: red;">ng-repeat</span></h1>
    <div ng-app="" ng-init="info=['Usman','Yasin','Tahir','Owais']">
        <ul>
            <li ng-repeat="x in info">{{x}}</li>
        <ul>
    </div>

</body>
</html>

