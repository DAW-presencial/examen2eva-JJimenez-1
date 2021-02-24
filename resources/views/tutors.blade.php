<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</head>

<body>
    <h1>Tutor de l'empresa</h1>
    <h2>Tutor de l'empresa</h2>
    <form>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" placeholder="Enter empresa" value="{{ old('empresa') }}">
        </div>
        <div class="form-group">
            <label for="tipus_document">Tipus document </label>
            <input type="text" class="form-control" id="tipus_document" placeholder="tipus_document" value="{{ old('tipus_docuemnt') }}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" placeholder="dni" value="{{ old('dni') }}">
        </div>
        <div class="form-group">
            <label for="nom_tutor">Nom</label>
            <input type="text" class="form-control" id="nom_tutor" placeholder="nom_tutor" value="{{ old('nom_tutor') }}">
        </div>
        <div class="form-group">
            <label for="primer_llinatge">primer_llinatge</label>
            <input type="text" class="form-control" id="primer_llinatge" placeholder="primer_llinatge" value="{{ old('primer_llinatge') }}">
        </div>
        <div class="form-group">
            <label for="segon_llinatge">segon_llinatge</label>
            <input type="text" class="form-control" id="segon_llinatge" placeholder="segon_llinatge" value="{{ old('segon_llinatge') }}">
        </div>
        <div class="form-group">
            <label for="pais_dni">pais_dni</label>
            <input type="text" class="form-control" id="pais_dni" placeholder="pais_dni" value="{{ old('pais_dni') }}">
        </div>
        <div class="form-group">
            <label for="provincia">provincia</label>
            <input type="text" class="form-control" id="provincia" placeholder="provincia" value="{{ old('provincia') }}">
        </div>
        <div class="form-group">
            <label for="municipi">municipi</label>
            <input type="text" class="form-control" id="municipi" placeholder="municipi" value="{{ old('municipi') }}">
        </div>
        <div class="form-group">
            <label for="estat">estat</label>
            <select class="form-control" id="estat">
                <option>Tutor en activo</option>
                <option>Tutor inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telefon">telefon</label>
            <input type="text" class="form-control" id="telefon" placeholder="telefon" value="{{ old('telefon') }}">
        </div>
        <div class="form-group">
            <label for="provincia">provincia</label>
            <input type="text" class="form-control" id="provincia" placeholder="provincia" value="{{ old('provincia') }}">
        </div>
        <button type="submit" class="btn btn-primary">Desa</button>
        <button type="submit" class="btn btn-primary">Cancel-la</button>
    </form>
</body>

</html>