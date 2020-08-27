<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiBlackboardParams\createRequest;

use AlibabaCloud\Tea\Model;

class blackboardReceiver extends Model {
    protected $_name = [
        'deptidList' => 'deptid_list',
        'useridList' => 'userid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptidList) {
            $res['deptid_list'] = $this->deptidList;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return blackboardReceiver
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['deptid_list'])){
            if(!empty($map['deptid_list'])){
                $model->deptidList = $map['deptid_list'];
            }
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 接收部门id列表
     * @var array
     */
    public $deptidList;

    /**
     * @description 接收人userId列表
     * @var array
     */
    public $useridList;

}
