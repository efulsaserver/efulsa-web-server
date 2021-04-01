@extends('blogs.layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">
        <h1 class="text-center">efulSA Blog</h1>
            <div class="row mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <buttont type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add</button>
                        </div>
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-lg-6">
                                <div class="card-body">
                                        
                                        <h3 class="text-center">{{ $post->title }} </h3>
                                        <small>{{ date('l, d F Y', strtotime($post->created_at)) }}</small>
                                        <div class="card-header">
                                        <img src="{{ $post->image }}" alt="{{ $post->image }}">
                                        <pre>{{ $post->content }} </pre>
                                        </div> 
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('blog.store') }}" method="post" multipart="form-data">
        @csrf
            <div class="form-group">
                <label for="title"> Judul Postingan </label>
                <input class="form-control form-control-sm" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="content"> Isi Kontent </label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image"> Gambar </label>
                <input class="form-control form-control-sm" type="file" name="image" id="image">
            </div>
            <button class="btn btn-sm btn-block btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection