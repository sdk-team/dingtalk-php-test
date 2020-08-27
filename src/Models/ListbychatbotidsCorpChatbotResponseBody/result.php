<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbychatbotidsCorpChatbotResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbychatbotidsCorpChatbotResponseBody\result\resultList;

class result extends Model {
    protected $_name = [
        'resultList' => 'result_list',
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->resultList) {
            $res['result_list'] = [];
            if(null !== $this->resultList && is_array($this->resultList)){
                $n = 0;
                foreach($this->resultList as $item){
                    $res['result_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['result_list'])){
            if(!empty($map['result_list'])){
                $model->resultList = [];
                $n = 0;
                foreach($map['result_list'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
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
     * @description result
     * @var array
     */
    public $resultList;

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

}
