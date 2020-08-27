<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceTicketParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceTicketParams\ticketCreate\properties;

class ticketCreate extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'foreignId' => 'foreign_id',
        'foreignName' => 'foreign_name',
        'templateId' => 'template_id',
        'title' => 'title',
        'properties' => 'properties',
    ];
    public function validate() {
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('foreignId', $this->foreignId, true);
        Model::validateRequired('foreignName', $this->foreignName, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('title', $this->title, true);
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
        if (null !== $this->foreignName) {
            $res['foreign_name'] = $this->foreignName;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
     * @return ticketCreate
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
        if(isset($map['foreign_name'])){
            $model->foreignName = $map['foreign_name'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
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
     * @description 会员标识
     * @var string
     */
    public $sourceId;

    /**
     * @description 第三方会员id
     * @var string
     */
    public $foreignId;

    /**
     * @description 第三方会员名
     * @var string
     */
    public $foreignName;

    /**
     * @description 工单模板id
     * @var string
     */
    public $templateId;

    /**
     * @description 工单标题
     * @var string
     */
    public $title;

    /**
     * @description 工单表单
     * @var array
     */
    public $properties;

}
