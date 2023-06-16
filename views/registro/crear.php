<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>
</main>

<div class="paquetes__grid">
    <div class="paquete">
        <h3 class="paquete__nombre">Pase Gratis</h3>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso virtual a DevWebCamp</li>
        </ul>

        <p class="paquete__precio">$0</p>

        <form method="POST" action="/finalizar-registro/gratis">
            <input type="submit" class="paquetes__submit" value="Inscripción Gratis">
        </form>

    </div>

    <div class="paquete">
        <h3 class="paquete__nombre">Pase Presencial</h3>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso presencial a DevWebCamp</li>
            <li class="paquete__elemento">Pase por 2 días</li>
            <li class="paquete__elemento">Acceso a talleres y conferencias</li>
            <li class="paquete__elemento">Acceso a las Grabaciones</li>
            <li class="paquete__elemento">Camisa del evento</li>
            <li class="paquete__elemento">Comida y bebida</li>
        </ul>

        <p class="paquete__precio">$199</p>
    </div>

    <div class="paquete">
        <h3 class="paquete__nombre">Pase Virtual</h3>
        <ul class="paquete__lista">
            <li class="paquete__elemento">Acceso virtual a DevWebCamp</li>
            <li class="paquete__elemento">Pase por 2 días</li>
            <li class="paquete__elemento">Enlace a talleres y conferencias</li>
            <li class="paquete__elemento">Acceso a las Grabaciones</li>
        </ul>

        <p class="paquete__precio">$49</p>
    </div>
    
</div>