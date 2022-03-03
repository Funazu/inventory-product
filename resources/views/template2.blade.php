<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Barang | {{ $title }}</title>
    <style media="screen">
         
         body {
             font-family: 'Nunito', sans-serif;
         }
          
         table, th, td {
             border: 1px solid black;
         }
  
         table {
             border-collapse: collapse;
             margin: 120px auto;
         }
          
         th, td {
             padding: 6px 0;
         }
          
         th {
             text-align: left;
             padding-left: 4px;
             background-color: #F1F1F1;
         }
          
         td {
             padding-left: 4px;
             padding-right: 86px;
         }
   
     </style>
</head>
<body>
@include('navbar')

    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>