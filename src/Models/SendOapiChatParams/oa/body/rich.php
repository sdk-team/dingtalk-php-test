<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\oa\body;

use AlibabaCloud\Tea\Model;

class rich extends Model {
    protected $_name = [
        'num' => 'num',
        'unit' => 'unit',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rich
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['num'])){
            $model->num = $map['num'];
        }
        if(isset($map['unit'])){
            $model->unit = $map['unit'];
        }
        return $model;
    }
    /**
     * @description 单行富文本信息的单位
     * @var string
     */
    public $num;

    /**
     * @description 单行富文本信息的数目
     * @var string
     */
    public $unit;

}
