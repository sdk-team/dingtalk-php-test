<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackEntityconditionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackEntityconditionParams\req\page;

class req extends Model {
    protected $_name = [
        'entityType' => 'entity_type',
        'page' => 'page',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'entityIds' => 'entity_ids',
        'trackTypes' => 'track_types',
    ];
    public function validate() {
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('entityIds', $this->entityIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->entityIds) {
            $res['entity_ids'] = $this->entityIds;
        }
        if (null !== $this->trackTypes) {
            $res['track_types'] = $this->trackTypes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['entity_ids'])){
            if(!empty($map['entity_ids'])){
                $model->entityIds = $map['entity_ids'];
            }
        }
        if(isset($map['track_types'])){
            if(!empty($map['track_types'])){
                $model->trackTypes = $map['track_types'];
            }
        }
        return $model;
    }
    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 分页
     * @var page
     */
    public $page;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 预留参数
     * @var string
     */
    public $userid;

    /**
     * @description 实体ID列表
     * @var array
     */
    public $entityIds;

    /**
     * @description 追踪类型
     * @var array
     */
    public $trackTypes;

}
