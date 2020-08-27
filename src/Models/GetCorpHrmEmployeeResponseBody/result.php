<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpHrmEmployeeResponseBody\result\groupList;

class result extends Model {
    protected $_name = [
        'groupList' => 'group_list',
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
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
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
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
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
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
    public $dingOpenErrcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

}
