@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Slider Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.slider.index') }}">slider List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Slider Form</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="title">Title *</label>
                            <input class="form-control" id="title" type="text" name="title"
                                value="{{ old('title') }}">
                            <span class="text-warning">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="image"> Image*</label>

                            <input class="form-control" id="image" type="file" name="image">
                            <span class="text-warning">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th class="table-plus datatable-nosort">Title</th>
                            <th>Image</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $key=>$slider)
                            <tr>
                                <td>{{ $sliders->firstItem() + $key }}</td>
                                <td>{{ $slider->title }}</td>
                                <td><img src="{{ $slider->image }}" alt="" width="100px"></td>

                                <td>
                                    <a class="btn btn-outline-primary" href="{{ route('admin.slider.edit', $slider) }}">
                                        <i class="bi bi-pencil"></i></a>

                                    <form action="{{ route('admin.slider.destroy', $slider) }}" method="post"
                                        style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Are You sure want to delete')"> <i
                                                class="bi bi-trash3-fill"></i> </button>

                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="">
                                    <center> No data found.</center>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $sliders->links() }}

            </div>
        </div>
    </div>
    </div>
@endsection
