@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Jadwal</h3></div>
                    <div class="card-content">
                        <div class="pull-right" style="margin-right: 20px">
                            <a href="{{ url('/jadwal') }}" title="Back">
                                <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                          aria-hidden="true"></i> Back
                                </button>
                            </a>
                            <a href="{{ url('/jadwal/' . $jadwal->id . '/edit') }}" title="Edit Jadwal">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="{{ url('jadwal' . '/' . $jadwal->id) }}" accept-charset="UTF-8"
                                  style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Jadwal"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                                 aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                        <br/>
                        <br/>
                        <br/>

                        <div class="col-md-12 table-responsive">
                            <label> Title</label>
                            <div> {{ $jadwal->title }} </div>
                            <br>
                            @if(isset($jadwal->category))
                                <label> Category</label>
                                <div>
                                    {{$jadwal->category->name}}

                                </div>
                                <br>
                            @endif
                            <label> Body</label>
                            <div>{!! $jadwal->body  !!} </div>
                            <br>
                            <label> Image</label>
                            <div>
                                <img src="{{Illuminate\Support\Facades\Storage::url($jadwal->image)}}">
                            </div>
                            <br>

                            <label> Type</label>
                            <div><strong>{{ strtoupper($jadwal->type) }} </strong></div>
                            <br>

                            <label> Published</label>
                            <div>
                                @if($jadwal->published == "1")
                                    <strong class="text-success"> Published </strong> @else
                                    <strong class="text-warning"> Unpublished</strong> @endif
                            </div>
                            <br>
                            @if($jadwal->published == "1" && isset($jadwal->published_at))
                                <label> Published At</label>
                                <div>
                                    {{\Carbon\Carbon::parse($jadwal->published_at)->toDayDateTimeString()}}

                                </div>
                                <br>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
