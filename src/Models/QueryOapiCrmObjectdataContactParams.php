<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiCrmObjectdataContactParams extends Model {
    protected $_name = [
        'currentOperatorUserid' => 'current_operator_userid',
        'cursor' => 'cursor',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->currentOperatorUserid) {
            $res['current_operator_userid'] = $this->currentOperatorUserid;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiCrmObjectdataContactParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_operator_userid'])){
            $model->currentOperatorUserid = $map['current_operator_userid'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 用户ID
     * @var string
     */
    public $currentOperatorUserid;

    /**
     * @description 分页游标
     * @var string
     */
    public $cursor;

    /**
     * @description 分页大小
     * @var int
     */
    public $pageSize;

}
