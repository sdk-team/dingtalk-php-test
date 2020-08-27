<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderBatchParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'idList' => 'id_list',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->idList) {
            $res['id_list'] = $this->idList;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id_list'])){
            if(!empty($map['id_list'])){
                $model->idList = $map['id_list'];
            }
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 订单id列表
     * @var array
     */
    public $idList;

    /**
     * @description 租户Id
     * @var string
     */
    public $tenantId;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
