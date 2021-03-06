<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Usuarios de {{ $level->name }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Styles -->
</head>

<body>
    <div class="container my-3 pt-3 ">
        <div class="row">
            <div class="col-12 my-3 pt-3 shadow">
                <h1>User content level {{ $level->name }} </h1>
                <hr>
                <h3> Posts </h3>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src=" {{ $post->image->url }}" class="card-img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->name }}</h5>
                                        <h6 class="card-subtitle text-muted">
                                            {{ $user->level->name }} <br>
                                            {{ $post->category->name }} |
                                            {{ $post->comments_count }}
                                            {{ Str::plural('comment', $post->comments_count) }}
                                        </h6>
                                        <p class="card-text small">
                                            @foreach ($post->tags as $tag)
                                            <span class="badge badge-light">
                                                #{{ $tag->name }}
                                            </span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <h1>User content in video level {{ $level->name }} </h1>
                <hr>
                <div class="row">
                    @foreach ($videos as $video)
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src=" {{ $video->image->url }}" class="card-img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $video->name }}</h5>
                                        <h6 class="card-subtitle text-muted">
                                            {{ $user->level->name }} <br>
                                            {{ $video->category->name }} |
                                            {{ $video->comments_count }}
                                            {{ Str::plural('comment', $video->comments_count) }}
                                        </h6>
                                        <p class="card-text small">
                                            @foreach ($video->tags as $tag)
                                            <span class="badge badge-light">
                                                #{{ $tag->name }}
                                            </span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>