@extends('layouts.app')
@section('content')
    <h1>Welcome</h1>
    <section>
        <h2>Fruits</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Quantité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                    <tr>
                        <th scope="row">{{$fruit->id}}</th>
                        <td><a href="/show/{{$fruit->id}}">{{$fruit->name}}</a></td>
                        <td>{{$fruit->name}}</td>
                        <td>{{$fruit->quant}}</td>
                        <td>
                            {{-- <form action="/delete/{{$voiture->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>

                    
                @endforeach
            </tbody>
        </table>
    </section>
    <section>
        <h2>Legumes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Quantité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($legumes as $legume)
                    <tr>
                        <th scope="row">{{$legume->id}}</th>
                        <td>{{$legume->name}}</td>
                        <td>{{$legume->quant}}</td>
                        <td>
                            {{-- <form action="/delete/{{$voiture->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>

                    
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
