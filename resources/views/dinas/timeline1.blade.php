@extends('dinas.navbar3')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                {{session('success')}}
            </div>
            @endif
            <div class="card card-info border-primary mb-3">
                <div class="card-header text-white bg-primary mb-3">
                    <h3 class="card-title text-center">Batas Waktu Pengerjaan</h3>
                </div>
                <form method="post" action="{{ route('timeline1.update1', $pengaduan->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="input-group mb-3" id="datetimepicker1" data-target-input="nearest">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id="time" name="time" value="time" class="form-control datetimepicker-input" data-target="#datetimepicker1" data-toggle="datetimepicker" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 5em">Simpan</button>
                    </div>
                </form>
            </div>
            <h1>
                <script>
                    CountDownTimer('{{$pengaduan->created_at}}', 'pengaduan');

                    function CountDownTimer(dt, id) {
                        var end = new Date('{{$pengaduan->time}}');
                        var _second = 1000;
                        var _minute = _second * 60;
                        var _hour = _minute * 60;
                        var _day = _hour * 24;
                        var timer;

                        function showRemaining() {
                            var now = new Date();
                            var distance = end - now;
                            if (distance < 0) {

                                clearInterval(timer);
                                document.getElementById(id).innerHTML = '<h5 class="text-danger">Batas Waktu Pengerjaan Telah Berakhir</h5>';
                                return;
                            }
                            var days = Math.floor(distance / _day);
                            var hours = Math.floor((distance % _day) / _hour);
                            var minutes = Math.floor((distance % _hour) / _minute);
                            var seconds = Math.floor((distance % _minute) / _second);

                            document.getElementById(id).innerHTML = days + 'days ';
                            document.getElementById(id).innerHTML += hours + 'hrs ';
                            document.getElementById(id).innerHTML += minutes + 'mins ';
                            document.getElementById(id).innerHTML += seconds + 'secs ';
                            document.getElementById(id).innerHTML += '<h5 class="text-danger">Batas Waktu Pengerjaan Belum Berakhir</h5>';
                        }
                        timer = setInterval(showRemaining, 1000);
                    }
                </script>
                <div id="pengaduan" style="text-align: center">
            </h1>
        </div>
    </div>
</div>
@endsection