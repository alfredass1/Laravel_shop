@extends('shop/main')
@section('content')

    <div class="row justify-content-around">

            <h3 class=" text-black">Valdykite kategorijas</h3>
        </div>

    <div class="site-section bg-light py-4">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 offset-3">
                <table class="table border-top">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kategorijos</th>
                        <th scope="col">Veiksmai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category}}</td>
                            <td><a href="/delete_category/{{$category->id}}">Šalinti</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    <a class="btn btn-primary" href="/add-category" role="button">Pridėti kategorija</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>

@Stop
