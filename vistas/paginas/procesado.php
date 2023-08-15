<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Procesado - Ejemplo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .payment-summary {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }
        .success-message {
            text-align: center;
            color: #3cb371;
        }
        .btn-container {
            display: flex;
            justify-content: center;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-green {
            background-color: #4caf50;
            color: white;
        }
        .btn-orange {
            background-color: #ff9800;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pago Procesado</h1>
        <div class="payment-summary">
            <h2>Resumen del Pago</h2>
            <p>Concepto: Producto o Servicio</p>
            <p>Monto:   </p>
            <p>Fecha: <span id="payment-date"></span></p>
        </div>
        <div class="success-message">
            <p>¡Pago procesado con éxito!</p>
            <p>Gracias por su compra.</p>
        </div>
        <div class="btn-container">
            <button class="btn btn-green" onclick="goBack()">Regresar</button>
            <button class="btn btn-orange">Ayuda</button>
        </div>
    </div>

    <script>
        // Obtener la fecha actual y actualizar el elemento HTML correspondiente
        const paymentDateElement = document.getElementById("payment-date");
        const currentDate = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        paymentDateElement.textContent = currentDate.toLocaleDateString('es-ES', options);

        // Función para regresar a la página anterior
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
