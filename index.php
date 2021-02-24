<!DOCTYPE html>
<html>
    <head>
        <title>AngularJS Tutorial with PHP - Insert Data into Mysql Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body ng-app="myApp" >
        <br /><br />
        <div class="container" style="width: 500px;">
            <h3 align="center">AngularJS Tutorial with PHP - Insert Data into Mysql Database</h3>
            <div ng-controller="usercontroller" ng-init="displayData()">
                <label for="">First Name</label>
                <input type="text" name="first_name" ng-model="firstname" class="form-control" />
                <!--{{ firstname }}-->
                <br/>
                <label for="">Last Name</label>
                <input type="text" name="last_name" ng-model="lastname" class="form-control" />
                <!--{{lastname}}-->
                <br/>
                <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}" />
                <br />
                <table class="table table-bordered">
                    <tr>
                        <th>S.no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr ng-repeat="x in names">
                        <td>{{x.id}}</td>
                        <td>{{x.first_name}}</td>
                        <td>{{x.last_name}}</td>
                        <td><input type="button" class="btn btn-info btn-xs" value="Update" ng-click="updateData(x.id, x.first_name, x.last_name)" /></td>
                        <td><input type="button" class="btn btn-danger btn-xs" value="Delete" ng-click="deleteData(x.id)"  /></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>

<script src="app.js"></script>