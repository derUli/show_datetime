<?php $controller = ControllerRegistry::get("ShowDatetimeController"); ?>
<?php
echo ModuleHelper::buildMethodCallForm("ShowDatetimeController", "saveSettings", array(), "post", array(
    "data-preview-url" => ModuleHelper::buildMethodCallUrl("ShowDatetimeController", "previewDatePost", "csrf_token=" . get_csrf_token()),
    "id" => "show_datetime_settings_form"
));
?>
<?php if (Request::hasVar("save")) { ?>
    <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php translate("changes_was_saved") ?>
    </div>
<?php } ?>
<p>
    <strong><?php translate("date_format"); ?></strong><br /> <input
        type="text" name="show_datetime_format" id="show_datetime_format"
        value="<?php esc(Settings::get("show_datetime_format")); ?>"> <small><?php translate("see_strftime", array("%link%" => "http://php.net/manual/de/function.strftime.php")); ?></small>
</p>
<strong><?php translate("preview"); ?></strong>
<pre id="date_format_preview"><?php esc($controller->render()); ?></pre>
<button type="submit" class="btn btn-success"><?php translate("save"); ?></button>
<?php echo ModuleHelper::endForm() ?>
<script type="text/javascript"
        src="<?php echo ModuleHelper:: buildRessourcePath("show_datetime", "js/settings.js"); ?>">
</script>