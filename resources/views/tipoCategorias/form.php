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