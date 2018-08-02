<?php
/**
 * 验证一个值是否是数字
 * @author ambi
 * @date 2018/8/2
 */

namespace Janice\Validator;


use Janice\Library\JaniceMessage;
use Janice\Validation;

class DigitalValidator extends Validator
{
    protected $defaultCode = 10001;
    protected $defaultMessage = ':field must be digital';

    public function validator(Validation $validation, $field)
    {
        $value = $validation->getValue($field);
        if (is_numeric($value)) {
            return true;
        }
        $code = $this->getCode();
        $message = $this->getMessage($field);
        return new JaniceMessage($code, $message);
    }
}