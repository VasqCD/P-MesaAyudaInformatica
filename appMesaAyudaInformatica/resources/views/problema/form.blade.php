<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $problema?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $problema?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_creacion" class="form-label">{{ __('Fecha Creacion') }}</label>
            <input type="text" name="fecha_creacion" class="form-control @error('fecha_creacion') is-invalid @enderror" value="{{ old('fecha_creacion', $problema?->fecha_creacion) }}" id="fecha_creacion" placeholder="Fecha Creacion">
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_actualizacion" class="form-label">{{ __('Fecha Actualizacion') }}</label>
            <input type="text" name="fecha_actualizacion" class="form-control @error('fecha_actualizacion') is-invalid @enderror" value="{{ old('fecha_actualizacion', $problema?->fecha_actualizacion) }}" id="fecha_actualizacion" placeholder="Fecha Actualizacion">
            {!! $errors->first('fecha_actualizacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>