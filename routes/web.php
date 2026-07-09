<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});


Route::get('/categorias', function () {

    $categorias = json_decode(json_encode([
        ["codigo" => "A02", "descripcion" => "Medicamentos para el tratamiento de Trastornos causados por Ácidos"],
        ["codigo" => "A03", "descripcion" => "Medicamentos contra Trastornos Funcionales Gastrointestinales"],
        ["codigo" => "A04", "descripcion" => "Medicamentos Antieméticos y Antinauseosos"],
        ["codigo" => "A06", "descripcion" => "Medicamentos para el Estreñimiento"],
        ["codigo" => "A07", "descripcion" => "Medicamentos Antidiarreicos, Antiinflamatorios y Antiinfecciosos Intestinales"],
        ["codigo" => "A10", "descripcion" => "Medicamentos usados en Diabetes"],
        ["codigo" => "A11", "descripcion" => "Vitaminas"],
        ["codigo" => "A12", "descripcion" => "Suplementos Minerales"]
    ]));


    echo "<h1>Categorías</h1>";

    echo "<table border='1' cellpadding='8'>";

    echo "<tr>
            <th>Código Categoría</th>
            <th>Descripción</th>
          </tr>";


    foreach ($categorias as $categoria) {

        echo "<tr>";
        echo "<td>$categoria->codigo</td>";
        echo "<td>$categoria->descripcion</td>";
        echo "</tr>";

    }


    echo "</table>";

});

Route::get('/medicamentos', function () {

    $medicamentos = json_decode(json_encode([

        [
            "codigo" => "A02BA02",
            "numero" => 1,
            "nombre" => "Ranitidina",
            "dosis" => "50 mg",
            "forma" => "Líquidos parenterales",
            "via" => "IM/IV"
        ],

        [
            "codigo" => "A02BA03",
            "numero" => 2,
            "nombre" => "Famotidina",
            "dosis" => "40 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "A02BC01",
            "numero" => 3,
            "nombre" => "Omeprazol",
            "dosis" => "20 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "A02BC01",
            "numero" => 4,
            "nombre" => "Omeprazol",
            "dosis" => "40 mg",
            "forma" => "Sólidos parenterales",
            "via" => "IV"
        ],

        [
            "codigo" => "A03BA01",
            "numero" => 1,
            "nombre" => "Atropina (Sulfato)",
            "dosis" => "0.5–1 mg/mL",
            "forma" => "Líquidos parenterales",
            "via" => "SC/IM/IV"
        ],

        [
            "codigo" => "A03BA03",
            "numero" => 2,
            "nombre" => "Hiosciamina (bromuro de n-butil hioscina)",
            "dosis" => "10 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "A03FA01",
            "numero" => 4,
            "nombre" => "Metoclopramida (clorhidrato)",
            "dosis" => "5 mg/mL",
            "forma" => "Líquidos parenterales",
            "via" => "IM/IV"
        ],

        [
            "codigo" => "A03FA01",
            "numero" => 5,
            "nombre" => "Metoclopramida (clorhidrato)",
            "dosis" => "10 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "A04AA01",
            "numero" => 1,
            "nombre" => "Ondansetron",
            "dosis" => "8 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "A04AA02",
            "numero" => 3,
            "nombre" => "Granisetron",
            "dosis" => "1 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "R06AA11",
            "numero" => 5,
            "nombre" => "Dimenhidrinato",
            "dosis" => "50 mg",
            "forma" => "Sólidos orales",
            "via" => "VO"
        ],

        [
            "codigo" => "R06AA11",
            "numero" => 6,
            "nombre" => "Dimenhidrinato",
            "dosis" => "50 mg/mL",
            "forma" => "Líquidos parenterales",
            "via" => "IM/IV"
        ]

    ]));


    echo "<h1>Medicamentos</h1>";

    echo "<table border='1' cellpadding='6'>";

    echo "<tr>
            <th>Código</th>
            <th>No</th>
            <th>Nombre</th>
            <th>Dosis</th>
            <th>Forma farmacéutica</th>
            <th>Vía de administración</th>
          </tr>";


    foreach ($medicamentos as $medicamento) {

        echo "<tr>";

        echo "<td>$medicamento->codigo</td>";
        echo "<td>$medicamento->numero</td>";
        echo "<td>$medicamento->nombre</td>";
        echo "<td>$medicamento->dosis</td>";
        echo "<td>$medicamento->forma</td>";
        echo "<td>$medicamento->via</td>";

        echo "</tr>";

    }


    echo "</table>";

});

