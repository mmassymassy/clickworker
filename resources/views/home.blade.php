@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>List of workers</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ln Url</th>
                            <th scope="col">Code</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($workers as $w)
                            <tr>
                                <th scope="row">{{ $w->id }}</th>
                                <td>{{ $w->email }}</td>
                                <td>{{ $w->lnurl }}</td>
                                <td>{{ $w->code }}</td>
                                <td >
                                    <form style="display: inline-block;" method="POST" action="/worker/{{ $w->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <button class="btn btn-primary">Action</button>
                                </td>
                              </tr>
                                
                            @endforeach
                        </tbody>
                      </table>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
