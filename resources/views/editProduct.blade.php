<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{route('updateProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$product->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="price" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="3">{{$product->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" class="form-control" name="images">

                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>