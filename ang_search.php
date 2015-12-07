<!doctype html>
<html ng-app>
<head>
  <meta charset="utf-8">
  <title>Top Animation</title>
  <script>document.write('<base href="' + document.location + '" />');</script>
  <link rel="stylesheet" href="style.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
  <script src="http://code.angularjs.org/1.1.5/angular.js"></script>
</head>
<body ng-init="names=['Igor Minar', 'Brad Green', 'Dave Geddes', 'Naomi Black', 'Greg Weber', 'Dean Sofer', 'Wes Alvaro', 'John Scott', 'Daniel Nadasi'];">
  <div class="well" style="margin-top: 30px; width: 200px; overflow: hidden;">
    <form class="form-search"> 
        <div class="input-append">
          <input type="text" ng-model="search" class="search-query" style="width: 80px">
          <button type="submit" class="btn">Search</button>
        </div>
        <ul class="nav nav-pills nav-stacked">
          <li ng-animate="'animate'" ng-repeat="name in names | filter:search">
            <a href="#"> {{name}} </a>
          </li> 
      </ul>
    </form>
  </div>
</body>
</html>
