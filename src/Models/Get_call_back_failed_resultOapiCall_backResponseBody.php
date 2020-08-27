<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_call_back_failed_resultOapiCall_backResponseBody\failedList;

class Get_call_back_failed_resultOapiCall_backResponseBody extends Model {
    protected $_name = [
        'failedList' => 'failed_list',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->failedList) {
            $res['failed_list'] = [];
            if(null !== $this->failedList && is_array($this->failedList)){
                $n = 0;
                foreach($this->failedList as $item){
                    $res['failed_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_call_back_failed_resultOapiCall_backResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['failed_list'])){
            if(!empty($map['failed_list'])){
                $model->failedList = [];
                $n = 0;
                foreach($map['failed_list'] as $item) {
                    $model->failedList[$n++] = null !== $item ? failedList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description 事件列表，一次最多200个
     * @var array
     */
    public $failedList;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description has_more
     * @var bool
     */
    public $hasMore;

}
