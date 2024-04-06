@extends('layouts.app')

@section('template_title')
    Secuencium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Secuencium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('secuencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Problema Id</th>
										<th>Evento</th>
										<th>Descripcion</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($secuencia as $secuencium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $secuencium->problema_id }}</td>
											<td>{{ $secuencium->evento }}</td>
											<td>{{ $secuencium->descripcion }}</td>
											<td>{{ $secuencium->fecha }}</td>

                                            <td>
                                                <form action="{{ route('secuencia.destroy',$secuencium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('secuencia.show',$secuencium->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('secuencia.edit',$secuencium->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $secuencia->links() !!}
            </div>
        </div>
    </div>
@endsection
