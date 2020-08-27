<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SetOapiAlitripBtripCostCenterEntityResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'addNum' => 'add_num',
        'removeNum' => 'remove_num',
        'selectedUserNum' => 'selected_user_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->addNum) {
            $res['add_num'] = $this->addNum;
        }
        if (null !== $this->removeNum) {
            $res['remove_num'] = $this->removeNum;
        }
        if (null !== $this->selectedUserNum) {
            $res['selected_user_num'] = $this->selectedUserNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['add_num'])){
            $model->addNum = $map['add_num'];
        }
        if(isset($map['remove_num'])){
            $model->removeNum = $map['remove_num'];
        }
        if(isset($map['selected_user_num'])){
            $model->selectedUserNum = $map['selected_user_num'];
        }
        return $model;
    }
    /**
     * @description 增加的人员信息条数
     * @var int
     */
    public $addNum;

    /**
     * @description 删除的人员信息条数
     * @var int
     */
    public $removeNum;

    /**
     * @description 该成本中心下员工总数
     * @var int
     */
    public $selectedUserNum;

}
