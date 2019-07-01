<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.codigo}}" />
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.nombre}}" />
    </div>
</div>

<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Pais</label>
    <div class="col-sm-4">

        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.pais %}
            <option selected>{{entity.pais}}</option>
            {% else %}
            <option selected>Seleccione...</option>
            {% endif %}
            <option>Argentina</option>
            <option>Chile</option>
        </select>
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Tipo</label>
    <div class="col-sm-4">

        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.tipo %}
            <option selected>{{entity.tipo}}</option>
            {% else %}
            <option selected>Seleccione...</option>
            {% endif %}
            <option>Navio</option>
            <option>Proyecto</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Fecha Inicio</label>
    <div class="col-sm-4">
        <input type="date" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.fechaInicio}}" />
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Fecha Fin</label>
    <div class="col-sm-4">
        <input type="date" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.fechaFin}}" />
    </div>
</div>