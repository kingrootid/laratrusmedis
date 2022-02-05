@extends('template')
@section('view')
<div class="row">
    <div class="col-6 m-auto text-center">
        <h3 class="text-semibold">Mayjen Sungkono</h3>
        <h6>Surabaya</h6>
    </div>
</div>
<h4 id="time">{time}</h4>
<div class="row">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Specialist</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center d-flex" style="flex-direction: column;">
                                <img src="https://t4.ftcdn.net/jpg/03/02/68/11/360_F_302681154_9HOWdvGLtCKpfwO5B85yESszG7MfmlUl.jpg" class="img-fluid" alt="">
                                <p>Dentist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center d-flex" style="flex-direction: column;">
                                <img src="https://t4.ftcdn.net/jpg/03/02/68/11/360_F_302681154_9HOWdvGLtCKpfwO5B85yESszG7MfmlUl.jpg" class="img-fluid" alt="">
                                <p>Dentist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center d-flex" style="flex-direction: column;">
                                <img src="https://t4.ftcdn.net/jpg/03/02/68/11/360_F_302681154_9HOWdvGLtCKpfwO5B85yESszG7MfmlUl.jpg" class="img-fluid" alt="">
                                <p>Dentist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center d-flex" style="flex-direction: column;">
                                <img src="https://t4.ftcdn.net/jpg/03/02/68/11/360_F_302681154_9HOWdvGLtCKpfwO5B85yESszG7MfmlUl.jpg" class="img-fluid" alt="">
                                <p>Dentist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right mr-4">
                    <a href="{{ url('doctor') }}" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    setInterval(function() {
        var time = moment().format('MMMM Do YYYY, h:mm:ss a');
        $('#time').html(time);
    }, 1000);
    $(document).ready(function() {
        $("#time").html(time);
    });
</script>
@endsection