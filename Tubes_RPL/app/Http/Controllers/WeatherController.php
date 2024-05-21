<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('map.dashboard');
    }

    public function getWeather(Request $request)
    {
        $request->validate([
            'city' => 'required|string',
            'country' => 'required|string'
        ]);

        $city = $request->input('city');
        $country = $request->input('country');
        $apiKey = env('OPENWEATHER_API_KEY');
        
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => "$city,$country",
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        if ($response->successful()) {
            $weatherData = $response->json();
            return view('map.dashboard', ['weather' => $weatherData]);
        } else {
            return redirect('/')->withErrors(['city' => 'Could not retrieve weather data']);
        }
    }
}
