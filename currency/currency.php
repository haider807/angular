<!DOCTYPE html>
<html lang="en-US">
<script src="../angular.min.js"></script>
<body style="margin: 0 300px; background: #ababab;">
   
<?php //include "menu.php";?>
    <h1>Angular Js Sample <span style="color: red;">Currency conversion</span></h1>
    <div ng-app="currency" ng-controller="fstCont as invoice">
        <h2>My currency conversion in ANGULAR JS</h2>
        <table>
            <tr>
                <td>QTY</td>
                <td><input type="number" min="0" ng-model="invoice.qty"></td>
            </tr>
            <tr>
                <td>COST</td>
                <td><input type="number" min="0" ng-model="invoice.cst"></td>
            </tr>
            <tr>
                <td>Select Currency</td>
                <td>
                    <select ng-model="invoice.inCur">
                        <option ng-repeat="c in invoice.currencies">{{c}}</option>>
                    </select>
                </td>
            </tr>
            
        </table>
        Total:
        <ul>
            <li ng-repeat="c in invoice.currencies">{{invoice.total(c) | currency:c}}</li>
        </ul>
    </div>
    <script src="currency.js"></script>
</body>
</html>

