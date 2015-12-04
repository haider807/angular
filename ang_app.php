<!DOCTYPE html>
<html ng-app="mynotePad" lang="en-US">
<script src="angular.min.js"></script>
<body>
   
<?php //include "menu.php";?>
    <h1>Angular Js Sample <span style="color: red;">Application</span></h1>
    <div ng-controller="fstCont">
        <h2>My Notepad in ANGULAR JS</h2>
        <textarea ng-model="mytxtarea" rows="10" cols="35"></textarea>
        <p>
            <button ng-click="save();">Save</button>
            <button ng-click="clear();">Clear</button>
        </p>
        <p> Number of character's left 
            <span ng-bind="left();"></span>
        </p>
    </div>
    <script src="mynotepad.js"></script>
    <script src="mynoteCtr.js"></script>
</body>
</html>