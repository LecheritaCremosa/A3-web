<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/report.css') }}">
</head>
<body>
    <section id="header">
        <table widht="100%" style="border-collapse: collapse; border: 1px solid;">
            <th>
                <div style="text-align: center">
                    <img src="{{ asset('img/Default_Programming_1.jpg') }}" alt="logo">
                </div>
            </th>
            <th>
                <p style="text-align: center; font-size: 14px;">
                    @yield('header')
                </p>
            </th>
        </table>
    </section>
    <br>
    <section id="infoReport">
        <p style="font-size: 14px;">
            <strong>Fecha Reporte:</strong>
            @php
                $time = time();
                echo date('Y/m/d (H:i:s)', $time);
            @endphp
        </p>
    </section>
    <br>
    @yield('content')

    <footer id="version_text">
        <p>Generado Por OrderWeb 1.0</p>
    </footer>
</body>
</html>