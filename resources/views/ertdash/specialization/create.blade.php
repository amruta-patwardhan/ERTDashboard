@extends('ertdash.layout.main')
@section('content')
<div class="container pt-4 px-4" style="margin-top: -25px;">
    {{-- <section class="bg-light rounded border" style="margin-left: 220px;"> --}}
        <div class="row" style="margin-left: 200px;">
            <h4 class="main-title p-3" style="margin-left: 40px;"><b>Add Specialization</b></h4>
        </div>    
    {{-- </section> --}}
    <section class="bg-light rounded border h-50 p-4" style="margin-left: 220px;">
        <form id="add_data" action="{{route('ertdash.specialization.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container px-4" style="margin-top: -55px;">
                <div class="row gx-5">
                    <div class="col-md-4">
                        {{-- <div class="form-group col-md-3"> --}}
                        <label for="specialization" class="form-label">Specialization</label>
                        <input type="text" name="specialization" id="specialization" placeholder="Enter Specialization" class="form-control">
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
        </form> <br>
        <a href="{{ route('ertdash.specialization.index') }}" class="cancle-btn" title="cancel">
            <button class="btn btn-sm btn-danger">Cancel</button>
        </a>
        <br>
        <a href=""{{ route('ertdash.specialization.index') }}"" class="save-btn" style="margin-left:650px; margin-bottom: -70px;" title="save">
            <button class="btn btn-sm btn-success" style="margin-top: -60px; margin-left: 130px;" onclick="add_data()">Save</button>
        </a></div>
    </section>
    
    
</div>

<script>
    function add_data() {
        // Assuming you have a JavaScript function to handle form submission
        // and perform AJAX request or other actions if needed.
        document.getElementById('add_data').submit();
    }
</script>
@endsection