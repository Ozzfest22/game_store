@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            <h1>Categories</h1>
        </div>
        <div class="card-body">

            <a class="btn btn-success mb-2" href="#" data-toggle="modal" data-target="#modalAddCategory">New Category</a>

            <table class="table table-striped mt-2 text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <form>
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modalEditCategory{{$category->id}}">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('categories.modals.modalEdit')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('categories.modals.modalCreate')
@stop

@section('css')

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop