<div class="modal fade" id="modalEditGame{{$game->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h2" id="exampleModalLabel">Edit Game</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <form action="{{route('updateGame', $game->id)}}" id="formCreate" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$game->name}}" id="nameGame" placeholder="Name">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control" value="{{$game->price}}" id="priceGame" placeholder="Price">
                                @if($errors->has('price'))
                                <span class="text-danger">{{$errors->first('price')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                    @foreach($categories as $key => $category)
                                        <option value="{{$key}}" @if($game->id_category == $key) selected @endif>{{$category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="ajaxSubmit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>