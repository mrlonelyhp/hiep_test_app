@extends('layouts.master')
@section('title', 'Dev Team App')
@section('content')
    <div ng-controller="MembersController">
    <div class="btn-toolbar">
        <div class="btn-group">
            <button id="btn-add" class="btn btn-primary" ng-click="toggle('add', 0)">
                <span class="glyphicon glyphicon-plus"></span> Add New Member
            </button>
        </div>
    </div>

    <!-- Table-to-load-the-data Part -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Joined Date</th>
            <th>Photo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="member in members">
            <td>[[ member.id ]]</td>
            <td>[[ member.name ]]</td>
            <td>[[ member.age ]]</td>
            <td>[[ member.address ]]</td>
            <td>[[ member.joined_at ]]</td>
            <td>[[ member.photo ]]</td>
            <td>
                <button class="btn btn-primary btn-details" ng-click="toggle('view', member.id)">View Details</button>
                <button class="btn btn-warning btn-edit" ng-click="toggle('edit', member.id)">Edit</button>
                <button class="btn btn-danger btn-delete" ng-click="confirmDelete(member.id)">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">[[form_title]]</h4>
                </div>
                <div class="modal-body">
                    <form name="frmMembers" class="form-horizontal" novalidate="">

                        <div class="form-group error">
                            <label for="inputName" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="inputName" name="name" placeholder="Fullname" value="[[name]]" ng-model="member.name" ng-required="true">
                                <span class="help-inline" ng-show="frmMembers.name.$invalid && frmMembers.name.$touched">Name field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAge" class="col-sm-3 control-label">Age</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAge" name="age" placeholder="Age" value="[[age]]" ng-model="member.age" ng-required="true">
                                <span class="help-inline" ng-show="frmMembers.age.$invalid && frmMembers.age.$touched">Age field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" value="[[address]]" ng-model="member.address" ng-required="true">
                                <span class="help-inline" ng-show="frmMembers.address.$invalid && frmMembers.address.$touched">Address field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputJoinDate" class="col-sm-3 control-label">Join Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputJoinDate" name="join_at" placeholder="Join Date" value="[[join_at]]" ng-model="member.join_at" ng-required="true">
                                <span class="help-inline" ng-show="frmMembers.join_at.$invalid && frmMembers.join_at.$touched">Join Date field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPhoto" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="inputPhoto" name="photo" placeholder="Photo" value="[[photo]]" ng-model="member.photo" ng-required="true">
                                <span class="help-inline" ng-show="frmMembers.photo.$invalid && frmMembers.photo.$touched">Photo field is required</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmMembers.$invalid">Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop