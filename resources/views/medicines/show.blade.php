
@extends('layouts.app')

@section('title', $medicines['name'])

@section('content')

   

       

        <div class="card">
       
            <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <h3 class="">Medicine Name: {{ $medicines['name'] }}</h3></p></li>
                    <li class="list-group-item"><p>Stock: {{ $medicines['stock'] }}</p></li>
                    <li class="list-group-item"> <p>Expiry Date: {{ $medicines['expiry_date'] }}</p></li>
                    <li class="list-group-item"><p>Type: {{ $medicines['type'] }}</p></li>
                    <li class="list-group-item"> <p>Available: {{ $medicines['is_available'] }}</p></li>
                     
                </ul>
                <a href="{{ route('medicines.index') }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    
@endsection
