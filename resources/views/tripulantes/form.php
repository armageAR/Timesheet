<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Persona</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.persona %}
            <option selected>{{entity.persona.nombre}} {{entity.persona.apellido}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Persona otra</option>
            <option>Persona otra</option>
            <option>Persona otra</option>
            <option>Persona otra</option>
        </select>
    </div>


</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Contrato</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.contrato %}
            <option selected>{{entity.contrato.referencia}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Contrato otro</option>
            <option>Contrato otro</option>
            <option>Contrato otro</option>
            <option>Contrato otro</option>
        </select>
    </div>
</div>












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
            {% if ( titulo !='Crear Tripulante') %}
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


















<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Centro de Costos</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.centrocostos %}
            <option selected>{{entity.centrocostos.nombre}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Centro Costos</option>
            <option>Centro Costos</option>
            <option>Centro Costos</option>
        </select>
    </div>


</div>