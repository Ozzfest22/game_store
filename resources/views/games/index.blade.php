@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            <h1>Games</h1>
        </div>
        <div class="card-body">

            <a class="btn btn-success mb-2" href="#" data-toggle="modal" data-target="#modalAddGame">New Game</a>

            <table class="table table-striped mt-2 text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($games as $game)
                    <tr>
                        <td>{{$game->id}}</td>
                        <td>{{$game->name}}</td>
                        <td>{{$game->price}}</td>
                        <td>{{$game->category->name}}</td>
                        <td>
                            <form>
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modalEditGame{{$game->id}}">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('games.modals.modalEdit')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('games.modals.modalCreate')

@stop

@section('css')

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop