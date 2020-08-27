<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoveuserlistOapiCallParams extends Model {
    protected $_name = [
        'staffIdList' => 'staff_id_list',
    ];
    public function validate() {
        Model::validateRequired('staffIdList', $this->staffIdList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->staffIdList) {
            $res['staff_id_list'] = $this->staffIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveuserlistOapiCallParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['staff_id_list'])){
            if(!empty($map['staff_id_list'])){
                $model->staffIdList = $map['staff_id_list'];
            }
        }
        return $model;
    }
    /**
     * @description 要删除的员工userid列表
     * @var array
     */
    public $staffIdList;

}
