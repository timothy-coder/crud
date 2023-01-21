@extends('layouts.app')

@section('template_title')
    {{ $carro->name ?? 'Show Carro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $carro->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $carro->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Id:</strong>
                            {{ $carro->lugar_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
