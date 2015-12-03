<!DOCTYPE html>
<html>
<script src="angular.min.js"></script>
<body>
<?php //include "menu.php";?>
    <h1>Angular Js Sample Filter Looping <span style="color: red;">Controller</span></h1>
    <div ng-app="fstapp" ng-controller="fstcontoller">
        <input type="text" ng-model="search_val">
        <ol>
            <li ng-repeat="x in info | filter:search_val | orderBy:'country'">
                {{x.name}} plays as a {{x.possition}} in {{x.club}} born in {{x.country}} 
            </li>
        </ol>
    </div>
   

<script>
    
    angular.module('fstapp',[]).controller('fstcontoller',function($scope){
       $scope.info = [{name:'Lional Messi',possition:'Striker',club:'Fc Barcelona',country:'Argentina'},
                {name:'Neymar Jr',possition:'Striker',club:'Fc Barcelona',country:'Brazil'},
                {name:'James Rodriguz',possition:'Midfielder',club:'Real Midrid',country:'Columbia'},
                {name:'Diego Goddin',possition:'Defender',club:'Athletico Midrid',country:'Uroguay'},
                {name:'Andrew Inesta',possition:'Midfielder',club:'FC Barcelona',country:'Spain'}
            ];
    });
    
</script>

</body>
</html>