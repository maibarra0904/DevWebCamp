
<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige hasta 5 eventos para asistir de forma presencial.</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registro__fecha">Viernes 5 de Octubre</p>

        <?php //debuguear($eventos) ?>;
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_v'] as $evento) {
                include __DIR__ . '/evento.php';
            }; ?>
        </div>
    </main>

    <aside class="registro">
            <h2 class="registro__heading">Tu Registro</h2>
    </aside>
</div>
    