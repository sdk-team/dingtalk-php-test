<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessPropertyParams\props;

class UpdateOapiProcessPropertyParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'processCode' => 'process_code',
        'componentId' => 'component_id',
        'props' => 'props',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->componentId) {
            $res['component_id'] = $this->componentId;
        }
        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiProcessPropertyParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['component_id'])){
            $model->componentId = $map['component_id'];
        }
        if(isset($map['props'])){
            $model->props = props::fromMap($map['props']);
        }
        return $model;
    }
    /**
     * @description 员工工号 企业唯一
     * @var string
     */
    public $userid;

    /**
     * @description 模板code
     * @var string
     */
    public $processCode;

    /**
     * @description 控件id
     * @var string
     */
    public $componentId;

    /**
     * @description 控件属性集
     * @var props
     */
    public $props;

}
