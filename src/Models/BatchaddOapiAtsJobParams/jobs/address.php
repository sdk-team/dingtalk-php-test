<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams\jobs;

use AlibabaCloud\Tea\Model;

class address extends Model {
    protected $_name = [
        'detail' => 'detail',
        'name' => 'name',
    ];
    public function validate() {
        Model::validateRequired('detail', $this->detail, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return address
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail'])){
            $model->detail = $map['detail'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 位置详情
     * @var string
     */
    public $detail;

    /**
     * @description 位置名称
     * @var string
     */
    public $name;

}
