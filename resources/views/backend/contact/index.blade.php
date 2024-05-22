@extends('backend.layouts.master')
@section('container')
<div>
        <div class="card-box mb-30"  style="min-height: 70vh;">
            <div class="pd-20">
                <h4 class="text-blue h4">Contact Table</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $key=>$contact)
                            <tr>
                                <td>{{ $contacts->firstItem() + $key }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>

                                <td>


                                    <form action="{{ route('admin.contact.destroy', $contact) }}" method="post"
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
                {{ $contacts->links() }}

            </div>
        </div>


    </div>
@endsection
