@extends('product.layout')

@section('content')


    <div class="jumbotron container" style="background-color: #aaf">

        <hr class="my-4">
        <p> <strong>You cant Created Onther products in your database</strong> </p>
        <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create product</a>
    </div>
    <div class="container">

          @if ($message = Session::get('success'))

            <div class="alert alert-primary" role="alert">
                  {{$message}}
              </div>


          @endif

    </div>

        @php
            $i = 0;
        @endphp

   <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
          <tr>



                     <th scope="row">{{++$i}}</th>
                     <td>{{$item->name}}</td>
                      <td> {{$item->price}} جنيه</td>
                      <td>

                        <div class="row">
                           <div class="col-sm">
                              <a class="btn btn-success" href="{{route('products.edit' , $item->id)}}">Edit</a>
                           </div>
                           <div class="col-sm">
                              <a class="btn btn-success" href="{{route('products.show' , $item->id)}}">Show</a>
                            </div>
                            <div class="col-sm">
                                <a class="btn btn-warning" href="{{route('soft.delete' , $item->id)}}">soft delete</a>
                              </div>
                            <div class="col-sm">

                                  <form action="{{ route('products.destroy' , $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                  </form>
                             </div>
                         </div>
                      </td>


            </tr>
            @endforeach
        </tbody>
      </table>
                  {{$products->links()}}
    </div>

@endsection


