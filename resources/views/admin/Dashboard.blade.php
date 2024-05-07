@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">
                        all Users Notes List
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th> Note Title</th>
                            <th> Note Detail</th>
                            <th> Note Created</th>
                            <th> Note Updated</th>
                        </tr>

                        @forelse ($note as $key=>$note)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $note->user->name }}</td>
                            <td>{{ $note->note_title }}</td>
                            <td>{{ $note->note_detail }}</td>
                            <td>{{ date('d M Y', strtotime($note->created_at)) }}</td>
                            <td>{{ date('d M Y', strtotime($note->updated_at)) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">No Data Found</td>
                        </tr>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
