<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input type="text" 
        class="formulario__input" id="nombre" 
        name="nombre" 
        placeholder="Nombre Evento"
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea  
        class="formulario__input" id="descripcion" 
        name="descripcion" 
        placeholder="Descripción Evento"
        rows="7"
        ></textarea>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoría a Tipo de Evento</label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="">- Seleccionar -</option>
            <?php foreach($categorias as $categoria) { ?>
                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre ?></option>
            <?php }; ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="dia" class="formulario__label">Categoría a Tipo de Evento</label>
        <div class="formulario__radio">
            <?php foreach($dias as $dia) { ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre) ; ?>"><?php echo $dia->nombre ?></label>
                    <input type="radio"
                        id="<?php echo strtolower($dia->nombre) ; ?>"
                        name="dia"
                        value="<?php echo strtolower($dia->id) ; ?>"
                    >
                </div>
                
            <?php }; ?>
        </div>
            
    </div>

    <div class="formulario__campo" id="horas">
        <label for="" class="formulario__label">Seleccionar Hora</label>

        <ul class="horas">
            <?php 
                foreach($horas as $hora) {
            ?>
                <li class="horas__hora"><?php echo $hora->hora; ?></li>
            <?php }; ?>
        </ul>
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>
                
    
    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input type="text" 
        class="formulario__input" id="ponentes" 
        placeholder="Buscar Ponente"
        >
    </div>

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input type="number"
        min="1" 
        class="formulario__input" id="disponibles"
        name="disponibles" 
        placeholder="Buscar Ponente"
        >
    </div>

</fieldset>