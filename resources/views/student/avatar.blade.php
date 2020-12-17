@extends('layouts.student_layout')

@section('title')
    Avatar
@endsection

@section('content')
    <h1 class="h1 text text-secondary">Avatar</h1>

    <div class="avatar-section-container">
        <div class="accesories-tabs-container">
            <ul class="tabs">
                @foreach ($categories as $category)
                    <li class="tab-link-outer" data-tab="{{ $category->name }}">{{ $category->name }}</li>
                @endforeach
            </ul>

            @foreach ($categories as $category)
                <div id="{{ $category->name }}" class="tab-content">
                    @foreach ($category->accesories as $accesory)
                        @if (array_search($accesory->id, array_column($accesories, 'accesory_id')))
                            <img class="selectable" src="{{ asset($accesory->image_url) }}" data-category="{{ $category->slug }}" alt="{{ $accesory->name }}">
                        @else
                            <img class="not-selectable" data-id="{{ $accesory->id }}" data-toggle="price-modal" data-level=" {{ $accesory->required_level }} " data-price="{{ $accesory->price }}" src="{{ asset($accesory->image_url) }}" data-category="{{ $category->slug }}" alt="{{ $accesory->name }}">
                        @endif
                    @endforeach
                </div>
            @endforeach
            <button class="cancel-avatar btn btn-grey">Cancelar</button>
            <button class="save-avatar btn btn-primary">Guardar</button>
        </div>

        <div class="avatar-container">
            <canvas width="100%" height="100%" id="avatar">
            </canvas>

            @foreach ($categories as $category)
                <canvas class="category-canvas" id="{{ $category->slug }}"></canvas>
            @endforeach
        </div>
    </div>

    <div class="modal" id="price-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header h4">Comprar artículo</div>
                <div class="modal-body">
                    ¿Deseas comprar este artículo?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-gray" data-dismiss="price-modal">Cancelar</button>
                    <button class="btn btn-primary confirm-purchase">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="success-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header h4">¡Éxito!</div>
                <div class="modal-body">
                    Tu avatar se ha guardado exitosamente.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-gray" data-dismiss="success-modal">Volver</button>
                </div>
            </div>
        </div>
    </div>
@endsection