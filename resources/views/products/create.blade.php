    @extends('layouts.main')


    @section('content')

    <form action="{{route('products.store')}}" method="POST">
    @csrf
    <h4 class="text-uppercase font-weight-bold mb-3">Create Product</h4>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control p-4" placeholder="Name" required="required"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="number" name="cost" class="form-control p-4" placeholder="Cost" required="required"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="description"" class="form-control p-4" placeholder="Description"/>
        </div>
       
        <div>
            <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                type="submit">Create</button>
        </div>
    </form>
    </div>

    @endsection



    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CreateProduct</title>
    </head>
    <body>
    <form action="" method="post">
        <label for="name">Name</label>
        <br>
        <input type="text" id="name" name="Name">
        <br>

        <label for="cost">Cost</label>
        <br>
        <input type="text" id="cost" name="Cost">
        <br>

        <label for="description">Description</label>
        <br>
        <textarea name="Description" id="description" cols="10" rows="5"></textarea>
        <br>

        <input type="submit" value="Create Product">

    </form>
    </body>
    </html> -->
   
