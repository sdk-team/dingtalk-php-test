<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpDingindexResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpDingindexResponseBody\result\dingIndexList;

class result extends Model {
    protected $_name = [
        'dingOpenErrcode' => 'ding_open_errcode',
        'success' => 'success',
        'errorMsg' => 'error_msg',
        'dingIndexList' => 'ding_index_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->dingIndexList) {
            $res['ding_index_list'] = [];
            if(null !== $this->dingIndexList && is_array($this->dingIndexList)){
                $n = 0;
                foreach($this->dingIndexList as $item){
                    $res['ding_index_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['ding_index_list'])){
            if(!empty($map['ding_index_list'])){
                $model->dingIndexList = [];
                $n = 0;
                foreach($map['ding_index_list'] as $item) {
                    $model->dingIndexList[$n++] = null !== $item ? dingIndexList::fromMap($item) : $item;
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
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description errorMsg
     * @var string
     */
    public $errorMsg;

    /**
     * @description result
     * @var array
     */
    public $dingIndexList;

}
