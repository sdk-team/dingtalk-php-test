<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams\jobs;

use AlibabaCloud\Tea\Model;

class extData extends Model {
    protected $_name = [
        'headCount' => 'head_count',
    ];
    public function validate() {
        Model::validateRequired('headCount', $this->headCount, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->headCount) {
            $res['head_count'] = $this->headCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return extData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['head_count'])){
            $model->headCount = $map['head_count'];
        }
        return $model;
    }
    /**
     * @description 招募人数
     * @var int
     */
    public $headCount;

}
