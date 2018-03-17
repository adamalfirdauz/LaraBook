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
            <form method="POST" action="#" class="form-horizontal">
                @csrf
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Apa yang anda pikirkan?"></textarea>
                </div>
            </form>
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Bagikan</button>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
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
              <p>I took this photo this morning. What do you guys think?</p>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="{{asset('assets/img/user3-128x128.jpg') }}" alt="User Image">
                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
              </div>
              <div class="box-comment">
                <img class="img-circle img-sm" src="{{asset('assets/img/user4-128x128.jpg') }}" alt="User Image">
                <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
              </div>
            </div>
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="{{ asset('assets/img/user4-128x128.jpg') }}" alt="Alt Text">
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
          </div>
      </section>
    </div>
</div>
@endsection