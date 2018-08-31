 @extends('layouts.app')

  @section('content')
    <div class="container">
    
      <div class="starter-template">
        <div class="media">
          <img class="media-object pull-left"alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
          <div class="media-body">
            <h2 class="media-heading" style="font-size: 26px;">Album Name:</h2> <p>{{$album->name}}</p>
          <div class="media">
          <h2 class="media-heading" style="font-size: 26px;">Album Description :</h2> <p>{{$album->description}}<p>
          <a href="{{URL::route('add_image',array('id'=>$album->id))}}"><button type="button"class="btn btn-primary btn-large">Add Image</button></a>
          <a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are you sure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
          <a href="{{URL::route('update_album',array('id'=>$album->id))}}"><button type="button"class="btn btn-primary btn-large">Update Album</button></a>
        </div>
      </div>
    </div>
    </div>
      <div class="row">
        @foreach($album->Photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
              <div class="caption">
                <p>{{$photo->description}}</p>
                <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></p>
                <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btnbtn-danger btn-small">Delete Image</button></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
@endsection