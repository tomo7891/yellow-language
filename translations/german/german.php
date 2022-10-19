<?php
// German extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/german

class YellowGerman {
    const VERSION = "0.8.34";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "de"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="de") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("de")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}