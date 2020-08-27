<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackTrackconditionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackTrackconditionParams\req\page;

class req extends Model {
    protected $_name = [
        'page' => 'page',
        'tenantId' => 'tenant_id',
        'trackIds' => 'track_ids',
        'trackType' => 'track_type',
        'userid' => 'userid',
        'entityTypes' => 'entity_types',
    ];
    public function validate() {
        Model::validateRequired('page', $this->page, true);
        Model::validateRequired('trackIds', $this->trackIds, true);
        Model::validateRequired('trackType', $this->trackType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->trackIds) {
            $res['track_ids'] = $this->trackIds;
        }
        if (null !== $this->trackType) {
            $res['track_type'] = $this->trackType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->entityTypes) {
            $res['entity_types'] = $this->entityTypes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page'])){
            $model->page = page::fromMap($map['page']);
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['track_ids'])){
            if(!empty($map['track_ids'])){
                $model->trackIds = $map['track_ids'];
            }
        }
        if(isset($map['track_type'])){
            $model->trackType = $map['track_type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['entity_types'])){
            if(!empty($map['entity_types'])){
                $model->entityTypes = $map['entity_types'];
            }
        }
        return $model;
    }
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
     * @description 追踪ID列表
     * @var array
     */
    public $trackIds;

    /**
     * @description 追踪类型
     * @var string
     */
    public $trackType;

    /**
     * @description 预留参数
     * @var string
     */
    public $userid;

    /**
     * @description 实体类型
     * @var array
     */
    public $entityTypes;

}
