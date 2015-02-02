<?php

/**
 * Description of BootstrapTextField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapTextField extends TextField {

    public function Field($properties = array()) {

        return parent::Field($properties);
    }

    protected $extraClasses = array('form-control', 'field', 'text');

    public function extraClasses() {
        $classes = array('field', 'form-control', parent::extraClasses());
        return implode(' ', $classes);
    }

}
