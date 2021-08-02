@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('category.store') }}" method="POST">@csrf
                <div class="card">
                    <div class="card-header">All Categories</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($categories)>0)
                                @foreach($categories as $key => $category)


                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="{{ route('category.edit',[$category->id]) }}">
                                            <button class="btn btn-outline-success">
                                                Edit
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-outline-danger">
                                                Delete
                                            </button>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <td>No category to display</td>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection