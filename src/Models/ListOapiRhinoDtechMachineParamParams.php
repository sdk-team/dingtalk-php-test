<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiRhinoDtechMachineParamParams extends Model {
    protected $_name = [
        'bizIdProcessList' => 'biz_id_process_list',
    ];
    public function validate() {
        Model::validateRequired('bizIdProcessList', $this->bizIdProcessList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizIdProcessList) {
            $res['biz_id_process_list'] = $this->bizIdProcessList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRhinoDtechMachineParamParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id_process_list'])){
            if(!empty($map['biz_id_process_list'])){
                $model->bizIdProcessList = $map['biz_id_process_list'];
            }
        }
        return $model;
    }
    /**
     * @description 工序bizid列表
     * @var array
     */
    public $bizIdProcessList;

}
