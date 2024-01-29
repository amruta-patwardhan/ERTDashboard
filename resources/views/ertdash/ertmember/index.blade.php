@extends('ertdash.layout.main')
@section('content')
<style>
    #zone {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    #action{
        margin-top: -100px;
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
<div class="container pt-10 px-10" style="margin-top: -50px;">
    <h2 class="main-title p-3" style="color: black; margin-left: 200px;">ERT Members</h2> <br>
    <section class="bg rounded border-shadow" style="margin-left: 220px;">
        <div class="row"><br>
            <h5 id="zone" style="color:black;"><b>ERT Member Details</b></h5>
            <div class="col-md-12" style="margin-left: 800px; margin-top: -50px; margin-bottom: -30px;">
                <a class="fa fa-plus-circle" data-modal="add_form" data-target=".add_form"
                    href="{{ route('ertdash.ertmember.create') }}" data-toggle="tooltip" data-placement="top"
                    title="add zone members" style="color: green; font-size: 30px; text-decoration: none;"></a>
            </div>
        </div>    
    </section><br>
    <section class="bg" style="margin-left: 220px; padding: 20px;">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    {{-- <th scope="col">Sr</th> --}}
                    <th scope="col">Zone Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Specification</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Department</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="2" style="text-decoration: none;">Zone 1</th>
                    <td>Sandhya</td>
                    <td>First Aid</td> <!-- Move this line to the correct position -->
                    <td>9456738963</td>
                    <td>GD</td>
                        <th rowspan="2" id="action">
                        <a href="{{ route('ertdash.ertmember.edit') }}" class="text-info mx-1" title="Edit"><i class="fa fa-edit"
                                style="margin-left: 0px;"></i></a>
                        <a href="{{ route('ertdash.ertmember.show') }}" class="text-primary mx-1" title="View"><i class="fa fa-eye"
                                style="margin-left: 0px;"></i></a>
                        </th>        
                </tr>
                <tr>
                    <td>Jyoti</td>
                    <td>Emergency Rescue</td> <!-- Move this line to the correct position -->
                    <td>9456566963</td>
                    <td>GD</td>
                </tr>
                <tr>
                    <th rowspan="2">Zone 2</th>
                    <td>Suprita</td>
                    <td>First Aid</td> <!-- Move this line to the correct position -->
                    <td>9456738963</td>
                    <td>GD</td>
                        <th rowspan="2" id="action">
                        <a href="{{ route('ertdash.ertmember.edit') }}" class="text-info mx-1" title="Edit"><i class="fa fa-edit"
                                style="margin-left: 0px;"></i></a>
                        <a href="{{ route('ertdash.ertmember.show') }}" class="text-primary mx-1" title="View"><i class="fa fa-eye"
                                style="margin-left: 0px;"></i></a>
                        </th>        
                </tr>
                <tr>
                    <td>Suma</td>
                    <td>Emergency Rescue</td> <!-- Move this line to the correct position -->
                    <td>9456566963</td>
                    <td>GD</td>
                </tr>
            </tbody>
        </table>
        
                {{-- <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Zone Name</th>
                            <th scope="col">Name</th>
                            <th scope="col">Specification</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Department</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tr>
                        <th rowspan="2">Zone 1</th>
                            <td>Sandhya</td>
                          </tr>
                          <tr>
                            <td>Jyoti</td>
                          </tr>
                    </tr>      
                    <tr>
                        <td>First Aid</td>
                        <td>9456738963</td>
                        <td>GD</td>
                        <td>
                            <a href="{{ route('ertmember.edit') }}" class="text-info mx-1" title="Edit"><i class="fa fa-edit"
                                style="margin-left: 0px;"></i></a>
                        <a href="{{ route('ertmember.show') }}" class="text-primary mx-1" title="View"><i
                                class="fa fa-eye" style="margin-left: 0px;"></i></a>
                        </td>
                    </tr>
                    <tbody>
                </table> --}}
            </div>
    </section>
@endsection