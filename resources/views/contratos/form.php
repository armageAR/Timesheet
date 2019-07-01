<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Numero</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.numero}}" />
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-4">
        <input type="text" {% if state == 'disabled' %}readonly{% endif %} class="form-control" id="inputText" value="{{entity.referencia}}" />
    </div>


</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Cliente</label>
    <div class="col-sm-4">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            {% if entity.cliente %}
            <option selected>{{entity.cliente}}</option>
            {% else %}
            <option selected>Seleccionar...</option>
            {% endif %}
            <option>Oil Petroleo</option>
            <option>Comañia del Sol SL</option>
            <option>Laguna Seca SA</option>
            <option>Terreno Virgen SA</option>
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
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Actividades</label>
    <div class="col-sm-4">
        <select multiple id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control" style="height: 124pt">
            <option {% if 'EM' in entity.actividad %}selected{% endif %}>EM Embarcado</option>
            <option {% if 'AO' in entity.actividad %}selected{% endif %}>AO A ÓRDENES</option>
            <option {% if 'AC' in entity.actividad %}selected{% endif %}>AC ACCIDENTADO</option>
            <option {% if 'AA' in entity.actividad %}selected{% endif %}>AA ACCIDENTADO ART</option>
            <option {% if 'FR' in entity.actividad %}selected{% endif %}>FR FRANCO</option>
            <option {% if 'FT' in entity.actividad %}selected{% endif %}>FT FERIADO TRABAJADO</option>
            <option {% if 'VC' in entity.actividad %}selected{% endif %}>VC VACACIONES</option>
            <option {% if 'SG' in entity.actividad %}selected{% endif %}>SG LICENCIA SIN GOCE DE HABERES</option>
            <option {% if 'X' in entity.actividad %}selected{% endif %}>X SIN RELACIÓN CON EL CENTRO DE COSTOS</option>
            <option {% if 'EF' in entity.actividad %}selected{% endif %}>EF ENFERMEDAD</option>
            <option {% if 'RP' in entity.actividad %}selected{% endif %}>RP RESERVAR PUESTO</option>
            <option {% if 'DO' in entity.actividad %}selected{% endif %}>DO DOMINGO</option>
            <option {% if 'EX' in entity.actividad %}selected{% endif %}>EX EXAMEN</option>
            <option {% if 'I' in entity.actividad %}selected{% endif %}>I INGLÉS</option>
        </select>
    </div>
    <label for="inputText" class="col-sm-2 col-form-label">Tipo Categorias</label>
    <div class="col-sm-4">
        <select multiple id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control" style="height: 124pt">
            <option {% if 'BA' in entity.tipoCategorias %}selected{% endif %}>Bandera Argentina</option>
            <option {% if 'BB' in entity.tipoCategorias %}selected{% endif %}>Bandera Belga</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Centros de Costo</label>
    <div class="col-sm-5">
        <select id="inputState" {% if state == 'disabled' %}disabled{% endif %} class="form-control">
            <option selected>Seleccionar</option>
            <option>Buque El Rayo</option>
            <option>Barco Puan</option>
            <option>Proyecto Flores</option>
        </select>
    </div>
    <button type="button" class="btn btn-secondary btn-sm">Agregar</button>

</div>
<div class="form-group row">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {% if ( titulo !='Crear Centro Costo') %}
            <tr>
                <td>COD029</td>
                <td>Buque El Rayo</td>
                <td class="text-center"><a href='#'><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <tr>
                <td>ARQ1010</td>
                <td>Proyecto Flores</td>
                <td class="text-center">
                    {% if state == 'disabled' %}
                    <i class='fas fa-trash-alt'></i>
                    {% else %}
                    <a href='#'><i class='fas fa-trash-alt'></i></a></td>
                    {% endif %}
            </tr>

            {% endif %}
        </tbody>
    </table>
</div>