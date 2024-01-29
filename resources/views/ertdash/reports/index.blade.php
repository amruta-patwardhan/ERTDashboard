@extends('ertdash.layout.main')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   
<div class="container pt-10 px-10" style="margin-top: -25px;">
        {{-- <section class="bg-light rounded border" style="margin-left: 220px;"> --}}
            <div class="row" style="margin-left: 200px;">
                <h4 class="main-title p-3" style="margin-left: 40px;"><b>Reports</b></h4>
            </div> <br>
        {{-- </section> --}}
        <section class="bg rounded border" style="margin-left: 220px; padding: 10px;">
            <div class="col">
                {{-- <label for="department" class="form-label"><b>Add department</b></label> --}}
                <div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" style="margin-top: -10px; padding-top: 30px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Search Zone
                        </button>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div> --}}
                      </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="search"
                        style="margin-left: 150px; margin-top: -60px; size: 20px;">Search</button>
                </div>
            </div>
        </section>
        <section class="bg rounded border" style="margin-left: 220px;">
            <h6 style="margin-left: 30px; margin-top: 20px;">Zone Name: Zone</h6>
            <h6 style="margin-left: 500px; margin-top: -27px;">Last updated on:</h6>
        </section>
        <section class="bg" style="margin-left: 220px;">
            <table class="table table-bordered" id="table-two">
                <tr>
                    <th scope="col">SI.No</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Department</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Availability</th>

                </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td imgsrc=""></td>
                    <td>Sandhya</td>
                    <td>9876543021</td>
                    <td>GD</td>
                    <td>First Aid</td>
                    <td>
                        <i class='fas fa-square-full' style='font-size:48px;color:red'></i>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td imgsrc=""></td>
                    <td>Jyoti</td>
                    <td>9876543021</td>
                    <td>GD</td>
                    <td>Emergency Rescue</td>
                    <td>
                        <a href="#" data-target="#table-two" class="text-success mx-6" title="Add" id="addButton"
                            style="margin-left: 30px; font-size:20px"><i class="fa fa-square-full" style="font-size:20px; color:red;"></i></a>
                    </td>
                    {{-- <h4 style="margin-top:-35px;margin-left:410px;font-weight: bold;font-size:20px;">Available </h4>
                <div class="red-textbox"></div>
                <h4 style="margin-top:-35px;margin-left:1059px;font-weight: bold;font-size:20px;"> Not Available </h4> --}}
                </tr>
                <tbody>
            </table>
            <div>
        </section>


    </div>
@endsection
