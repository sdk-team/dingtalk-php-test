<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PostOapiSmartdeviceEventParams;

use AlibabaCloud\Tea\Model;

class deviceEventVo extends Model {
    protected $_name = [
        'topic' => 'topic',
        'data' => 'data',
        'dn' => 'dn',
        'pk' => 'pk',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->dn) {
            $res['dn'] = $this->dn;
        }
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceEventVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['topic'])){
            $model->topic = $map['topic'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['dn'])){
            $model->dn = $map['dn'];
        }
        if(isset($map['pk'])){
            $model->pk = $map['pk'];
        }
        return $model;
    }
    /**
     * @description 事件对应的topic
     * @var string
     */
    public $topic;

    /**
     * @description json格式的数据体
     * @var string
     */
    public $data;

    /**
     * @description 设备名称
     * @var string
     */
    public $dn;

    /**
     * @description 产品key
     * @var string
     */
    public $pk;

}
