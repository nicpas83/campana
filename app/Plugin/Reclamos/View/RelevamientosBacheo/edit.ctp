<?php

$this->Html->scriptBlock("var OP = 'A';\n var PLUGIN = '" . $plugin . "';\n var MODEL = '" . $model . "';\n var fields = " . json_encode($fields) . ";\n", array('inline' => false));
$this->Html->script('fmw/default/maint', array('inline' => false));
$this->Html->script('fmw/default/tables', array('inline' => false));
$this->Html->script('fmw/default/ajax_upload', array('inline' => false));
$this->Html->script('fmw/default/files', array('inline' => false));
if (!isset(AppConfig::$array['maint']['js_validation']) || AppConfig::$array['maint']['js_validation']) {
    $this->Html->script('fmw/default/validation', array('inline' => false));
    $this->Html->scriptBlock($jsrules, array('inline' => false));
}
foreach ($cssincludes as $cssinclude) {
    $this->Html->css($cssinclude, array('inline' => false));
}
foreach ($jsincludes as $jsinclude) {
    $this->Html->script($jsinclude, array('inline' => false));
}
?>

<?php echo (!empty($title) ? "<h3 class='maint-title'>" . $title . "</h3>" : ""); ?>

<?php echo $this->AppForm->create($model, array('type' => 'file', 'class' => 'form-inline')); ?>

<div class="row">
    <div class="col-md-12">
<?php echo $this->Template->drawBlockById("reclamo"); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
<?php echo $this->Template->drawBlockById("ubicacion"); ?>
    </div>
    <div class="col-md-6">
<?php echo $this->Template->drawBlockById("mapa"); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
<?php echo $this->Template->drawBlockById("5"); ?>
    </div>
</div>
<div class="row" id="cursos">
    <div class="col-md-12">
<?php echo $this->Template->drawBlockById("6"); ?>
    </div>
</div>
<div class="row" id="cursos">
    <div class="col-md-12">
<?php echo $this->Template->drawBlockById("archivos"); ?>
    </div>
</div>

<?php echo $this->element('files/list', array('files' => $files, 'add' => true)); ?>

<input type="hidden" name="_next" value="<?php echo $next; ?>" /> 
<input type="hidden" name="data[<?php echo $model; ?>][_rules]" value="" />

<?php echo $this->AppForm->end(["label" => __(isset($submit) ? $submit : Translate::getValue("maint.save")), 'class' => 'btn btn-primary pull-right mt10', 'div' => false]); ?>
<?php if ($cancel) echo $this->Html->link(__('Cancelar'), $next, array('id' => 'cancelButton', 'onclick' => 'return loadContent(this);', 'class' => 'btn btn-default pull-right mr10 mt10')); ?>

<?php echo $this->element('js_initial'); ?>