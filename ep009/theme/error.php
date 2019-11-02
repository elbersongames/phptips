<?php $v->layout("_theme"); ?>

<div class="error">
    <h2>Ooopss error <?= $error; ?>!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, voluptate.</p>
</div>

<?php $v->start("sidebar"); ?>
<a href="<?= url() ?>" title="Voltar ao inicio">Voltar</a>
<?php $v->end(); ?>
