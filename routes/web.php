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


require __DIR__.'/settings.php';