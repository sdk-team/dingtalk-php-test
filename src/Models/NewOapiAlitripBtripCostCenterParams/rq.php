<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\NewOapiAlitripBtripCostCenterParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'alipayNo' => 'alipay_no',
        'title' => 'title',
        'scope' => 'scope',
        'thirdpartId' => 'thirdpart_id',
        'number' => 'number',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('thirdpartId', $this->thirdpartId, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->alipayNo) {
            $res['alipay_no'] = $this->alipayNo;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
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
        if(isset($map['alipay_no'])){
            $model->alipayNo = $map['alipay_no'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['scope'])){
            $model->scope = $map['scope'];
        }
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 绑定支付宝账号
     * @var string
     */
    public $alipayNo;

    /**
     * @description 成本中心名称
     * @var string
     */
    public $title;

    /**
     * @description 适用范围:1全员，2部分人员
     * @var int
     */
    public $scope;

    /**
     * @description 第三方成本中心id
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 第三方成本中心编号
     * @var string
     */
    public $number;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
