@props(['name','content','label'])

<div class="form-row  ">
        <label for="{{$name}}">{{$label}}</label>
        
          <textarea class="form-control @error($name) is-invalid @enderror"  autocomplete="{{$name}}" id="{{$name}}" name="{{$name}}" rows="3" >{{ $content }}</textarea>

          @error($name)
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      </div> 