<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiHrmEmployeeResponseBody\groupList;

class GetOapiHrmEmployeeResponseBody extends Model {
    protected $_name = [
        'groupList' => 'group_list',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupList) {
            $res['group_list'] = [];
            if(null !== $this->groupList && is_array($this->groupList)){
                $n = 0;
                foreach($this->groupList as $item){
                    $res['group_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiHrmEmployeeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_list'])){
            if(!empty($map['group_list'])){
                $model->groupList = [];
                $n = 0;
                foreach($map['group_list'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 花名册分组列表
     * @var array
     */
    public $groupList;

    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

}
