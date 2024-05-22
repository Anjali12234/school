@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Testimonial Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.testimonial.index') }}">Testimonial List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonial Form</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name">Name *</label>
                            <input class="form-control" id="name" type="text" name="name"
                                value="{{ old('name') }}">
                            <span class="text-warning">
                                @error('name')
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
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="post">Post *</label>
                            <input class="form-control" id="post" type="text" name="post"
                                value="{{ old('post') }}">
                            <span class="text-warning">
                                @error('post')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea_editor form-control border-radius-0" id="description" type="text"
                                name="description">{{ old('description') }}</textarea>

                            <span class="text-warning">
                                @error('description')
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
                            <th class="table-plus datatable-nosort">Name</th>
                            <th class="table-plus datatable-nosort">Post</th>
                            <th>Image</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $key=>$testimonial)
                            <tr>
                                <td>{{ $testimonials->firstItem() + $key }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->post }}</td>
                                <td><img src="{{ $testimonial->image }}" alt="" width="100px"></td>

                                <td>

                                    <a class="btn btn-outline-primary" href="{{ route('admin.testimonial.edit', $testimonial) }}">
                                        <i class="bi bi-pencil"></i></a>

                                    <form action="{{ route('admin.testimonial.destroy', $testimonial) }}" method="post"
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
                                <td colspan="5" class="">
                                    <center> No data found.</center>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $testimonials->links() }}

            </div>
        </div>
    </div>
    </div>
@endsection
