<div class="form-group row">
    <label for="inputText" class="col-sm-1 col-form-label">Nombre</label>
    <div class="col-sm-5">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.nombre}}" />
    </div>

    <label for="inputText" class="col-sm-1 col-form-label">Apellido</label>
    <div class="col-sm-5">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.apellido}}" />
    </div>
</div>
<hr />
<div class="form-group row">
    <label for="inputText" class="col-sm-1 col-form-label">Dirección</label>
    <div class="col-sm-5">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" placeholder="Calle" value="{{entity.dirCalle}}" />
    </div>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" placeholder="Número" value="{{entity.dirNumero}}" />
    </div>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" placeholder="Piso" value="{{entity.dirPiso}}" />
    </div>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" placeholder="Unidad" value="{{entity.dirUnidad}}" />
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.dirPais}}</option>
            <option>...</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.dirEstado}}</option>
            <option>...</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.dirCiudad}}</option>
            <option>...</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Código Postal</label>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" value="{{entity.dirCodigoPostal}}" />
    </div>
</div>
<hr />

<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.telefono}}" />
    </div>
    <label for="inputText" class="col-sm-1 col-form-label">eMail</label>
    <div class="col-sm-5">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.email}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Documento</label>
    <div class="col-sm-2">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option>{{entity.docTipo}}</option>
            <option>DNI</option>
            <option>Pasaporte</option>
        </select>
    </div>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" placeholder="Número" value="{{entity.docNumero}}" />
    </div>
    <label for="inputText" class="col-sm-1 col-form-label">Legajo</label>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control text-right" id="inputText" value="{{entity.legajo}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">ID Fiscal</label>
    <div class="col-sm-2">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.fiscalTipo}}</option>
            <option>CUIT</option>
            <option>CUIL</option>
            <option>RUT</option>
        </select>
    </div>
    <div class="col-sm-2">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" placeholder="Número" value="{{entity.fiscalNumero}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Nacionalidad</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.nacionalidad}}</option>
            <option>...</option>
        </select>
    </div>
    <label for="inputText" class="col-sm-1 col-form-label">Idioma</label>
    <div class="col-sm-5">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>{{entity.idioma}}</option>
            <option>...</option>
        </select>
    </div>
</div>
<hr />
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Tipo Categoria</label>
    <div class="col-sm-3">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>Seleccionar</option>
            <option>Bandera Argentina</option>
            <option>Bandera Bekga</option>
        </select>
    </div>

    <label for="inputText" class="col-sm-1 col-form-label">Categoria</label>
    <div class="col-sm-5">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>Seleccionar</option>
            <option>Capitán Ultramar</option>
            <option>Contramaestre</option>
            <option>Enfermero</option>
            <option>Electricista</option>
        </select>
    </div>
    <button type="button" class="btn btn-secondary btn-sm">Agregar</button>
</div>
<div class="form-group row">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Tipo Categoria</th>
                <th>Categoria</th>
                <th>Primaria</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {% if ( titulo !='Crear Persona') %}
            <tr>
                <td>Bandera Argentina</td>
                <td>Capitan</td>
                <td class="text-center"><input class="form-check-input" type="radio" name="banderaArgentina" id="exampleRadios1" value="option1" checked {% if state == 'disabled' %}disabled{% endif %}></td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <tr>
                <td>Bandera Argentina</td>
                <td>Contramaestre</td>
                <td class="text-center"><input class="form-check-input" type="radio" name="banderaArgentina" id="exampleRadios2" value="option1" {% if state == 'disabled' %}disabled{% endif %}></td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <tr>
                <td>Bandera Argentina</td>
                <td>Electricista</td>
                <td class="text-center"><input class="form-check-input" type="radio" name="banderaArgentina" id="exampleRadios3" value="option1" {% if state == 'disabled' %}disabled{% endif %}></td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <tr>
                <td>Bandera Belga</td>
                <td>3/O</td>
                <td class="text-center"><input class="form-check-input" type="radio" name="banderaBelga" id="exampleRadios1" value="option1" checked {% if state == 'disabled' %}disabled{% endif %}></td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <tr>
                <td>Bandera Belga</td>
                <td>2/O</td>
                <td class="text-center"><input class="form-check-input" type="radio" name="banderaBelga" id="exampleRadios2" value="option1" {% if state == 'disabled' %}disabled{% endif %}></td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            {% endif %}
        </tbody>
    </table>
</div>