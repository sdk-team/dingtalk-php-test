<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAlitripBtripCostCenterEntityResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'selectedUserNum' => 'selected_user_num',
        'addNum' => 'add_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->selectedUserNum) {
            $res['selected_user_num'] = $this->selectedUserNum;
        }
        if (null !== $this->addNum) {
            $res['add_num'] = $this->addNum;
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
        if(isset($map['add_num'])){
            $model->addNum = $map['add_num'];
        }
        return $model;
    }
    /**
     * @description 该成本中心下员工总数
     * @var int
     */
    public $selectedUserNum;

    /**
     * @description 增加的人员信息条数
     * @var int
     */
    public $addNum;

}
