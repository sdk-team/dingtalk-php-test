<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendforpayslipOapiSmartworkHrmSmsParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'month' => 'month',
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('month', $this->month, true);
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['month'])){
            $model->month = $map['month'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 工资条月份
     * @var int
     */
    public $month;

    /**
     * @description 员工userids
     * @var array
     */
    public $useridList;

}
