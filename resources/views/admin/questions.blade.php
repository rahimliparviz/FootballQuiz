@extends('layouts.admin')


@section('content')

    <h2 align="center">Questions</h2>
    <a href="{{ route('create.question') }}" class="btn btn-success">Add a question</a>

    <table id="example2" class="table table-hover table-striped" >
        <thead>
        <tr>
            <th>Image</th>
            <th>Question</th>
            <th>Level</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        </thead>

    </table>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>



    <script>
        $('#example2').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url":"<?= route('questions') ?>",
                "dataType":"json",
                "type":"POST",
                "data":{"_token":"<?= csrf_token() ?>"}
            },
            "columns":[

                {"data":"img"},
                {"data":"question"},
                {"data":"level","searchable":true},
                {"data":"created_at"},
                {"data":"action","searchable":false,"orderable":false}
            ]
        } );

    </script>


@stop