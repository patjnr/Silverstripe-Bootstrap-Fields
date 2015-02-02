<?php

/**
 * Description of BootstrapProfileImageField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapProfileImageField extends FileField {

    protected $hasFileLoaded;
    protected $member;
    protected $field_name;
    protected $fieldId;

    public function __construct($name, $title = null, $value = null) {
        $this->member = Member::currentUser();
        $this->field_name = $name;
        $fieldId = $name . 'ID';
        $this->hasFileLoaded = ($this->member->$fieldId != 0);
        if ($this->hasFile()) {
            $value = $this->member->Avatar();
        }
        parent::__construct($name, $title, $value);
    }

    public function Field($properties = array()) {

        return parent::Field($properties);
    }

    function getFileLink() {
        $member = $this->member;
        $field = $this->getName();
        $fieldId = $field . 'ID';
        if ($member->$fieldId != 0) {
            return $member->$field()->URL;
        }
        return false;
    }

    function hasFile() {
        return $this->hasFileLoaded;
    }

    function Member() {
        if ($this->member) {
            return $this->member;
        }
        return false;
    }

}
