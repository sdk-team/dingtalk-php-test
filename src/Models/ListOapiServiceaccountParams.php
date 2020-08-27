<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiServiceaccountParams extends Model {
    protected $_name = [
        'pageStart' => 'pageStart',
        'pageSize' => 'pageSize',
    ];
    public function validate() {
        Model::validateMinimum('pageStart', $this->pageStart, 1);
        Model::validateMinimum('pageSize', $this->pageSize, 1);
        Model::validateMaximum('pageSize', $this->pageSize, 50);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageStart) {
            $res['pageStart'] = $this->pageStart;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiServiceaccountParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pageStart'])){
            $model->pageStart = $map['pageStart'];
        }
        if(isset($map['pageSize'])){
            $model->pageSize = $map['pageSize'];
        }
        return $model;
    }
    /**
     * @description 页码，第几页，从1开始算
     * @var int
     */
    public $pageStart;

    /**
     * @description 每页条数
     * @var int
     */
    public $pageSize;

}
