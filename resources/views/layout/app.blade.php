<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8143421247.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="{{asset('css/abasas.css')}}">
       <!-- Custom styles for this page -->
       <link href="{{asset('file/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  
  </head>
  <body>

            <nav class="navbar justify-content-center  sticky-top ">
                <a class="navbar-brand" href="https://abasas.tech" > <img   src="{{asset('Abasas.com logo.png')}}" alt="abasas.tech" style="height:80px;"> </a>

            </nav>
      
  @yield('content')

  <input type="text"  id="indexLink" value="{{route('index')}}" hidden >
  <input type="text"  id="task_level_list_api" value="{{route('task_level_list_api')}}" hidden >
  <input type="text"  id="task_status_list_api" value="{{route('task_status_list_api')}}" hidden >
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="{{asset('file/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('file/datatables/dataTables.bootstrap4.min.js')}}"></script>



    <script src="{{asset('js/abasas.js')}}"></script>
  </body>
</html>