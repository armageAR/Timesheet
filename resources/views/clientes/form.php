<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Razon Social</label>
    <div class="col-sm-8">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.razonSocial}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">ID Fiscal</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.fiscalTipo %}
            <option selected>{{entity.fiscalTipo}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>CUIT</option>
            <option>RUT</option>
        </select>
    </div>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" placeholder="Número" value="{{entity.fiscalNumero}}" />
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
            {% if entity.dirPais %}
            <option selected>{{entity.dirPais}}</option>
            {% else %}
            <option selected>Pais</option>
            {% endif %}
            <option>Argentina</option>
            <option>Chile</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.dirEstado %}
            <option selected>{{entity.dirEstado}}</option>
            {% else %}
            <option selected>Estado</option>
            {% endif %}
            <option>...</option>
        </select>
    </div>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.dirCiudad %}
            <option selected>{{entity.dirCiudad}}</option>
            {% else %}
            <option selected>Ciudad</option>
            {% endif %}
            <option>...</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Código Postal</label>
    <div class="col-sm-4">
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
    <label for="inputText" class="col-sm-2 col-form-label">Nacionalidad</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.nacionalidad %}
            <option selected>{{entity.nacionalidad}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Argentina</option>
            <option>Paraguaya</option>
        </select>
    </div>
    <label for="inputText" class="col-sm-1 col-form-label">Idioma</label>
    <div class="col-sm-5">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.idioma %}
            <option selected>{{entity.idioma}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>...</option>
        </select>
    </div>
</div>