
@extends('master')

@section('content')

        @foreach($school as $item)
        <div class="trending-item card ">
          <img src="{{asset('images/'.$item->image)}}" width="200" class="img-thumbnail">
          <div class="card-text">
			<h6>{{$item['address']}}</h6>
			<h3>{{$item['name']}}</h3><br>
			<h5>{{$item['city']}}</h5>
          </div>
      
        </div>
        @endforeach
      </div>

	
	

@endsection('content')
