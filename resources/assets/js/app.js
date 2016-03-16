var app = angular.module('memberRecords', []).constant('API_URL', 'http://hiepnm/members/');
app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});