<!DOCTYPE html>
<html>
<script src="../angular.min.js"></script>
<link rel="stylesheet" href = "../bootstrap.min.css">
<head>
    <style>
        body { padding-top:30px; }
    </style>
</head>
<body style="margin: 0 300px; background: #ababab;">
<?php //include "menu.php";?>
    <h1>Angular Sample  <span style="color: red;">Guess Numbers</span></h1>
    <div ng-app="guess_num" ng-controller="guess_numCont">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Guess the number dude!</h2>
                    <p class="well lead">Guess the computer generated number between 0 to 1000</p>
                    <label>Your guess</label><input type="number" ng-model="guess" />
                    <button ng-click="verifyGuess();" class="btn btn-primary btn-sm">Verify</button>
                    <button ng-click="initializeGame();" class="btn btn-warning btn-sm">Initialize</button>
                    <p>
                        <p ng-show="deviation<0" class="alert alert-warning">Your guess is higher</p>
                        <p ng-show="deviation>0" class="alert alert-warning">Guess is lower</p>
                        <p ng-show="deviation === 0" class="alert alert-success">Wao! You have Guess the right number</p>
                    </p>
                    <p class="text-info">
                        Number of guesses: {{noOfTries}}
                    </p>
            </div>
        </div>
    </div>
    <script src="guess_number.js"></script>
</body>
</html>
