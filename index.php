<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora Estética</title>
    <style>
        
    </style>
    <script>
        function appendValue(value) {
            document.getElementById('display').value += value;
        }
        function clearDisplay() {
            document.getElementById('display').value = '';
        }
        function calculate() {
            try {
                document.getElementById('display').value = eval(document.getElementById('display').value);
            } catch (e) {
                document.getElementById('display').value = 'Error';
            }
        }
    </script>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" class="display" readonly>
        <div class="buttons">
            <button onclick="appendValue('7')">7</button>
            <button onclick="appendValue('8')">8</button>
            <button onclick="appendValue('9')">9</button>
            <button class="operator" onclick="appendValue('/')">÷</button>
            <button onclick="appendValue('4')">4</button>
            <button onclick="appendValue('5')">5</button>
            <button onclick="appendValue('6')">6</button>
            <button class="operator" onclick="appendValue('*')">×</button>
            <button onclick="appendValue('1')">1</button>
            <button onclick="appendValue('2')">2</button>
            <button onclick="appendValue('3')">3</button>
            <button class="operator" onclick="appendValue('-')">-</button>
            <button class="zero" onclick="appendValue('0')">0</button>
            <button onclick="appendValue('.')">.</button>
            <button class="operator" onclick="appendValue('+')">+</button>
            <button class="clear" onclick="clearDisplay()">C</button>
            <button class="equal" onclick="calculate()">=</button>
            <?php include("codigo.php"); ?>
        </div>
    </div>
</body>
</html>
