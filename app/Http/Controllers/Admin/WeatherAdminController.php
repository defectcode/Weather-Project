<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeatherData;

class WeatherAdminController extends Controller
{
    public function index()
    {
        $weatherData = WeatherData::paginate(15);
        return view('admin.weather.index', compact('weatherData'));
    }

    public function edit($id)
    {
        $weatherData = WeatherData::findOrFail($id);
        return view('admin.weather.edit', compact('weatherData'));
    }

    public function update(Request $request, $id)
    {
        $weatherData = WeatherData::findOrFail($id);
        $weatherData->update($request->all());
        return redirect('/admin/weather')->with('success', 'Weather data updated successfully.');
    }
}
