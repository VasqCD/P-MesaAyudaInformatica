<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="empleado_id" class="form-label">{{ __('Empleado Id') }}</label>
            <input type="text" name="empleado_id" class="form-control @error('empleado_id') is-invalid @enderror" value="{{ old('empleado_id', $asignacion?->empleado_id) }}" id="empleado_id" placeholder="Empleado Id">
            {!! $errors->first('empleado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="problema_id" class="form-label">{{ __('Problema Id') }}</label>
            <input type="text" name="problema_id" class="form-control @error('problema_id') is-invalid @enderror" value="{{ old('problema_id', $asignacion?->problema_id) }}" id="problema_id" placeholder="Problema Id">
            {!! $errors->first('problema_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>