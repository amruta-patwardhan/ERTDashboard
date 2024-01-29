@extends('ertdash.layout.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container pt-4 px-4" style="margin-top: -25px;">
    {{-- <section class="bg-light rounded border" style="margin-left: 220px;"> --}}
        <div class="row" style="margin-left: 200px;">
            <h4 class="main-title p-3" style="margin-left: 40px;"><b>Add Zone Member</b></h4>
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
            <hr>
             <div class="col">
                <label for="department" class="form-label"><b>Add department</b></label>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Search Department
                        </button>
                        <select name="dept" id="dept" class="form-select" aria-label="Add Department">
                <option selected disabled>Add Department</option>
                @foreach ($department as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
                <!-- Add more options as needed -->
            </select>
                        {{-- <select name="department" id="department" placeholder="Select Department">
                            <option value="">Select Department</option>
                            @foreach($employees as $employee)
                                @if ($employee->qcc_departments)
                                    <option value="{{ $employee->qcc_departments->DEP_DEPTNAME }}">{{ $employee->qcc_departments->DEP_DEPTNAME }}</option>
                                @endif
                            @endforeach
                        </select> --}}
                        
                        <a href="#" data-target="#table-two" class="text-primary mx-6" title="Add" id="#add_btn"
                        style="margin-left: 10px; font-size:20px"><i class="fa fa-plus-circle"></i></a>
                    </div>
            </div> 
        </form>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
$(document).ready(function () {
    // ...
    // Function to handle row deletion
    function deleteRow(row) {
        row.remove();
    }
    // Event handler for clicking delete icon
    $(document).on('click', '#dept_table a.text-danger', function (e) {
        e.preventDefault();
        var row = $(this).closest('tr');
        deleteRow(row);
    })
    });
        $(document).ready(function() {
            $('#add_btn').click(function() {
                var dept_id = $('#dept option:selected').val()
                var dept_name = $('#dept option:selected').text()
                var dis = `
                <tr>
                    <td style="display:none;">${dept_id}</td>
                    <td>${dept_name}</td>
                    <td>
                        <a href="#" class="text-danger" ><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>`
                $('#dept_table').append(dis)
            })
            var dept_ids = []
            $('#save_btn').click(function() {
                // alert('clicked')
                $('#dept_table ').each(function() {
                    var row = $(this).closest('tr')
                    var dept_id = $(this).find('td:eq(0)').text().trim()
                    dept_ids.push({
                        dept_id: dept_id
                    })
                })
                console.log(dept_ids)
                var zone_name = $('#zone_name').val()
                var zone_details = $('#details').val()
                $.ajax({
                    type: 'POST',
                     url: '{{route('ertdash.zonemaster.store')}}',
                    data: {
                        dept_ids: dept_ids,
                        zone_name: zone_name,
                        zone_details: zone_details,
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success)
                        window.location.href = '{{ route('ertdash.zonemaster.index') }}'; // Redirect to zonemaster page
                    }
                })
            })
        })
    </script>

{{-- <script>
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
</script> --}}
@endsection
