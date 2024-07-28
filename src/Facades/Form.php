<?php

namespace Symlink\LaravelHelper\Facades;

use Illuminate\Support\Facades\Facade;
use Symlink\LaravelHelper\Helpers\Ui\iCheckbox;
use Symlink\LaravelHelper\Helpers\Ui\iSelect;
use Symlink\LaravelHelper\Helpers\Ui\iText;
use Symlink\LaravelHelper\Helpers\Ui\Submit;

class Form extends Facade {
    //------------------------------------------------------------------------------
    protected static function getFacadeAccessor() {
        return 'form';
    }
    //------------------------------------------------------------------------------
    // Functions
    //------------------------------------------------------------------------------
    public static function itext($name, $label, $value='', $options=[]){
        $iText = new iText($name, $label, $value, $options);
        return $iText->build();
    }
    //------------------------------------------------------------------------------
    public static function iselect($name, $label, $data = [], $value = false, $options = []){
        $iSelect = new iSelect($name, $label, $data, $value, $options = []);
        return $iSelect->build();
    }
    //------------------------------------------------------------------------------
    public static function icheckbox($name, $label, $value = false, $options = []){
        $iCheckbox = new iCheckbox($name, $label, $value, $options = []);
        return $iCheckbox->build();
    }
    //------------------------------------------------------------------------------
    public static function submit($label, $options=[]){
        $submit = new Submit($label, $options);
        return $submit->build();
    }
    //------------------------------------------------------------------------------
}
