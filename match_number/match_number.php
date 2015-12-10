<!DOCTYPE html>
<html lang="en-US">
    <script src="../angular.min.js"></script>
    <head>
        <style>
            .empty{
                border-style: solid;
                border-color: rgba(255, 135, 66, 0.75);
                background-color: rgba(252, 102, 2, 0.54);
            }

            .normal{
                color: black;
            }
        </style>
    </head>
    <body ng-app="ap" ng-controller="fstCon" style="margin: 0 300px; background: #ababab;">
        <h1>Angular Js Sample <span style="color: red ;">Match Numbers</span></h1>
        <table>
            <tr>
                <td>Number</td>
            </tr>
            <tr ng-repeat="person in persons">
                <td>
                    <ng-form name="personForm">
                     <div ng-class="{ 'has-error' : 
                        personForm.personName.$invalid }">
                        <input type='number'
                        name="personName"
                        ng-class="empty"
                        ng-model="person.name"
                        ng-change="verifyDuplicate()"/>
                       </div>
                     </ng-form>
                    <div class='error'
                        ng-if='person.isDuplicate'>
                        Duplicate.
                    </div>
                </td>
            </tr>
        </table> 
        <script>
            var app = angular.module("ap",[]);

            app.controller("fstCon",function($scope){

                $scope.persons = [
                    {name: 1},
                    {name: 2},
                    {name: 3}
                ];

                $scope.empty = "normal";

                $scope.verifyDuplicate = function() {
                    var sorted, i;

                    sorted = $scope.persons.concat().sort(function (a, b) {
                        if (a.name > b.name) return 1;
                        if (a.name < b.name) return -1;
                        return 0;
                    });
                    for(i = 0; i < $scope.persons.length; i++) {
                        sorted[i].isDuplicate = ((sorted[i-1] && sorted[i-1].name == sorted[i].name) || (sorted[i+1] && sorted[i+1].name == sorted[i].name));
                    }
                };
            });
        </script>
    </body>
</html>