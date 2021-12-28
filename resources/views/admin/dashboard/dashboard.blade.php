@extends('base')

@section('content')

    <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Reader</p>
                    <h3 class="card-title">{{$reader_count}}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <i class="material-icons">Data Gelombang</i>
                </div>
                <div class="card-content">
                    <p class="category">Category</p>
                    <h3 class="card-title">{{$category_count}}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Jadwal</p>
                    <h3 class="card-title">{{$jadwal_count}}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Nontifikasi</p>
                    <h3 class="card-title">{{$notification_count}}</h3>
                </div>
            </div>
        </div>


    </div>

@endsection