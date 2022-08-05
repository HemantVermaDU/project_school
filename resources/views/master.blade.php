<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Of Schools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>List Of Schools</b></h1>
        
        @yield('content')
        
    </div>
    
</body>
<style>
    h6{
        color: #68D6F3;
    }
    .img-thumbnail{
        text-align: center;
        margin: auto;
        padding: 2px;
    }
    .trending-item{
    float: left;
    margin: 20px;
  }
  .card-text{
    text-transform: capitalize;
  }
</style>
</html>