<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
</head>
<body>
    <div class="contenedor">
    <h2>Registro de Cliente</h2>

    <form>

        <label>Código del Cliente</label>
        <input type="text" placeholder="Ingrese el código">

        <label>Nombre Completo</label>
        <input type="text" placeholder="Ingrese el nombre">

        <label>Teléfono</label>
        <input type="text" placeholder="Ingrese el teléfono">

        <label>Dirección</label>
        <input type="text" placeholder="Ingrese la dirección">

        <label>Municipio</label>
        <select>
            <option>Seleccione</option>
            <option>San Salvador</option>
            <option>Soyapango</option>
            <option>Mejicanos</option>
        </select>

        <label>Distrito</label>
        <select>
            <option>Seleccione</option>
            <option>Distrito 1</option>
            <option>Distrito 2</option>
        </select>

        <label>Departamento</label>
        <select>
            <option>Seleccione</option>
            <option>San Salvador</option>
            <option>La Libertad</option>
            <option>Santa Ana</option>
        </select>

        <div class="botones">
            <button type="submit">Guardar</button>
            <button type="reset">Cancelar</button>
        </div>

    </form>

</div>
</body>
</html>