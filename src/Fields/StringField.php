<?php

namespace WTForms\Fields;

use  WTForms\Validators\TypeValidator;


class StringField extends Field
{

    public function __construct($label,$validators=[],$options=[])
    {
        $this->widget = 'text';
        $validator = new TypeValidator($this->_form,$this,'string');
        $this->validators[get_class($validator)] = $validator;
        parent::__construct($label,$validators,$options);
    }



}