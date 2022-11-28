@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

            @foreach($medrecord as $key => $data)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Medical Record of </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        Date of Checkup:<span>{{ $data->checkup_followup}}</span>
                        Weight:<span>{{ $data->weight}}</span>
                        Height:<span>{{ $data->height}}</span>
                        Remarks:<span>{{ $data->remarks}}</span>
                        Remarks:<span>{{ $data->diagnosis}}</span>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        --Nothing Follows--
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            @endforeach
            <div class="mt-4">
                <a href="{{ route('children.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>
            </div>
        </div>
    </div>
</div>
@endsection