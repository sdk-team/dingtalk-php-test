<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiRetailSellerParams;

use AlibabaCloud\Tea\Model;

class sellerParam extends Model {
    protected $_name = [
        'nick' => 'nick',
        'actionType' => 'action_type',
        'sellerId' => 'seller_id',
        'mobile' => 'mobile',
        'srcMobile' => 'src_mobile',
        'source' => 'source',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->actionType) {
            $res['action_type'] = $this->actionType;
        }
        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->srcMobile) {
            $res['src_mobile'] = $this->srcMobile;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sellerParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['action_type'])){
            $model->actionType = $map['action_type'];
        }
        if(isset($map['seller_id'])){
            $model->sellerId = $map['seller_id'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['src_mobile'])){
            $model->srcMobile = $map['src_mobile'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 昵称
     * @var string
     */
    public $nick;

    /**
     * @description 操作类型
     * @var string
     */
    public $actionType;

    /**
     * @description 卖家ID
     * @var int
     */
    public $sellerId;

    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 原始手机号
     * @var string
     */
    public $srcMobile;

    /**
     * @description 开店来源
     * @var string
     */
    public $source;

    /**
     * @description 商家名称
     * @var string
     */
    public $name;

}
