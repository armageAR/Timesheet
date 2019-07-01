<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.name}}" />
    </div>


</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.description}}" />
    </div>


</div>