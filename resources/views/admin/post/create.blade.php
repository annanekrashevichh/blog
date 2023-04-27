@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <h1 class="mb-4">Post addition</h1>

                </div>


                <form action="{{ route('admin.post.store') }}" method="POST" class="w-100" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-sm-6 col-md-4">
                        <input type="text" class="form-control" name="title" placeholder="Post title"
                        value="{{ old('title') }}">
                        @error('title')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col">
                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6 col-md-4">
                        <label for="exampleInputFile">Add preview</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="preview_image">
                                <label class="custom-file-label">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6 col-md-4">
                        <label for="exampleInputFile">Add main image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image">
                                <label class="custom-file-label">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6 col-md-4">
                        <label>Select category</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? ' selected' : '' }}
                                >{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-6 col-md-4">
                        <label>Select tags</label>
                        <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select tags" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col">
                        <input type="submit" class="btn btn-default" value="Add">
                    </div>
                </form>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
