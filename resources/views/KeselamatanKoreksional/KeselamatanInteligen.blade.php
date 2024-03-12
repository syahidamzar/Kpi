@extends('layout')
@section('title', 'Keselamatan Inteligen')
@section('body')

<table>
    <thead>
        <tr>
            <th>Kod</th>
            <th>Tajuk KPI</th>
            <th>Sasaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->Kod }}</td>
            <td>{{ $item->Tajuk_KPI }}</td>
            <td>{{ $item->Sasaran_KPI }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection