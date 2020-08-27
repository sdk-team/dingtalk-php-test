<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesUnperformedParams\req;

use AlibabaCloud\Tea\Model;

class page extends Model {
    protected $_name = [
        'start' => 'start',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('start', $this->start, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return page
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start'])){
            $model->start = $map['start'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 其实位置
     * @var int
     */
    public $start;

    /**
     * @description 页大小
     * @var int
     */
    public $pageSize;

}
