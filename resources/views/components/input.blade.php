<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{old('$name')}}">
    <span class="text-danger">
        @error('$label')
            {{$message}}
        @enderror
    </span>
</div>
