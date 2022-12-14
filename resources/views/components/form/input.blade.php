
@props(['name','label','value','type'])


<div class="form-row">
                  
                  <label for="{{ $name }}"> {{ $label }}</label>   
                    <input type="{{$type}}" class="form-control @error('{{ $name }}') is-invalid @enderror" name="{{ $name }}" value="{{ $value }}"  autocomplete="{{ $name }}" id="{{ $name }}" required>


                    @error($name)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>    