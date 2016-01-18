@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @forelse($data as $posts)

                    <div class="list-group-item">
                        <h4><a href="{{ url('/posts/show/'.$posts->id) }}">{{ $posts->title }}</a></h4>

                        <p class="list-group-item-text">
                            {{ str_limit($posts->content, $limit = 100, $end = '......')
                            }}</p>


                        <div class="meta">
                            <i class="glyphicon glyphicon-time"></i>
                            <span class="timeago">{{ $posts->created_at }}</span>
                            <i class="glyphicon glyphicon-comment"></i>
                            <span>{{ $posts->hasManyComments->count() }} </span>
                            <i class="glyphicon glyphicon-user"></i>
                            <a href=""> {{ $posts->user->name }} </a>
                            <i class="glyphicon glyphicon-book"></i>
                            <a href="#">
                                {{ $posts->Category->name }} </a>

                        </div>


                    </div>


                    @empty
                    no centent!!!
                    @endforelse
                </div>
                <div class="panel-footer">

                    <?php echo $data->render(); ?>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
