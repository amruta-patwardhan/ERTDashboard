@extends('ertdash.layout.main')
@section('content')
    <style>
        #zone {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        /* .table {
            margin-bottom: 20px;
            padding-top: 100px;
            padding-bottom: 100px;
        } */
        .bg {
      /* background-color: #f0f0f0; */
      padding: 0px;
      margin-left: 220px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add box shadow here */
    }
    </style>
    <div class="container pt-10 px-10">
        <h2 class="main-title p-3" style="color: black; margin-left: 200px;">Zone Master</h2> <br>

        <section class="bg rounded border-shadow" style="margin-left: 220px;">
            <div class="row"><br>
                <h5 id="zone" style="color:black;"><b>Zone Details:</b></h5>
                <div class="col-md-12" style="margin-left: 800px; margin-top: -50px; margin-bottom: -30px;">
                    <a class="fa fa-plus-circle" data-modal="add_form" data-target=".add_form"
                        href="{{ route('ertdash.zonemaster.create') }}" data-toggle="tooltip" data-placement="top"
                        title="add zone members" style="color: green; font-size: 30px; text-decoration: none;"></a>
                </div>
            </div>    
        </section><br>
        <section class="bg" style="margin-left: 220px; padding: 20px;">
            <table class="table">
                <thead class="table">
                    <tr>
                        <th scope="col">Zone Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Details</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tr>
                    <td>Zone 1 <a href="{{ route('ertdash.reports.index') }}" class="text-success mx-1" title="View"><i
                        class="fa fa-eye" style="margin-left: 10px;"></i></a></td>
                    <td>GD</td>
                    <td>DoozieSoftware</td>
                    <td><a href="{{ route('ertdash.reports.index') }}" class="text-success mx-1" title="View"><i
                        class="fa fa-check-circle" style="margin-left: 10px;"></i></a></td>
                    <td>
                        <a href="{{ route('ertdash.zonemaster.edit') }}" class="text-info mx-1" title="Edit"><i class="fa fa-edit"
                                style="margin-left: 0px;"></i></a>
                        <a href="{{ route('ertdash.zonemaster.show') }}" class="text-primary mx-1" title="View"><i
                                class="fa fa-eye" style="margin-left: 0px;"></i></a>
                        <a href="#" class="text-danger mx-1" title="Delete"><i class="fa fa-trash"
                                style="margin-left: 0px;"></i></a>
                    </td>

                </tr>
                <tr>
                    <td>Zone 2 <a href="{{ route('ertdash.reports.index') }}" class="text-success mx-1" title="View"><i
                        class="fa fa-eye" style="margin-left: 10px;"></i></a></td>
                    <td>GD</td>
                    <td>MsSoftware</td>
                    <td><a href="{{ route('ertdash.reports.index') }}" class="text-danger mx-1" title="View"><i
                        class="fa fa-times-circle" style="margin-left: 10px;"></i></a></td>
                    <td>
                        <a href="{{ route('ertdash.zonemaster.edit') }}" class="text-info mx-1" title="Edit"><i class="fa fa-edit"
                                style="margin-left: 0px;"></i></a>
                        <a href="{{ route('ertdash.zonemaster.show') }}" class="text-primary mx-1" title="View"><i
                                class="fa fa-eye" style="margin-left: 0px;"></i></a>
                        <a href="#" class="text-danger mx-1" title="Delete"><i class="fa fa-trash"
                                style="margin-left: 0px;"></i></a>
                    </td>

                </tr>
                <tbody>
            </table>
       </section>
    </div>   
@endsection
