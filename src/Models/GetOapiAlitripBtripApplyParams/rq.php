<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripApplyParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'applyId' => 'apply_id',
        'applyShowId' => 'apply_show_id',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
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
        if(isset($map['thirdpart_apply_id'])){
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        if(isset($map['apply_show_id'])){
            $model->applyShowId = $map['apply_show_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 外部审批单id
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @description 阿里商旅审批单id
     * @var int
     */
    public $applyId;

    /**
     * @description 阿里商旅审批单展示id
     * @var string
     */
    public $applyShowId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
