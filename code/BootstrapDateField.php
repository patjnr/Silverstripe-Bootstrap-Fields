<?php

/**
 * Description of BootstrapTextField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapDateField extends DateField
{

    public function Field($properties = array())
    {
        Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
        Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.js');
        Requirements::javascript(BOOTSTRAPFIELDS__DIR . '/js/BootstrapDateField.js');
        return parent::Field($properties);
    }

    protected $extraClasses = array('form-control', 'bootstrap-date-field');

    public function extraClasses()
    {
        $classes = array('field', 'form-control', parent::extraClasses());
        return implode(' ', $classes);
    }

}
