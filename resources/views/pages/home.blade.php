@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <h1>
          Beranda
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i>Beranda</a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Update Status</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">
            <form method="POST" action="{{route('buatStatus')}}" class="form-horizontal">
                @csrf
                <div class="form-group">
                  <textarea name="konten" class="form-control" rows="3" placeholder="Apa yang anda pikirkan?"></textarea>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Bagikan</button>
                </div>
            </form>
          </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
          @foreach (App\Status::get() as $status)
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image">
                <span class="username"><a href="#">{{App\User::where('id', '=', $status->user_id)->value('name') }}</a></span>
                <span class="description">{{ $status->created_at->diffForHumans() }}</span>
              </div>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              {{--  <img class="img-responsive pad" src="img/photo2.png" alt="Photo">  --}}
              <p>{{$status->konten}}</p>
              {{--  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>  --}}
              <form action="{{route('like')}}" method="post">
                @csrf
                <button name="status_id" type="submit" class="btn btn-default btn-xs" value="{{$status->id}}"><i class="fa fa-thumbs-o-up"></i>Like</button>
              </form>
              <span class="pull-right text-muted">{{App\Like::where('status_id', '=', $status->id)->count()}} like - {{App\Comment::where('status_id', '=', $status->id)->count()}} comments</span>
            </div>
            <div class="box-footer box-comments">
              @foreach (App\Comment::where('status_id', '=', $status->id)->get() as $comment)
                <div class="box-comment">
                  <img class="img-circle img-sm" src="{{asset('assets/img/user3-128x128.jpg') }}" alt="User Image">
                  <div class="comment-text">
                        <span class="username">
                          {{App\User::where('id', '=', $comment->user_id)->value('name')}}
                          <span class="text-muted pull-right">{{$comment->created_at->diffForHumans()}}</span>
                        </span>
                        <p>{{$comment->konten}}</p>
                  </div>
                </div>
              @endforeach              
            </div>
            <div class="box-footer">
              <form action="{{ route('buatKomentar') }}" method="post">
                @csrf
                <input name"status_id" type="hidden" value="{{$status->id}}">
                <img class="img-responsive img-circle img-sm" src="{{ asset('assets/img/user4-128x128.jpg') }}" alt="Alt Text"> 
                <div class="img-push">
                  <input name="konten" type="text" class="form-control input-sm" placeholder="Tekan enter untuk mengirim komentar">
                  <input name="status_id" type="hidden" class="form-control input-sm" value="{{$status->id}}">
                </div>
              </form>
            </div>
          </div>
          @endforeach
      </section>
    </div>
</div>
@endsection