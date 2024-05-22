@extends('backend.layouts.master')
@section('container')
<div>
        <div class="card-box mb-30"  style="min-height: 70vh;">
            <div class="pd-20">
                <h4 class="text-blue h4">Staff Table</h4>
                <div class="mb-3 float-right justify-content-end">
                    <button class="btn btn-secondary"><a class="text-white " href="{{ route('admin.staff.create') }}">Add
                            +</a></button>

                </div>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($staffs as $key=>$staff)
                            <tr>
                                <td>{{ $staffs->firstItem() + $key }}</td>
                                <td>{{ $staff->full_name }}</td>
                                <td><img src="{{ $staff->image }}" alt="" width="100px"></td>
                                <td>
                                    <form action="{{ route('admin.staff.updateStaffStatus', $staff) }}" method="post"
                                        style="display: inline">
                                        @csrf
                                        @method('put')
                                        <button type="submit" style="border: none; background: none;">
                                            <i
                                                class="fa fa-{{ $staff->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ route('admin.staff.edit', $staff) }}">
                                        <i class="bi bi-pencil"></i></a>

                                    <form action="{{ route('admin.staff.destroy', $staff) }}" method="post"
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
                {{ $staffs->links() }}

            </div>
        </div>


    </div>
@endsection
