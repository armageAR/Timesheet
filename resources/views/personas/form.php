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