<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListlabelgroupsCorpExtcontactResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListlabelgroupsCorpExtcontactResponseBody\result\results;

class result extends Model {
    protected $_name = [
        'results' => 'results',
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->results) {
            $res['results'] = [];
            if(null !== $this->results && is_array($this->results)){
                $n = 0;
                foreach($this->results as $item){
                    $res['results'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['results'])){
            if(!empty($map['results'])){
                $model->results = [];
                $n = 0;
                foreach($map['results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
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
     * @description results
     * @var array
     */
    public $results;

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
