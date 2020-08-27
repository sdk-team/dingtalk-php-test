<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'innerGroupCnt' => 'inner_group_cnt',
        'deptGroupCnt' => 'dept_group_cnt',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->innerGroupCnt) {
            $res['inner_group_cnt'] = $this->innerGroupCnt;
        }
        if (null !== $this->deptGroupCnt) {
            $res['dept_group_cnt'] = $this->deptGroupCnt;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['inner_group_cnt'])){
            $model->innerGroupCnt = $map['inner_group_cnt'];
        }
        if(isset($map['dept_group_cnt'])){
            $model->deptGroupCnt = $map['dept_group_cnt'];
        }
        return $model;
    }
    /**
     * @description 内部群数量
     * @var int
     */
    public $innerGroupCnt;

    /**
     * @description 部门群数量
     * @var int
     */
    public $deptGroupCnt;

}
