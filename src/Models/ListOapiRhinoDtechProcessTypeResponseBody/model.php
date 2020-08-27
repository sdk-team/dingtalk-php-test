<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoDtechProcessTypeResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'sourceFactoryId' => 'source_factory_id',
        'processTypeName' => 'process_type_name',
        'processTypeCode' => 'process_type_code',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sourceFactoryId) {
            $res['source_factory_id'] = $this->sourceFactoryId;
        }
        if (null !== $this->processTypeName) {
            $res['process_type_name'] = $this->processTypeName;
        }
        if (null !== $this->processTypeCode) {
            $res['process_type_code'] = $this->processTypeCode;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_factory_id'])){
            $model->sourceFactoryId = $map['source_factory_id'];
        }
        if(isset($map['process_type_name'])){
            $model->processTypeName = $map['process_type_name'];
        }
        if(isset($map['process_type_code'])){
            $model->processTypeCode = $map['process_type_code'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 春晓工厂id
     * @var string
     */
    public $sourceFactoryId;

    /**
     * @description 工序能力名称
     * @var string
     */
    public $processTypeName;

    /**
     * @description 工序能力编码
     * @var string
     */
    public $processTypeCode;

    /**
     * @description id
     * @var int
     */
    public $id;

}
