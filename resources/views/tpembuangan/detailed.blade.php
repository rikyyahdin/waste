@extends('pengawasan_master')

@section('main-section')
    <h2 class="sub-header">Entri untuk seminggu terakhir</h2>

    <h3 class="sub-header">Entri TPS</h3>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>TPS</th>
                <th>Volume (m<sup>3</sup>)</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($entry_tps as $idx => $entry)
                <tr>
                    <td>{{ $idx+1 }}</td>
                    <td>{{ $entry->created_at }}</td>
                    <td>{{ $entry->tps->name }}</td>
                    <td>{{ $entry->volume }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="sub-header">Entri TPA</h3>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Waktu</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Volume</th>
            </tr>
            </thead>
            @foreach ($entry_tpa as $idx => $entry)
                <tr>
                    <td>{{ $idx+1 }}</td>
                    <td>{{ $entry->created_at }}</td>
                    <td>{{ $entry->tps->name }}</td>
                    <td>{{ $entry->tpa->name }}</td>
                    <td>{{ $entry->volume }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop