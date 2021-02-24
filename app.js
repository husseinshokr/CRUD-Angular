//insert Data
var app = angular.module('myApp', []);
app.controller('usercontroller', function($scope, $http) {
    $scope.btnName = "ADD";
    $scope.insertData = function(){
        if($scope.firstname == null){
            alert("First Name is required");
        }else if($scope.lastname == null){
            alert("Last Name is required");
        }else{
            $http.post(
                "insert.php",
                {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'btnName':$scope.btnName, 'id':$scope.id}
            ).success(function(data){
                alert(data);
                $scope.firstname = null;
                $scope.lastname = null;
                $scope.btnName = "ADD";
                $scope.displayData();
            });
        }
    }
    //for display data
    $scope.displayData = function(){
        $http.get("display.php")
            .success(function(data){
                //alert(data);
                $scope.names = data;
                $scope.displayData();
            });
    }
    //for delete data
    $scope.deleteData = function(id){
        if(confirm("Are you sure you want to delete this data?")){
            $http.post(
                "del.php", 
                {'id':id}
            ).success(function(data){
                alert(data);
                $scope.displayData();
            });
        }else{
            return false;
        }
    }
    //for edit data
    $scope.updateData = function(id, first_name, last_name){
        $scope.id = id;
        $scope.firstname = first_name;
        $scope.lastname = last_name;
        $scope.btnName = "Update";
    }
});