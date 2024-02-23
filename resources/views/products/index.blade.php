    
    @extends('layouts.main')


    @section('content')
    
        <h1>Products</h1>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->cost}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
   

    @endsection
