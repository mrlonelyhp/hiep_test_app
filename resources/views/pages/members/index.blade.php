@extends('layouts.master')
@section('title', 'Dev Team App')
@section('content')

    <div class="btn-toolbar">
        <div class="btn-group">
            <button id="btn-add" class="btn btn-primary" ng-click="toggle('add', 0)"><i
                        class="glyphicon glyphicon-plus"></i> Add New Member
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
            <th>Photo</th>
            <th>Joined Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="Member in members">
            <td>[[ Member.id ]]</td>
            <td>[[ Member.name ]]</td>
            <td>[[ Member.age ]]</td>
            <td>[[ Member.address ]]</td>
            <td>[[ Member.joined_at ]]</td>
            <td>[[ Member.photo ]]</td>
            <td>
                <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', Member.id)">Edit</button>
                <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(Member.id)">Delete</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">[[form_title]]</h4>
                </div>
                <div class="modal-body">
                    <form name="frmMembers" class="form-horizontal" novalidate="">

                        <div class="form-group error">
                            <label for="inputName" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="inputName" name="name"
                                       placeholder="Fullname" value="[[name]]"
                                       ng-model="Member.name" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="frmMembers.name.$invalid && frmMembers.name.$touched">Name field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAge" class="col-sm-3 control-label">Age</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAge" name="age"
                                       placeholder="Age" value="[[age]]"
                                       ng-model="Member.age" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="frmMembers.age.$invalid && frmMembers.age.$touched">Age field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAddress" name="address"
                                       placeholder="Address" value="[[address]]"
                                       ng-model="Member.address" ng-required="true">
                                    <span class="help-inline"
                                          ng-show="frmMembers.address.$invalid && frmMembers.address.$touched">Address field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputJoinDate" class="col-sm-3 control-label">Join Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputJoinDate" name="join_at"
                                       placeholder="Join Date" value="[[join_at]]"
                                       ng-model="Member.position" ng-required="true">
                                    <span class="help-inline"
                                          ng-show="frmMembers.join_at.$invalid && frmMembers.join_at.$touched">Join Date field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputJoinDate" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputJoinDate" name="join_at"
                                       placeholder="Join Date" value="[[join_at]]"
                                       ng-model="Member.position" ng-required="true">
                                    <span class="help-inline"
                                          ng-show="frmMembers.join_at.$invalid && frmMembers.join_at.$touched">Photo field is required</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)"
                            ng-disabled="frmMembers.$invalid">Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop