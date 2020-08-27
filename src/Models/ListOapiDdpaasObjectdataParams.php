<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiDdpaasObjectdataParams extends Model {
    protected $_name = [
        'currentOperatorUserid' => 'current_operator_userid',
        'dataIdList' => 'data_id_list',
        'appUuid' => 'app_uuid',
        'formCode' => 'form_code',
    ];
    public function validate() {
        Model::validateRequired('dataIdList', $this->dataIdList, true);
        Model::validateRequired('appUuid', $this->appUuid, true);
        Model::validateRequired('formCode', $this->formCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->currentOperatorUserid) {
            $res['current_operator_userid'] = $this->currentOperatorUserid;
        }
        if (null !== $this->dataIdList) {
            $res['data_id_list'] = $this->dataIdList;
        }
        if (null !== $this->appUuid) {
            $res['app_uuid'] = $this->appUuid;
        }
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiDdpaasObjectdataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_operator_userid'])){
            $model->currentOperatorUserid = $map['current_operator_userid'];
        }
        if(isset($map['data_id_list'])){
            if(!empty($map['data_id_list'])){
                $model->dataIdList = $map['data_id_list'];
            }
        }
        if(isset($map['app_uuid'])){
            $model->appUuid = $map['app_uuid'];
        }
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        return $model;
    }
    /**
     * @description 当前操作用户ID，不填默认系统身份
     * @var string
     */
    public $currentOperatorUserid;

    /**
     * @description 表单数据实例ID列表
     * @var array
     */
    public $dataIdList;

    /**
     * @description 钉钉PaaS应用ID
     * @var string
     */
    public $appUuid;

    /**
     * @description 钉钉PaaS表单编号
     * @var string
     */
    public $formCode;

}
