<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetdismissionlistCorpHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetdismissionlistCorpHrmEmployeeResponseBody\result\page;

class result extends Model {
    protected $_name = [
        'success' => 'success',
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'page' => 'page',
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
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
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
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        return $model;
    }
    /**
     * @description 是否成功
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
     * @description 分页数据
     * @var page
     */
    public $page;

}
