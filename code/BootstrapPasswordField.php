<?php

/**
 * Description of BootstrapPasswordField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapPasswordField extends PasswordField {

    public function Field($properties = array()) {

        return parent::Field($properties);
    }

    protected $extraClasses = array('form-control');

    public function extraClasses() {
        $classes = array('form-control', parent::extraClasses());
        return implode(' ', $classes);
    }

}
