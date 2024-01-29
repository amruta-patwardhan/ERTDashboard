@extends('ertdash.layout.main')
@section('content')
    <style>
#box{
    width: 90%;
    height: 100%;
    margin-top: -50px;
    margin-left: 200px;
    
}
#box2{
    width: 90%;
    height: 100%;
    margin-top: -50px;
    margin-left: 200px;
}
#d{
    margin-left: -50px;
    margin-bottom: 50px;
}
#v{
    margin-left: -50px;
    margin-bottom: 50px;
}


    </style>



    <div class="container px-3" > 
        <div class="row gx-4" id="box">
            <h5 id="d"><b>Dashboard</b></h5>
            <div class="col">
                <div class="p-5 bordered bg" style="background-color: rgba(128, 0, 107, 0.23); text-align: center;"><b>Number of Zones <br> 5</b></div>
            </div>
            <div class="col">
                <div class="p-5 border bg" style="background-color: rgba(128, 0, 107, 0.23); text-align: center;"><b>Number of ERT Members <br> 4</b></div>
            </div>
        </div>
    </div><br>
    <div class="container px-3">
        <div class="row gx-4" id="box2">
            <h5 id="v"><b>View Reports</b></h5>
            <div class="col">
                <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.55); text-align: center;"><b>Zone 1 <br> 5</b>  <a href="{{ route('ertdash.reports.index') }}" class="fa fa-eye" title="View" style="color: green; text-decoration: none;"></a></div><br>
            </div>
            <div class="col">
                <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.55); text-align: center;"><b>Zone 2 <br>6</b>  <a href="{{ route('ertdash.reports.index') }}" class="fa fa-eye" title="View" style="color: green; text-decoration: none;"></a>
            </div>
            </div>
            <div class="col">
                <div class="p-5 border bg" style="background-color: rgba(88, 6, 223, 0.55); text-align: center;"><b>Zone 3 <br>4</b>  <a href="{{ route('ertdash.reports.index') }}" class="fa fa-eye" title="View" style="color: green; text-decoration: none;"></a></div>
            </div>
        </div>
    </div>
    @endsection
    {{-- <x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
