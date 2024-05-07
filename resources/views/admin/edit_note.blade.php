@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <div class="card mt-5 border border-dark">

                @if (session()->has('success'))
                    <div style="font-size: 15px" class="badge d-block bg-success">{{ session()->get('success') }}</div>
                @elseif(session()->get('error'))
                    <div style="font-size: 15px" class="badge d-block bg-danger">{{ session()->get('error') }}</div>
                @endif

                <div class="card-header">
                    <h3 class="card-title">
                        Edit Note
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('update',$note->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-2">
                                    <label for="title" class="form-label">Note Title</label>
                                    <input type="text" value="{{ $note->note_title }}" name="title" class="form-control">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="detail" class="form-label">Note Detail</label>
                                    <textarea name="detail" class="form-control" id="" cols="30" rows="5">{{ $note->note_detail }}</textarea>
                                    @error('detail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
