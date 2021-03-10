<?php
    class Taula extends DB {

        public function __construct() {
            parent::__construct();
        }

        public function MostrarCompras($tabla, $datos){
            $subtotal = 0.0;
            if ($resultado=parent::buscar($tabla, $datos)) {
                echo '  <form method="post" action="insereix.php">
                            <button type="submit" class="btn btn-primary">Nou producte</button>
                        </form>';
                echo "  <table class='table'>
                            <thead class='thead-dark'>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>Nom Producte</th>
                                    <th scope='col'>Preu Unitat</th>
                                    <th scope='col'>Quantitat</th>
                                    <th scope='col'>Total</th>
                                    <th scope='col'>Opcions</th>
                                </tr>
                            </thead>
                            <tbody>";
                foreach ($resultado as $value) {
                    echo "      <tr>
                                    <th scope='row'>".$value['id']."</div>
                                    <td class='texto'>".$value['nom']."</td>
                                    <td class='moneda'>".$value['preu']."</td>
                                    <td class='numero'>".$value['cant']."</td>
                                    <td class='moneda'>".$value['cant']*$value['preu']."</td>
                                    <td>
                                        <a href='modificar.php?id=".$value['id']."'><i class='fas fa-edit'></i></a>
                                        <a href='esborrar.php?id=".$value['id']."'><i class='fas fa-trash-alt'></i></a>
                                    </td>
                                </tr>";
                    $subtotal += $value['cant']*$value['preu'];
                }
                echo "          <tr class='table-dark'>
                                    <td colspan='3'><strong>Total</strong></td>
                                    <td class='moneda'><strong>".$subtotal."</strong></td>
                                    <td></td>
                                </tr>";
                echo "      </tbody>
                        </table>";
            } else {
                echo "<strong>No hay registros</strong>";
            }
            if($resultado)
                return true;
            return false;
        }
    }
?>