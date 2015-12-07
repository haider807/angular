<!DOCTYPE html>
<html lang="en-US">
<script src="../angular.min.js"></script>
<body style="margin: 0 300px; background: #ababab;">
   
<?php //include "menu.php";?>
    <h1>Angular Js Sample <span style="color: red;">Reverse String</span></h1>
    <div ng-app="reverseFilter" ng-controller="fstCont">
        <h2>My reverse app in ANGULAR JS</h2>
        <p>Let's try this simple notify service, injected into the controller...</p>
        <table>
            <tr>
                <td>String</td>
                <td><input type="text" ng-model="message"></td>
            </tr>
            
        </table>
        No filter: {{message}}<br>
        Reverse: {{message|reverse}}<br>
        Reverse + uppercase: {{message|reverse:true}}<br>
        
    </div>
    <script src="reverse.js"></script>
</body>
</html>