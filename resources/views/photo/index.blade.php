@extends('tmp.index')

@section('content')
<div class="container">
<h1>Data Photo</h1>
<a href="{{ url("photo/create") }}" class="btn btn-primary">Tambah data</a>
<br>

@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
<div class="row">
    
    <div class="col-md-12">
        <div class="text-center">
            <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Post</th>
                    <th>Tanggal Photo</th>
                    <th>Photos</th>
                    <th>Photo Slug</th>
                    <th>Keterangan Foto</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($photo as $item)
                    <tr>
                    <td>{{ $loop-> iteration }}</td>
                    <td>{{ $item -> post-> post_title }}</td>
                    <td>{{ $item -> photo_date }}</td>
                    <td><img src="{{ asset('upload/'.$item->photo_title) }}" class="img-table" width="100px" height="100px"></td>
                    <td>{{ $item -> photo_slug }}</td>
                    <td>{{ $item -> photo_text }}</td>
                    <td class="text-center">
                        <a href="{{ url("/photo/{$item->photo_id}/edit") }}" class="btn btn-primary btn-sm">
                            Edit
                        </a>
                        <form action="{{ url ("/photo/{$item->photo_id}") }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                               Hapus 
                            </button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>
@endsection





