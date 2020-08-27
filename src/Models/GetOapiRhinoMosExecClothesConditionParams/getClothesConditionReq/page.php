<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesConditionParams\getClothesConditionReq;

use AlibabaCloud\Tea\Model;

class page extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'start' => 'start',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return page
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['start'])){
            $model->start = $map['start'];
        }
        return $model;
    }
    /**
     * @description 页大小
     * @var int
     */
    public $pageSize;

    /**
     * @description 开始
     * @var int
     */
    public $start;

}
