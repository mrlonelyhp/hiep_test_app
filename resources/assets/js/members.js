app.controller('MembersController', function ($scope, $http, API_URL) {
    $scope.members = [];
    $scope.getMember = function () {
        $http.get('get_members')
            .then(function (data) {
                $scope.members = data.data;
            });
    };
    $scope.getMember();

    //show modal form
    $scope.toggle = function (modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'view':
                $scope.form_title = "View Details";
                $scope.go = function(path) {$location.path(path)}
                break;
            case 'add':
                $scope.form_title = "Add New Member";
                break;
            case 'edit':
                $scope.form_title = "Edit Member";
                $scope.id = id;
                $http.get(API_URL + 'members/' + id)
                    .success(function (response) {
                        //console.log(response);
                        $scope.Member = response;
                    });
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function (modalstate, id) {
        var url = "members";

        //append Member id to the URL if the form is in edit mode
        if (modalstate === 'edit') {
            url += "/" + id;
        }

        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.Member),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (response) {
            console.log(response);
            $scope.getMember();
        }).error(function (response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function (id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'members/' + id
            }).success(function (data) {
                console.log(data);
                location.reload();
            }).error(function (data) {
                console.log(data);
                alert('Unable to delete');
            });
        } else {
            return false;
        }
    }
});