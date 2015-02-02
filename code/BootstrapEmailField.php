<?php

/**
 * Description of BootstrapEmailField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapEmailField extends EmailField {

    public function Field($properties = array()) {

        return parent::Field($properties);
    }

    protected $extraClasses = array('form-control', 'field', 'textarea');

    public function extraClasses() {
        $classes = array('field', 'form-control', parent::extraClasses());
        return implode(' ', $classes);
    }

}
