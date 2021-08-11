<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-4">
                    <div class="row">
                        <div class="col-lg-9">
                            <input type="text" placeholder="Post Title" class="form-control">
                            <textarea name="post_description" class="form-control mt-2" placeholder="Post Descrption"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($posts as $post_item)
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{asset('image/pl.jpg')}}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <b>{{$post_item->id}}</b>
                                        <h5 class="card-title">{{$post_item->title}}</h5>
                                        <p class="card-text">{{$post_item->description}}</p>
                                    </div>
                                    <ul class="tags">
                                        @foreach ($post_item->tags as $tag_item)
                                            <li style="margin-right:5px;"><span class="badge bg-secondary text-white">{{$tag_item->title}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul>
                        @foreach ($tags as $tag_item)
                            <li>{{$tag_item->id}}<b>Tag: </b> {{$tag_item->title}}</li>
                            <ul>
                                @foreach ($tag_item->posts as $post_item)
                                    <li><b>Post Title:</b> {{$post_item->title}}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>