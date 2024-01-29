@extends('ertdash.layout.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="container pt-10 px-10" style="margin-top: -50px;">
        <div class="row" style="margin-left: 200px;">
            <h4 class="main-title p-3" style="margin-left: 40px;"><b>Add ERT Member</b></h4>
        </div> <br>

        <section class="bg-light rounded border h-50 p-4" style="margin-left: 220px; margin-top: -20px;">
            <form id="add_data" action="ertdash.ertmember.store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container px-4" style="margin-top: -60px;">
                    <div class="row gx-5">
                        <div class="col" style="margin-top: -25px;">
                            <label for="zone" class="form-label"></label>
                            <div class="col">
                                {{-- <label for="department" class="form-label"><b>Add department</b></label> --}}
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Select Zone
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>+
                                        <a href="#" data-target="#table-two" class="text-primary mx-6" title="Add" id="addButton"
                                        style="margin-left: 10px; font-size:20px"><i class="fa fa-plus-circle"></i></a>
                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            {{-- <div class="form-group col-md-3"> --}}
                            <label for="name" class="form-label">Zone Name*</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <div class="text-danger" id="name_error"></div>
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-4">
                            {{-- <div class="form-group col-md-3"> --}}
                            <label for="department" class="form-label">Department</label>
                            <input type="text" name="department" id="department" class="form-control">
                            <div class="text-danger" id="department_error"></div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control" id="" placeholder="Emp.Name and Emp.No" style="margin-top: 15px;">
                    {{-- <div class="form-group col-md-5"> --}}
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="search"
                        style="margin-left: 240px; margin-top: -62px;">Search</button>
                    {{-- </div> --}}
                </div>
            </form>
           
            <table class="table table-bordered" id="table-one">
                <thead class="table table-bordered">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Aadhar No.</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tr>
                    <td>Sandhya</td>
                    <td>9876543021</td>
                    <td>456738963456</td>
                    <td>GD</td>
                    <td>Manager</td>
                    <td>
                        <a href="#" data-target="#table-two" class="text-primary mx-6" title="Add" id="addButton"
                            style="margin-left: 30px; font-size:20px"><i class="fa fa-plus-circle"></i></a>
                    </td>
                </tr>
                <tbody>
            </table> <br>
            <h5>Added Employees:</h5>
            <table class="table table-bordered" id="table-two">
                <thead class="table table-bordered">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Aadhar No.</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tr>
                    <td>Sandhya</td>
                    <td>9876543021</td>
                    <td>456738963456</td>
                    <td>GD</td>
                    <td>Manager</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                specialization
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">FDFS</a>
                                <a class="dropdown-item" href="#">GD</a>
                                <a class="dropdown-item" href="#">Welding</a>
                                <a class="dropdown-item" href="#">Fitter</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-danger mx-1" onclick="deleteRow(this)" title="Delete"><i
                                class="fa fa-trash" style="margin-left: 25px;"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>WXYZ</td>
                    <td>9876540321</td>
                    <td>0987-5432-1234</td>
                    <td>XYab</td>
                    <td>nucg</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                specialization
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">FDFS</a>
                                <a class="dropdown-item" href="#">GD</a>
                                <a class="dropdown-item" href="#">Welding</a>
                                <a class="dropdown-item" href="#">Fitter</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-danger mx-1" onclick="deleteRow(this)" title="Delete"><i
                                class="fa fa-trash" style="margin-left: 25px;"></i></a>
                    </td>
                </tr>
                <tbody>
            </table>
            {{-- </section> --}}
            <a href="#" class="cancel-btn" style="margin-left:80px;" title="cancel">
                <button class="btn btn-sm btn-danger">Cancel</button>
            </a>
            <a href="#" class=" save-btn" style="margin-left:650px; margin-top: -100px;" title="save">
                <button class="btn btn-sm btn-primary" onclick="add_data()">Save</button>
            </a>
        </section>
    </div>
    <!-- ... Your existing HTML code ... -->


    <script>
        $(document).ready(function() {
            // Event listener for the "Add" button
            $("#addButton").on("click", function() {
                // Retrieve values from input fields or other data sources
                var Name = "Sandhya"; // Replace with actual data
                var Phoneno = " 9876543021"; // Replace with actual data    <td>Sandhya</td>
                var Aadharno = "456738963456"; // Replace with actual data
                var Department = "GD"; // Replace with actual data
                var Designation = "Manager"; // Replace with actual data
                var Specialization = "specialization"; // Replace with actual data
                var Actions = "Actions"; // Replace with actual data

                // Create a new row and append it to the table
                var newRow = $("<tr>").append(
                    $("<td>").text(Name),
                    $("<td>").text(Phoneno),
                    $("<td>").text(Aadharno),
                    $("<td>").text(Department),
                    $("<td>").text(Designation),
                    // $("<td>").text(Specialization),
                    $("<td>").append(
                        // Dropdown structure
                        $("<div>").addClass("dropdown show").append(
                            $("<a>").addClass("btn dropdown-toggle").attr({
                                "href": "#",
                                "role": "button",
                                "id": "dropdownMenuLink",
                                "data-toggle": "dropdown",
                                "aria-haspopup": "true",
                                "aria-expanded": "false"
                            }).text(Specialization),
                            $("<div>").addClass("dropdown-menu").attr("aria-labelledby",
                                "dropdownMenuLink").append(
                                $("<a>").addClass("dropdown-item").attr("href", "#").text("FDFS"),
                                $("<a>").addClass("dropdown-item").attr("href", "#").text("GD"),
                                $("<a>").addClass("dropdown-item").attr("href", "#").text("Welding"),
                                $("<a>").addClass("dropdown-item").attr("href", "#").text("Fitter")
                            )
                        )
                    ),
                    $("<td>").append(
                        $("<a>").addClass("text-danger mx-1").attr({
                            "href": "#",
                            "onclick": "deleteRow(this)",
                            "title": "Delete"
                        }).append(
                            $("<i>").addClass("fa fa-trash").css("margin-left", "25px")
                        )
                    )
                );
                $("#table-two").append(newRow); // Append the new row to the table body
            });
        });
    </script>

    <script>
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
@endsection
