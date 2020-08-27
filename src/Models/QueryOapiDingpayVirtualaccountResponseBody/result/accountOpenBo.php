<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiDingpayVirtualaccountResponseBody\result;

use AlibabaCloud\Tea\Model;

class accountOpenBo extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'anonymousAlipayUid' => 'anonymous_alipay_uid',
        'extension' => 'extension',
        'realAlipayUids' => 'real_alipay_uids',
        'realUsedAlipayUid' => 'real_used_alipay_uid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->anonymousAlipayUid) {
            $res['anonymous_alipay_uid'] = $this->anonymousAlipayUid;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->realAlipayUids) {
            $res['real_alipay_uids'] = $this->realAlipayUids;
        }
        if (null !== $this->realUsedAlipayUid) {
            $res['real_used_alipay_uid'] = $this->realUsedAlipayUid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return accountOpenBo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['anonymous_alipay_uid'])){
            $model->anonymousAlipayUid = $map['anonymous_alipay_uid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['real_alipay_uids'])){
            if(!empty($map['real_alipay_uids'])){
                $model->realAlipayUids = $map['real_alipay_uids'];
            }
        }
        if(isset($map['real_used_alipay_uid'])){
            $model->realUsedAlipayUid = $map['real_used_alipay_uid'];
        }
        return $model;
    }
    /**
     * @description 企业corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 支付宝托管账户
     * @var string
     */
    public $anonymousAlipayUid;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extension;

    /**
     * @description 支付宝资金账号列表
     * @var array
     */
    public $realAlipayUids;

    /**
     * @description 当前使用的支付宝资金账号
     * @var string
     */
    public $realUsedAlipayUid;

}
