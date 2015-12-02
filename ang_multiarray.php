<!DOCTYPE html>
<html lang="en-US">
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Print a Multi array of info using <span style="color: red;">ng-repeat</span></h1>
    <div ng-app="" ng-init="info=[
                {name:'Lional Messi',possition:'Striker',club:'Fc Barcelona',country:'Argentina'},
                {name:'Neymar Jr',possition:'Striker',club:'Fc Barcelona',country:'Brazil'},
                {name:'James Rodriguz',possition:'Midfielder',club:'Real Midrid',country:'Columbia'},
                {name:'Diego Goddin',possition:'Defender',club:'Athletico Midrid',country:'Uroguay'},
                {name:'Andrew Inesta',possition:'Midfielder',club:'FC Barcelona',country:'Spain'}]">
        <ol>
            <li ng-repeat="x in info">{{x.name}} plays as a {{x.possition}} in {{x.club}} born in {{x.country}} </li>
        </ol>
</body>
</html>