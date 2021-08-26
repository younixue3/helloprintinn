@extends('template/public/master')
@section('title', 'Gallery')
@section('content')
<div class="container" id="index-banner-gallery">
    <div class="row center">
        @foreach ($data as $value)
            <img class="materialboxed col l4 m4 hoverable" id="gallery-content" 
            data-caption="{{$value->description}}" 
            width="150" height="240" 
            src="{{ asset ('Upload/image_content/'.$value->image_content)}}">
        @endforeach
        <div>
    </div>
</div>
    <div>
        {{ $data->links() }}
    </div>
</div>

<style>
    #gallery-content {
        padding-bottom: 10px;
    }

    #index-banner-gallery {
      padding-top: 20px;
    }

    #text_align {
        margin: auto;
    }
</style>
@endsection