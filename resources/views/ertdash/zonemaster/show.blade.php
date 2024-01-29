@extends('ertdash.layout.main')
@section('content')
<div class="container pt-4 px-4" style="margin-top: -25px;">
    {{-- <section class="bg-light rounded border" style="margin-left: 220px;"> --}}
        <div class="row" style="margin-left: 200px;">
            <h4 class="main-title p-3" style="margin-left: 40px;"><b>View Zone Member</b></h4>
        </div>    
    {{-- </section> --}}
    <section class="bg-light rounded border h-50 p-4" style="margin-left: 220px;">
        <form id="add_data" action="ertmember.store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container px-4" style="margin-top: -55px;">
                <div class="row gx-5">
                    <div class="col-md-4">
                        {{-- <div class="form-group col-md-3"> --}}
                        <label for="name" class="form-label">Zone Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Zone name" class="form-control">
                        <div class="text-danger" id="name_error"></div>
                        {{-- </div> --}}
                    </div>
                    <div class="col-md-4" style="margin-left: 150px;">
                        <label for="details" class="form-label">Details</label>
                        <textarea name="details" id="details" placeholder="Enter details" class="form-control"></textarea>
                        <div class="text-danger" id="details_error"></div>
                    </div>
                    
                </div>
            </div>
        </form>    
            <hr>
             {{-- <div class="col">
                <label for="department" class="form-label"><b>Add department</b></label>
                <div class="dropdown">
                    <button class="btn btn-bordered dropdown-toggle gx-col-md-3" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Search Department
                        <div class="dropdown-menu bordered">
                            <input type="text" class="form-control" placeholder="Search separtment" id="searchInput">search
                            department
                            <div class="dropdown-divider">
                                <input type="textarea" name="details" id="details" class="form-control">
                            </div>
                        </div></input>
                    </button>
                    <a href="#" data-target="#table-two" class="text-primary mx-6" title="Add" id="addButton"
                        style="margin-left: 10px; font-size:20px"><i class="fa fa-plus-circle"></i></a>
                </div>
            </div>  --}}
        
        <br> <br> <br>
        <h5>Added Departments:</h5>
        <table class="table table-border" id="table-two">
            <tr>
                <td>GD</td>
                <td>
                    <a href="#" class="text-danger mx-1" onclick="deleteRow(this)" title="Delete"><i
                            class="fa fa-trash" style="margin-left: 25px;"></i></a>
                </td>
            </tr>
            <tr>
                <td>GD</td>
                <td>
                    <a href="#" class="text-danger mx-1" onclick="deleteRow(this)" title="Delete"><i
                            class="fa fa-trash" style="margin-left: 25px;"></i></a>
                </td>
            </tr>
            <tbody>
        </table><div>
        <a href="#" class="cancel-btn" style="margin-left:100px;" title="cancel">
            <button class="btn btn-sm btn-danger">Cancel</button>
        </a>
        <br>
        <a href="#" class="save-btn" style="margin-left:650px; margin-bottom: -70px;" title="save">
            <button class="btn btn-sm btn-success" style="margin-top: -60px; margin-left: 130px;" onclick="add_data()">Save</button>
        </a></div>
    </section>
    
    
</div>
<!-- ... Your existing HTML code ... -->


<script>
    $(document).ready(function() {
        // Event listener for the "Add" button
        $("#addButton").on("click", function() {
            // Retrieve values from input fields or other data sources
            var Name = "Zone 1"; // Replace with actual data
            var Phoneno = " 9876543021"; // Replace with actual data
            var Aadharno = " 00000000"; // Replace with actual data
            var Department = "aaaaa"; // Replace with actual data
            var Designation = "zxctyx"; // Replace with actual data
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
