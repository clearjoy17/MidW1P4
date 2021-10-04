@extends('base')

@section('content')

<style>
    body{
        background-color: rgb(3, 109, 56);
    }
</style>

<div class="container">
    <div class="mt-2" style="float:center; ">
        <h1 class="text-white text-center">Activity Log</h1>
    </div>
    <table class="table table-borderless table-dark text-center">
        <thead class="theadstyle">
            <th>Timestamp</th>
            <th>Log Entry</th>
        </thead>
        <tbody>

            @foreach($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->log}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@stop
