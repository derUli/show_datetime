<?php

class ShowDatetimeController extends Controller {

    private $moduleName = "show_datetime";

    public function render() {
        return _esc(trim(PHP81_BC\strftime(Settings::get("show_datetime_format", "str") ?? "")));
    }

    public function getSettingsHeadline() {
        return get_translation("show_datetime");
    }

    public function settings() {
        return Template::executeModuleTemplate($this->moduleName, "settings.php");
    }

    public function saveSettingsPost() {
        Settings::set("show_datetime_format", Request::getVar("show_datetime_format"));
        Request::redirect(ModuleHelper::buildAdminURL($this->moduleName, "save"));
    }

    public function previewDatePost() {
        HTMLResult(_esc(trim(PHP81_BC\strftime(Request::getVar("show_datetime_format", "", "str")))));
    }

}
