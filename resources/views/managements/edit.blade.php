@extends('managements.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white">Edit Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('managements.index') }}" class="btn btn-outline-info">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('managements.update',$management->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">Name:</strong>
                    <input type="text" name="name" value="{{ $management->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $management->detail }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">email:</strong>
                    <input type="email" name="email" value="{{ $management->email }}" class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">created_by:</strong>
                    <input type="text" name="created_by" value="{{ $management->created_by }}" class="form-control" placeholder="created_by">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">status:</strong>
                    <input type="text" name="status" value="{{ $management->status }}" class="form-control" placeholder="status">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: white">description:</strong>
                    <input type="text" name="description" value="{{ $management->description }}" class="form-control" placeholder="description">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-outline-danger">Save</button>
            </div>
        </div>

    </form>
@endsection
