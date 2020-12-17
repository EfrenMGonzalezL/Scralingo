@if (count($homeworks) > 0)
    <h3 class="h3 text">Activas</h3>
    <div class="cards-container col-4">
        @foreach ($homeworks as $homework)
            @if ($homework->homework_active == 1)
                <div class="card" style="color: white; background: {{ sprintf('#%06X', mt_rand(0, 0xFFFFFF)) }}">
                    <div class="card-header">{{ $homework->homework_name }}</div><br>
                    <br>
                    <br>
                    <div class="card-content text-sm">Fecha de entrega: {{ $homework->due_date }}</div>
                </div>
            @endif
        @endforeach
    </div>

    <h3 class="h3 text">Pasadas</h3>
    <div class="cards-container col-4">
        @foreach ($homeworks as $homework)
            @if ($homework->homework_active == 0)
                <div class="card" style="color: white; background: {{ sprintf('#%06X', mt_rand(0, 0xFFFFFF)) }}">
                    <div class="card-header">{{ $homework->homework_name }}</div><br>
                    <br>
                    <br>
                    <div class="card-content text-sm">Fecha de entrega: {{ $homework->due_date }}</div>
                </div>
            @endif
        @endforeach
    </div>
@else
    <h3 class="h3 text text-gray">No hay tareas pendientes</h3>
@endif