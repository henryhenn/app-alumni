@extends('layouts.main')

@section('content')
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Webkit</td>
                <td>Safari 1.3</td>
                <td>OSX.3</td>
                <td>312.8</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>419.3</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td>522.1</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>OmniWeb 5.5</td>
                <td>OSX.4+</td>
                <td>420</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Webkit</td>
                <td>iPod Touch / iPhone</td>
                <td>iPod</td>
                <td>420.1</td>
                <td>A</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('Admin-backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('Admin-backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin-backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection


