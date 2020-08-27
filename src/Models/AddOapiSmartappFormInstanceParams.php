<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiSmartappFormInstanceParams\dataList;

class AddOapiSmartappFormInstanceParams extends Model {
    protected $_name = [
        'operatorUserid' => 'operator_userid',
        'appUuid' => 'app_uuid',
        'formCode' => 'form_code',
        'dataList' => 'data_list',
    ];
    public function validate() {
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
        Model::validateRequired('appUuid', $this->appUuid, true);
        Model::validateRequired('formCode', $this->formCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        if (null !== $this->appUuid) {
            $res['app_uuid'] = $this->appUuid;
        }
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        if (null !== $this->dataList) {
            $res['data_list'] = [];
            if(null !== $this->dataList && is_array($this->dataList)){
                $n = 0;
                foreach($this->dataList as $item){
                    $res['data_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiSmartappFormInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        if(isset($map['app_uuid'])){
            $model->appUuid = $map['app_uuid'];
        }
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        if(isset($map['data_list'])){
            if(!empty($map['data_list'])){
                $model->dataList = [];
                $n = 0;
                foreach($map['data_list'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 操作人ID
     * @var string
     */
    public $operatorUserid;

    /**
     * @description 表单应用ID
     * @var string
     */
    public $appUuid;

    /**
     * @description 表单ID
     * @var string
     */
    public $formCode;

    /**
     * @description 插入数据列表
     * @var array
     */
    public $dataList;

}