Route::get('/clientes/vip', function(){
    // Creamos la lista de clientes array()
   $clientes = [
        (object) ['id' => 1, 'nombre' => 'Karen Criollo', 'telefono' => '+503 
        70000000', 'puntos_acumulados' => 15],
        (object) ['id' => 2, 'nombre' => 'Joel Cruz', 'telefono' => '+503 
        76000000', 'puntos_acumulados' => 5],
        (object) ['id' => 3, 'nombre' => 'Christopher Guevara', 'telefono' => '+503 
        76600000', 'puntos_acumulados' => 25]
   ];
   
   // Creamos la tabla con los registros de los clientes de forma dinámica
   $html = '
    <table border=1 cellspacing=0>
        <thead>
            <tr>
                <th>ID CLIENTE</th>
                <th>NOMBRE</th>
                <th>TELÉFONO</th>
                <th>PUNTOS ACUMULADOS</th>
            </tr>
        </thead>
        <tbody>
   ';
   foreach($clientes as $cliente){
        $html .= "
            <tr>
                <td>$cliente->id</td>
                <td>$cliente->nombre</td>
                <td>$cliente->telefono</td>
                <td>$cliente->puntos_acumulados</td>
            </tr>
        ";
   }
   $html .= '
        </tbody>
    </table>
   ';

   // Pintamos en la ventana del navegador la tabla
   echo $html;
});

Route::get('/proveedores/internacionales', function(){
    // Creamos la lista de proveedores
   $proveedores = [
        (object) ['empresa' => 'Pharma Plus', 'pais_origen' => 'Alemania', 'medicamento_principal' => 'Paracetamol', 
        'tiempo_entrega_dias' => 10],
        (object) ['empresa' => 'MedLife', 'pais_origen' => 'Estados Unidos', 'medicamento_principal' => 'Ibuprofeno', 
        'tiempo_entrega_dias' => 20],
        (object) ['empresa' => 'BioSalud', 'pais_origen' => 'Canadá', 'medicamento_principal' => 'Amoxicilina', 
        'tiempo_entrega_dias' => 18]
   ];
   
   // Creamos la tabla con los registros de los proveedores de forma dinámica
   $html = '
    <table border=1 cellspacing=0>
        <thead>
            <tr>
                <th>EMPRESA</th>
                <th>PAÍS DE ORIGEN</th>
                <th>MEDICAMENTO PRINCIPAL</th>
                <th>TIEMPO DE ENTREGA</th>
            </tr>
        </thead>
        <tbody>
   ';
   // Recorremos el arreglo de proveedores
   foreach($proveedores as $proveedor){
        //Se guarda unicamente el tiempo de entrega
        $tiempo = $proveedor->tiempo_entrega_dias;

        //Si el tiempo es mayor a 15 dias se agrega una advertencia
        if($tiempo > 15){
            $tiempo .= " (Demora Crítica)";
        }

        $html .= "
            <tr>
                <td>$proveedor->empresa</td>
                <td>$proveedor->pais_origen</td>
                <td>$proveedor->medicamento_principal</td>
                <td>$tiempo</td> 
            </tr>
        ";
        //Dentro de la tabla solo se escribe $tiempo ya que se guardo en esa variable 
        //<td>$proveedor->tiempo_entrega_dias</td> ya que debe salir el texto tambien, no solo el numero
   }
   $html .= '
        </tbody>
    </table>
   ';

   // Pintamos en la ventana del navegador la tabla
   echo $html;
});

Route::get('/lotes/inventario', function(){
    // Creamos la lista de lotes
   $lotes = [
        (object) ['codigo_lote' => 'LT001', 'nombre_medicamento' => 'Insulina', 'cantidad_cajas' => 120, 
        'temperatura_requerida_celsius' => 4],
        (object) ['codigo_lote' => 'LT002', 'nombre_medicamento' => 'Paracetamol', 'cantidad_cajas' => 200, 
        'temperatura_requerida_celsius' => 25],
        (object) ['codigo_lote' => 'LT003', 'nombre_medicamento' => 'Vacuna Influenza', 'cantidad_cajas' => 80, 
        'temperatura_requerida_celsius' => 2]
   ];
   
   // Creamos la tabla con los registros de los lotes
   $html = '
    <table border=1 cellspacing=0>
        <thead>
            <tr>
                <th>CÓDIGO DEL LOTE</th>
                <th>MEDICAMENTO</th>
                <th>CANTIDAD DE CAJAS</th>
                <th>TEMPERATURA (°C)</th>
            </tr>
        </thead>
        <tbody>
   ';
   // Recorremos cada lote
   foreach($lotes as $lote){
        //Se guarda el nombre del medicamento
        $medicamento = $lote->nombre_medicamento;

        //Si se requiere una temperatura menor o igual a 5°C, se agrega la etiqueta al nombre
        if($lote->temperatura_requerida_celsius <= 5){
            $medicamento .= " [Requiere Cadena de Frío]";
        }

        // Información del lote de la tabla
        $html .= "
            <tr>
                <td>$lote->codigo_lote</td>
                <td>$medicamento</td>
                <td>$lote->cantidad_cajas</td>
                <td>$lote->temperatura_requerida_celsius</td> 
            </tr>
        ";
   }
   $html .= '
        </tbody>
    </table>
   ';

   // Pintamos en la ventana del navegador la tabla
   echo $html;
});

require __DIR__.'/settings.php';