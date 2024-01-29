@extends('ertdash.layout.main')
@section('content')
<div class="container pt-10 px-10" style="margin-top: -60px;">
    <div class="row" style="margin-left: 200px;">
        <h4 class="main-title p-3" style="margin-left: 40px;"><b>View ERT Member</b></h4>
    </div> <br>

    <section class="bg-light rounded border h-50 p-4" style="margin-left: 220px; margin-top: -20px;">
        <form id="add_data" action="ertmember.store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container px-4" style="margin-top: -60px;">
                <div class="row gx-5">
                        <div class="col-md-4">
                            {{-- <div class="form-group col-md-3"> --}}
                            <label for="zone" class="form-label">Zone</label>
                            <input type="text" name="zone" id="zone" class="form-control">
                            <div class="text-danger" id="zone_error"></div>
                            {{-- </div> --}}
                        </div>

                    <div class="col-md-4">
                        {{-- <div class="form-group col-md-3"> --}}
                        <label for="zonename" class="form-label">Zone Name*</label>
                        <input type="text" name="zonename" id="zonename" class="form-control">
                        <div class="text-danger" id="zonename_error"></div>
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
            </div><br> <br>
        <h5>Added Employees:</h5> <br>
        <table class="table table-bordered" id="table-two">
            <thead class="table table-bordered">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Aadhar No.</th>
                    <th scope="col">Department</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Specialization</th>
                    {{-- <th scope="col">Actions</th> --}}
                </tr>
            </thead>
            <tr>
                <td>Sandhya</td>
                <td>9876543021</td>
                <td>456738963456</td>
                <td>GD</td>
                <td>Manager</td>
                <td>First Aid</td>
            </tr>
            {{-- <tr>
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
            </tr> --}}
            <tbody>
        </table>
        {{-- </section> --}}
        <a href="#" class="cancel-btn" style="margin-left:80px;" title="cancel">
            <button class="btn btn-sm btn-danger">Cancel</button>
        </a>
        {{-- <a href="#" class=" save-btn" style="margin-left:650px; margin-top: -100px;" title="save">
            <button class="btn btn-sm btn-success" onclick="add_data()">Save</button>
        </a> --}}
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