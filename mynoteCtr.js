app.controller("fstCont", function($scope){
    $scope.message = "";
    $scope.left = function(){return 100 - $scope.mytxtarea.length;};
    $scope.clear = function(){ $scope.mytxtarea = "";};
    $scope.save = function() { alert('Not save');};
});


