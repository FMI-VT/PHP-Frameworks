@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tutors
                        <a href="{{ URL::to('admin/tutors/create') }}" class="pull-right">Create a Tutor</a>
                    </div>

                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
