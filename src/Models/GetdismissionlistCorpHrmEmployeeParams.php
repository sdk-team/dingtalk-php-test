<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetdismissionlistCorpHrmEmployeeParams extends Model {
    protected $_name = [
        'current' => 'current',
        'pageSize' => 'page_size',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('current', $this->current, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetdismissionlistCorpHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current'])){
            $model->current = $map['current'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 第几页，从1开始
     * @var int
     */
    public $current;

    /**
     * @description 一页多少数据，在1-100之间
     * @var int
     */
    public $pageSize;

    /**
     * @description 操作人userid
     * @var string
     */
    public $opUserid;

}
