@extends('template')
@section('view')
<div class="row">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Doctor</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach($doctor as $d)
                            <div class="col-10 m-auto">
                                <div class="card" style="display: flex;flex-direction: row;">
                                    <img src="{{ asset('images/doctor').'/'.$d->images }}" class="img-thumbnail" style="width: 10rem !important;">
                                    <div class="card-body">
                                        <h4>{{ $d->name }}</h4>
                                        <p>{{ $spesialist->name }}</p>
                                        <a href="{{url('appointment').'/'.$d->id}}" class="btn btn-primary">Make Appointment</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection