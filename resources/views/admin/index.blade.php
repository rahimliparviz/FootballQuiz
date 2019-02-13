@extends('layouts.admin')


@section('content')

                <h2 align="center">USERS</h2>

                <table id="example" class="table table-hover table-striped" >
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url":"<?= route('dataProcessing') ?>",
            "dataType":"json",
            "type":"POST",
            "data":{"_token":"<?= csrf_token() ?>"}
        },
        "columns":[
            {"data":"name"},
            {"data":"email"},
            {"data":"created_at"},
            {"data":"action","searchable":false,"orderable":false}
        ]
    } );
</script>


@stop