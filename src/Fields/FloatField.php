<?php

namespace WTForms\Fields;

use  WTForms\Validators\TypeValidator;

class FloatField extends Field
{


    public function __construct($label,$validators=[],$options=[])
    {
        $this->widget = 'text';
        $validator = new TypeValidator($this->_form,$this,'float');
        $this->validators[get_class($validator)] = $validator;
        parent::__construct($label,$validators,$options);
    }

}