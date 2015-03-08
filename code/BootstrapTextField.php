<?php

/**
 * Description of BootstrapTextField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapTextField extends TextField
{

    protected $columnWidth;
    /**
     * Returns an input field, class="text" and type="text" with an optional maxlength
     *
     * @param $name
     * @param null $title
     * @param string $value
     * @param null $maxLength
     * @param null $form
     * @param null $columnWidth
     */
    public function __construct($name, $title = null, $value = '', $columnWidth=null ,$maxLength = null, $form = null)
    {
        $this->maxLength = $maxLength;
        $this->columnWidth = $columnWidth;

        parent::__construct($name, $title, $value, $form);
    }

    public function Field($properties = array())
    {

        return parent::Field($properties);
    }

    protected $extraClasses = array('form-control', 'field', 'text');

    public function extraClasses()
    {
        $classes = array($this->columnWidth,'field', 'form-control', parent::extraClasses());
        return implode(' ', $classes);
    }

}
