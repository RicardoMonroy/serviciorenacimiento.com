<!DOCTYPE html>
<html>
<head>
    <title>serviciorenacimiento.com</title>
</head>
<body>
    <h2>Nombre: {{$invoice->name}}</h2><br>
    <h2>RFC: {{$invoice->rfc}}</h2><br>
    <h2>Teléfono: {{ $invoice->phone }}</h2><br>
    <h2>Monto: {{ $invoice->mount }}</h2><br>
    <h2>Dirección: {{ $invoice->address }}</h2><br>
    <h2>Correo: {{ $invoice->email }}</h2><br>
    <h2>Folio: {{ $invoice->ticket }}</h2><br>
    <h2>Fecha de carga: {{ $invoice->date }}</h2><br>
</body>
</html>







