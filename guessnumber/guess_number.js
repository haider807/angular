/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = angular.module("guess_num",[]);
app.controller("guess_numCont",function GuessTheNumberController($scope){
    $scope.verifyGuess = function () 
    {
        $scope.deviation = $scope.original - $scope.guess;
        $scope.noOfTries = $scope.noOfTries + 1;
    };
    $scope.initializeGame = function () 
    {
        $scope.noOfTries = 0;
        $scope.original = Math.floor((Math.random() * 1000) + 1);
        $scope.guess = null;
        $scope.deviation = null;
    };
    $scope.initializeGame();
});

