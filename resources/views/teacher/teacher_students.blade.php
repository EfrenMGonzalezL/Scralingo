<table class="table">
    <tr>
        <th># de lista</th>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->registration_number }}</td>
            <td>{{ $student->user_type->name }}</td>
            <td>{{ $student->user_type->paternal_surname }}</td>
            <td>{{ $student->user_type->maternal_surname }}</td>
        </tr>
    @endforeach
</table>