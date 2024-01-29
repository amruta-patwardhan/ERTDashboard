@yield('main')

<style>
 body {font-family: "Lato", sans-serif;} 

.sidebar {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgba(128, 0, 107, 1);
  overflow-x: hidden;
  padding-top: 16px;
}

 .sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  margin-left: 20px;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 100px; /* Same as the width of the sidenav */
   padding: 0px 10px;
} 

/* @media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
} */ 
</style>

<body>

<div class="sidebar">
  <h2><a href="{{route('dashboard')}}" style="text-decoration: none; color: white;"> ERT Dashboard</a></h2><br><br>
  <h4><a href="{{route('dashboard')}}" style="text-decoration: none; color: white;"> Dashboard</a></h4><br>
  <h4><a href="{{ route('ertdash.zonemaster.index')}}" style="text-decoration: none; color: white;"></i> Zone Master</a></h4><br>
  <h4><a href="{{ route('ertdash.specialization.index')}}" style="text-decoration: none; color: white;"></i> Specialization</a></h4><br>
  <h4><a href="{{ route('ertdash.ertmember.index')}}" style="text-decoration: none; color: white;"></i> ERT Members</a></h4><br>
  <h4><a href="{{ route('ertdash.reports.index')}}" style="text-decoration: none; color: white;"></i> Reports</a></h4><br>
</div>


</body>
