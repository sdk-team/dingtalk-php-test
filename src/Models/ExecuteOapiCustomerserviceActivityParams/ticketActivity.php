<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ExecuteOapiCustomerserviceActivityParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ExecuteOapiCustomerserviceActivityParams\ticketActivity\properties;

class ticketActivity extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'foreignId' => 'foreign_id',
        'activityCode' => 'activity_code',
        'foreignName' => 'foreign_name',
        'ticketId' => 'ticket_id',
        'properties' => 'properties',
    ];
    public function validate() {
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('foreignId', $this->foreignId, true);
        Model::validateRequired('activityCode', $this->activityCode, true);
        Model::validateRequired('foreignName', $this->foreignName, true);
        Model::validateRequired('ticketId', $this->ticketId, true);
        Model::validateRequired('properties', $this->properties, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->foreignId) {
            $res['foreign_id'] = $this->foreignId;
        }
        if (null !== $this->activityCode) {
            $res['activity_code'] = $this->activityCode;
        }
        if (null !== $this->foreignName) {
            $res['foreign_name'] = $this->foreignName;
        }
        if (null !== $this->ticketId) {
            $res['ticket_id'] = $this->ticketId;
        }
        if (null !== $this->properties) {
            $res['properties'] = [];
            if(null !== $this->properties && is_array($this->properties)){
                $n = 0;
                foreach($this->properties as $item){
                    $res['properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ticketActivity
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
        if(isset($map['activity_code'])){
            $model->activityCode = $map['activity_code'];
        }
        if(isset($map['foreign_name'])){
            $model->foreignName = $map['foreign_name'];
        }
        if(isset($map['ticket_id'])){
            $model->ticketId = $map['ticket_id'];
        }
        if(isset($map['properties'])){
            if(!empty($map['properties'])){
                $model->properties = [];
                $n = 0;
                foreach($map['properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? properties::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 第三方会员来源
     * @var string
     */
    public $sourceId;

    /**
     * @description 第三方会员id
     * @var string
     */
    public $foreignId;

    /**
     * @description 活动code
     * @var string
     */
    public $activityCode;

    /**
     * @description 第三方会员名字
     * @var string
     */
    public $foreignName;

    /**
     * @description 工单id
     * @var string
     */
    public $ticketId;

    /**
     * @description 表单的数据
     * @var array
     */
    public $properties;

}
