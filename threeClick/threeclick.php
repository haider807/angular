<!DOCTYPE html>
<html lang="en-US">
<script src="../angular.min.js"></script>
<body style="margin: 0 300px; background: #ababab;">
   
<?php //include "menu.php";?>
    <h1>Angular Js Sample <span style="color: red;">Three Clicks</span></h1>
    <div id="simple" ng-app="myServiceModule" ng-controller="fstCont">
        <h2>My three clicks app in ANGULAR JS</h2>
        <p>Let's try this simple notify service, injected into the controller...</p>
        <table>
            <tr>
                <td>Message</td>
                <td><input ng-init="message='hello'" ng-model="message"></td>
            </tr>
            <tr>
                <td></td>
                <td><button ng-click="callNotify(message);">NOTIFY</button></td>
            </tr>
            
            
        </table>
        <p>(you have to click 3 times to see an alert)</p>
        
    </div>
    <script src="click.js"></script>
</body>
</html>