@extends('layouts.app')
@section('content')
    <section>
        <h2>Create a legumes</h2>
        <form action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name:</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">quantite:</label>
                <input name="quant" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection