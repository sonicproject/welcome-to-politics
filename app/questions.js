angular.module('questions',[

])
.controller('MainCtrl', function($scope) {
    $scope.categories = [
        {"id": 0, "name":"2016 Presidential Race"},
        {"id": 1, "name":"Current Issues"},
        {"id": 2, "name":"Social Issues"},
        {"id": 3, "name":"The Economy"},
        {"id": 4, "name":"Education"},
        {"id": 5, "name":"Environment"},
        {"id": 6, "name":"Security & Defense"},
        {"id": 7, "name":"Religon"},
        {"id": 8, "name":"World Events"},
        {"id": 9, "name":"Science & Technology"},
        {"id": 10, "name":"Laws & Crime"},
        {"id": 11, "name":"Health"},
        {"id": 12, "name":"Government"},
        {"id": 13, "name":"Human Rights"}
    ];
})
;
