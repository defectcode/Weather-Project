<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th {
            background: linear-gradient(to bottom, #f2f2f2, #e0e0e0);
            padding: 10px;
            text-align: left;
            font-weight: bold;
            color: #555555;
            border-bottom: 2px solid #dddddd;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        td {
            padding: 10px;
            text-align: left;
            color: #333333;
            border-bottom: 1px solid #dddddd;
        }
    </style>
</head>

<body>
    <div class="container">
        @extends('layouts.admin')

        @section('content')
        <h1>Weather Data</h1>

        <table>
            <thead>
                <tr>
                    <th>City</th>
                    <th>Description</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($weatherData as $data)
                <tr>
                    <td>{{ $data->city }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->temperature }}</td>
                    <td>{{ $data->humidity }}</td>
                    <td>
                        <a href="/admin/weather/{{ $data->id }}/edit">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $weatherData->links() }}
        @endsection

</body>

</html>