angular.module('questions',[

])
.controller('MainCtrl', function($scope) {
    $scope.categories = [
        {"id": 0, "name":"2016 Presidential Race"},
        {"id": 1, "name":"Health"},
        {"id": 2, "name":"Religon"},
        {"id": 3, "name":"Education"},
        {"id": 4, "name":"The Economy"},
        {"id": 5, "name":"Government"},
        {"id": 6, "name":"World Events"},
        {"id": 7, "name":"Laws & Crime"},
        {"id": 8, "name":"Human Rights"},
        {"id": 9, "name":"Social Issues"},
        {"id": 10, "name":"The Environment"},
        {"id": 11, "name":"Security & Defense"},
        {"id": 12, "name":"Science & Technology"}
    ];
})
;
