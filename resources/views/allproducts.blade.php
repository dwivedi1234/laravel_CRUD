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
                <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    @foreach ($product as $i => $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{route('editProduct',$item->id)}}" class="btn btn-sm btn-danger">Edit</a>
                            <a href="{{route('deleteProduct',$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>


                    @endforeach
                      
                     
                    </tbody>
                  </table>


                  {{-- {{ $product->links( "pagination::bootstrap-4") }} --}}
            </div>
        </div>
    </div>
</body>
</html>