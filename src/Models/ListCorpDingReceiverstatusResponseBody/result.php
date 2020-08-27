<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpDingReceiverstatusResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpDingReceiverstatusResponseBody\result\resultList;

class result extends Model {
    protected $_name = [
        'success' => 'success',
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'resultList' => 'result_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->resultList) {
            $res['result_list'] = [];
            if(null !== $this->resultList && is_array($this->resultList)){
                $n = 0;
                foreach($this->resultList as $item){
                    $res['result_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['result_list'])){
            if(!empty($map['result_list'])){
                $model->resultList = [];
                $n = 0;
                foreach($map['result_list'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 接口调用是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     * @var int
     */
    public $dingOpenErrcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description 接收者状态列表，当这里返回为null表示分页已经结束
     * @var array
     */
    public $resultList;

}
