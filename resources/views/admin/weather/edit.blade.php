@extends('layouts.admin')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333333;
        text-align: center;
    }

    div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: calc(100% - 10px);
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<form class="container" action="/admin/weather/{{ $weatherData->id }}" method="POST">
    @csrf
    @method('PUT')
    <h1>Edit Weather Data</h1>
    <table>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="{{ $weatherData->city }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{ $weatherData->description }}">
        </div>
        <div>
            <label for="temperature">Temperature:</label>
            <input type="text" name="temperature" id="temperature" value="{{ $weatherData->temperature }}">
        </div>
        <div>
            <label for="humidity">Humidity:</label>
            <input type="text" name="humidity" id="humidity" value="{{ $weatherData->humidity }}">
        </div>
        <button type="submit">Update</button>
    </table>
</form>
@endsection