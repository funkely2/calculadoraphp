<?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = null;

        // Validaciones
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<div class='result'>Error: Ambos valores deben ser números.</div>";
        } else {
            switch ($operacion) {
                case 'suma':
                    $resultado = $num1 + $num2;
                    break;
                case 'resta':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacion':
                    $resultado = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 == 0) {
                        echo "<div class='result'>Error: No se puede dividir por cero.</div>";
                    } else {
                        $resultado = $num1 / $num2;
                    }
                    break;
                default:
                    echo "<div class='result'>Error: Operación no válida.</div>";
                    break;
            }

            if ($resultado !== null) {
                echo "<div class='result'>El resultado es: " . $resultado . "</div>";
            }
        }
    }
    ?>
