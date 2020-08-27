<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiAlitripBtripCostCenterEntityResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'selectedUserNum' => 'selected_user_num',
        'removeNum' => 'remove_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->selectedUserNum) {
            $res['selected_user_num'] = $this->selectedUserNum;
        }
        if (null !== $this->removeNum) {
            $res['remove_num'] = $this->removeNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['selected_user_num'])){
            $model->selectedUserNum = $map['selected_user_num'];
        }
        if(isset($map['remove_num'])){
            $model->removeNum = $map['remove_num'];
        }
        return $model;
    }
    /**
     * @description 该成本中心下员工总数
     * @var int
     */
    public $selectedUserNum;

    /**
     * @description 删除的人员信息条数
     * @var int
     */
    public $removeNum;

}
