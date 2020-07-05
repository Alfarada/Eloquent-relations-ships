<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $user->name }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
    </head>
    <body>
        <div class="container my-3 pt-3 shadow">
            <div class="row">
                <div class="col-12">
                    <img src=" {{ $user->image->url }}" class="float-left rounded-circle mr-2" >
                    <h1> {{ $user->name }}</h1>
                    <h3> {{ $user->email }}</h3>
                    <ul>
                        <li><strong> Instagram </strong> : {{ $user->profile->instagram }}</li>
                        <li><strong> Github </strong> : {{ $user->profile->github }}</li>
                        <li><strong> Website </strong> : {{ $user->profile->web }}</li>
                        <li><strong> Contry </strong> : {{ $user->location->country }}</li>    
                        @if ($user->level)
                            <li><strong> Level </strong> : <a href="#"> {{ $user->level->name }} </a> </li>
                        @else
                            <li><strong> --- </strong></li>
                        @endif 
                    </ul>
                    <hr>
                    <p><strong> Groups </strong> : 
                        @forelse ($user->groups as $group)
                            <span class="badge badge-primary"> {{ $group->name }} </span>
                        @empty
                            <em>Does not belong to any group</em>
                        @endforelse
                    </p>
                    <hr>

                    <h3> Posts </h3>
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src=" {{ $post->image->url }}" class="card-img">
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title">{{ $post->name }}</h5>
                                            <h6 class="card-subtitle text-muted">
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
                        @endforeach
                    </div>

                    <h3> Videos </h3>
                    <div class="row">
                        @foreach ($videos as $video)
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src=" {{ $video->image->url }}" class="card-img">
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title">{{ $video->name }}</h5>
                                            <h6 class="card-subtitle text-muted">
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
                        @endforeach
                    </div>

                </div>
            </div> 
        </div>
    </body>
</html>
