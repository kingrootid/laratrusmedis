@extends('template')
@section('view')
<div class="row">
    <div class="col-6 m-auto text-center">
        <h3 class="text-semibold">Mayjen Sungkono</h3>
        <h6>Surabaya</h6>
    </div>
</div>
<h4 id="time">{time}</h4>
<h4>Hi, {{(!is_null($user) ? $user->name : 'Tamu')}}</h4>
<div class="row">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Specialist</h4>
            </div>
            <div class="card-body">
                <div class="row doctor">
                    @foreach($specialist as $s)
                    <div class="col-3">
                        <div class="card">
                            <a href="{{url('spesialist').'/'.$s->name}}">
                                <div class="card-body card-doctor">
                                    <img src="{{ asset('images/specialist').'/'.$s->images }}">
                                    <p>{{ $s->name }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="float-right mr-4">
                    <a href="{{ url('spesialist') }}" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    setInterval(function() {
        moment.locale('id');
        var time = moment().format('MMMM Do YYYY, h:mm:ss a');
        $('#time').html(time);
    }, 1000);
    $(document).ready(function() {
        $("#time").html(time);
    });
</script>
@endsection