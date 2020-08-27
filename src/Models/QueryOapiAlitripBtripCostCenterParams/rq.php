<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAlitripBtripCostCenterParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'title' => 'title',
        'thirdpartId' => 'thirdpart_id',
        'userid' => 'userid',
        'needOrgEntity' => 'need_org_entity',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->needOrgEntity) {
            $res['need_org_entity'] = $this->needOrgEntity;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['need_org_entity'])){
            $model->needOrgEntity = $map['need_org_entity'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 成本中心名称
     * @var string
     */
    public $title;

    /**
     * @description 第三方成本中心id，不填写的时候user_id必填
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 用户id，不填的时候thirdpart_id必填
     * @var string
     */
    public $userid;

    /**
     * @description 是否需要展示成员信息，当成本中心为部分人员适用的时候有返回
     * @var bool
     */
    public $needOrgEntity;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
