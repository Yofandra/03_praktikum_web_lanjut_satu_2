@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Selamat Datang</center>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<center>&copy; Kelompok 5</center>
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
    toastr["success"]("Selamat Datang")
</script>
@stop