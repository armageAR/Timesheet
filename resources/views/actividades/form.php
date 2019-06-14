<div class="form-group row">
    <label for="inputText" class="col-sm-1 col-form-label">Codigo</label>
    <div class="col-sm-3">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.codigo}}" />
    </div>

    <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-6">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.nombre}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Franco</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.franco}}" />
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Signo</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.signo %}
            <option selected>{{entity.signo}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>+1</option>
            <option>-1</option>
        </select>
    </div>
</div>
<div class="form-group row">

</div>