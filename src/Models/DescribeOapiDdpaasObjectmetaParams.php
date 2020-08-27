<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DescribeOapiDdpaasObjectmetaParams extends Model {
    protected $_name = [
        'formCode' => 'form_code',
        'appUuid' => 'app_uuid',
    ];
    public function validate() {
        Model::validateRequired('formCode', $this->formCode, true);
        Model::validateRequired('appUuid', $this->appUuid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        if (null !== $this->appUuid) {
            $res['app_uuid'] = $this->appUuid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeOapiDdpaasObjectmetaParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        if(isset($map['app_uuid'])){
            $model->appUuid = $map['app_uuid'];
        }
        return $model;
    }
    /**
     * @description 表单编号
     * @var string
     */
    public $formCode;

    /**
     * @description PaaS应用ID
     * @var string
     */
    public $appUuid;

}
