<div class="form-group row">
    <label for="inputText" class="col-sm-1 col-form-label">Codigo</label>
    <div class="col-sm-3">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.codigo}}" />
    </div>

    <label for="inputText" class="col-sm-2 col-form-label">Detalle</label>
    <div class="col-sm-6">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.detalle}}" />
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Convenio</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.convenio}}" />
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Tipo Categoria</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.tipocate %}
            <option selected>{{entity.tipocate}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Bandera Argentina</option>
            <option>Bandera Belga</option>
        </select>
    </div>
</div>
<div class="form-group row">

</div>