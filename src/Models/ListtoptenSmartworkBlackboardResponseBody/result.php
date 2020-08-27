<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListtoptenSmartworkBlackboardResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListtoptenSmartworkBlackboardResponseBody\result\blackboardList;

class result extends Model {
    protected $_name = [
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
        'blackboardList' => 'blackboard_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->blackboardList) {
            $res['blackboard_list'] = [];
            if(null !== $this->blackboardList && is_array($this->blackboardList)){
                $n = 0;
                foreach($this->blackboardList as $item){
                    $res['blackboard_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['blackboard_list'])){
            if(!empty($map['blackboard_list'])){
                $model->blackboardList = [];
                $n = 0;
                foreach($map['blackboard_list'] as $item) {
                    $model->blackboardList[$n++] = null !== $item ? blackboardList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $dingOpenErrcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errorMsg;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description result
     * @var array
     */
    public $blackboardList;

}
