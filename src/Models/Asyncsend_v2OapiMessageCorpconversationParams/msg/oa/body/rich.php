<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Asyncsend_v2OapiMessageCorpconversationParams\msg\oa\body;

use AlibabaCloud\Tea\Model;

class rich extends Model {
    protected $_name = [
        'unit' => 'unit',
        'num' => 'num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rich
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unit'])){
            $model->unit = $map['unit'];
        }
        if(isset($map['num'])){
            $model->num = $map['num'];
        }
        return $model;
    }
    /**
     * @description 单行富文本信息的单位
     * @var string
     */
    public $unit;

    /**
     * @description 单行富文本信息的数目
     * @var string
     */
    public $num;

}
