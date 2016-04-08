
sampleApp.controller('formtCtrl', ['$scope', '$http',
    function ($scope, $http) {

        var resget = $http.get('http://localhost/supmti-Gabsence/public/allStudents.json');
        resget.success(function(data, status, headers, config) {
            $scope.data = data;
        });
        resget.error(function(data, status, headers, config) {
            alert( "erreur message: " + JSON.stringify({data: data}));
        });

        $scope.save = function () {
            var student = {
                "nom" : $scope.nom,
                "prenom" : $scope.prenom,
                "cni" : $scope.cni,
                "cne" : $scope.cne,
                "tel" : $scope.tel,
                "adresse" : $scope.adresse
            };
            var res = $http.post('http://localhost/supmti-Gabsence/public/addStudent', student);
            res.success(function(data, status, headers, config) {
                $scope.msg = data;
                $scope.data.push(student);
            });
            res.error(function(data, status, headers, config) {
                alert( "failure message: " + JSON.stringify({data: data}));
            });
        };
    }
]);

