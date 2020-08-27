<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiCollectionFormParams extends Model {
    protected $_name = [
        'formCode' => 'form_code',
        'actionDate' => 'action_date',
    ];
    public function validate() {
        Model::validateRequired('formCode', $this->formCode, true);
        Model::validateRequired('actionDate', $this->actionDate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        if (null !== $this->actionDate) {
            $res['action_date'] = $this->actionDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiCollectionFormParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        if(isset($map['action_date'])){
            $model->actionDate = $map['action_date'];
        }
        return $model;
    }
    /**
     * @description code
     * @var string
     */
    public $formCode;

    /**
     * @description 毫秒级时间戳
     * @var string
     */
    public $actionDate;

}
