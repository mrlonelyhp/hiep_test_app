@extends('layouts.master')
@section('title', 'Add New Member')
@section('content')
    {!! Form::open(['url' => 'members']) !!}
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('age', 'Age:') !!}
                        {!! Form::text('age', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {!! Form::label('address', 'Address:') !!}
                        {!! Form::textarea('address', null, ['class'=>'form-control', 'rows'=>'6']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('joined_at', 'Join Date:') !!}
                        {!! Form::input('date', 'joined_at', date('d-m-Y'), ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('photo', 'Photo:') !!}
                        {{ Html::image('assets/images/member.jpg', 'photo', ['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::file('upload', ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                {!! Form::submit('Cancel', ['class'=>'btn btn-default']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop