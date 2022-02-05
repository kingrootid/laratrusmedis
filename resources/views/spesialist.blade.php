@extends('template')
@section('view')
<div class="row">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Spesialist</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach($spesialist as $s)
                            <div class="col-10 m-auto">
                                <div class="card card-spesialist">
                                    <img src="{{ asset('images/specialist').'/'.$s->images }}">
                                    <div class="card-body">
                                        <p>{{ $s->name }}</p>
                                        <a href="{{url('spesialist').'/'.$s->name}}" class="btn btn-primary">Show Doctor</a>
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