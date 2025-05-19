<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Weather App</h1>

        <form method="get" action="{{ route('weather') }}">
            <label class="label" for="city">Enter city name</label>
            <div class="form-inline">
                <input type="text" name="city" id="city" class="input" value="{{ $city }}" placeholder="e.g. London" autocomplete="off">
                <button type="submit" class="btn btn-default">Get Weather</button>
            </div>
        </form>

        @if ($error)
            <div class="alert">{{ $error }}</div>
        @elseif (!empty($weatherData))
            <h2>Weather in {{ $weatherData['name'] }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Attribute</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Temperature</td>
                        <td>{{ $weatherData['main']['temp'] }} ℃</td>
                    </tr>
                    <tr>
                        <td>Weather</td>
                        <td>{{ $weatherData['weather'][0]['description'] }}</td>
                    </tr>
                    <tr>
                        <td>Humidity</td>
                        <td>{{ $weatherData['main']['humidity'] }}%</td>
                    </tr>
                    <tr>
                        <td>Wind Speed</td>
                        <td>{{ $weatherData['wind']['speed'] }} m/s</td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
