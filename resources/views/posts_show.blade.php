@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{ $data->title}}</h3></div>

                <div class="panel-body">

                    <p class="lead">
                        @if(!empty($data->content))
                        {{ $data->content }}

                        @else
                        no content!!!
                        @endif

                    <pre>{{$data}}</pre>

                    </p>
                </div>
                <div class="panel-footer">


                    <div class="conmments" style="margin-top: 100px;">
                        @forelse ($data->hasManyComments as $comment)

                        <div class="one" style="border-top: solid 2px #efefef; padding: 5px 20px;">
                            <div class="nickname" data="{{ $comment->nickname }}">
                                @if ($comment->nickname)
                                <h3>{{ $comment->nickname }}</h3>
                                @else
                                <h3>{{ $comment->nickname }}</h3>
                                @endif
                                <h6>{{ $comment->email }}&nbsp;&nbsp;{{ $comment->created_at }}</h6>
                            </div>
                            <div class="content">
                                <p style="padding: 10px;">
                                    {{ $comment->content }}
                                </p>
                            </div>
                            <div class="reply" style="text-align: right; padding: 5px;">
                                <a href="#new" onclick="reply(this);">回复</a>
                            </div>
                        </div>
                        @empty
                        no comment!!!

                        @endforelse
                    </div>


                    Panel footer


                    <div class="panel panel-default">
                        <div class="panel-body">

                            <form action="{{ URL('comment/store') }}" method="post">
                                <div class="form-group">
                                    <label for="nickname">nickname</label>
                                    <input type="text" class="form-control" id="nickname" name="nickname"
                                           placeholder="nickname">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="content">content</label>
                                    <textarea class="form-control" rows="3" name="content" id="content"
                                              placeholder="content"></textarea>
                                </div>
                                <input type="hidden" name="posts_id" value="{{ $data->id }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
