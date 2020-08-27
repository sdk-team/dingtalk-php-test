<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderTagResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'bomReady' => 'bom_ready',
        'embroideryReady' => 'embroidery_ready',
        'goodsNo' => 'goods_no',
        'markerReady' => 'marker_ready',
        'noBom' => 'no_bom',
        'noGsd' => 'no_gsd',
        'noLaser' => 'no_laser',
        'noMarker' => 'no_marker',
        'skipSap' => 'skip_sap',
        'skipSupplyChain' => 'skip_supply_chain',
        'customizeOrder' => 'customize_order',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bomReady) {
            $res['bom_ready'] = $this->bomReady;
        }
        if (null !== $this->embroideryReady) {
            $res['embroidery_ready'] = $this->embroideryReady;
        }
        if (null !== $this->goodsNo) {
            $res['goods_no'] = $this->goodsNo;
        }
        if (null !== $this->markerReady) {
            $res['marker_ready'] = $this->markerReady;
        }
        if (null !== $this->noBom) {
            $res['no_bom'] = $this->noBom;
        }
        if (null !== $this->noGsd) {
            $res['no_gsd'] = $this->noGsd;
        }
        if (null !== $this->noLaser) {
            $res['no_laser'] = $this->noLaser;
        }
        if (null !== $this->noMarker) {
            $res['no_marker'] = $this->noMarker;
        }
        if (null !== $this->skipSap) {
            $res['skip_sap'] = $this->skipSap;
        }
        if (null !== $this->skipSupplyChain) {
            $res['skip_supply_chain'] = $this->skipSupplyChain;
        }
        if (null !== $this->customizeOrder) {
            $res['customize_order'] = $this->customizeOrder;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bom_ready'])){
            $model->bomReady = $map['bom_ready'];
        }
        if(isset($map['embroidery_ready'])){
            $model->embroideryReady = $map['embroidery_ready'];
        }
        if(isset($map['goods_no'])){
            $model->goodsNo = $map['goods_no'];
        }
        if(isset($map['marker_ready'])){
            $model->markerReady = $map['marker_ready'];
        }
        if(isset($map['no_bom'])){
            $model->noBom = $map['no_bom'];
        }
        if(isset($map['no_gsd'])){
            $model->noGsd = $map['no_gsd'];
        }
        if(isset($map['no_laser'])){
            $model->noLaser = $map['no_laser'];
        }
        if(isset($map['no_marker'])){
            $model->noMarker = $map['no_marker'];
        }
        if(isset($map['skip_sap'])){
            $model->skipSap = $map['skip_sap'];
        }
        if(isset($map['skip_supply_chain'])){
            $model->skipSupplyChain = $map['skip_supply_chain'];
        }
        if(isset($map['customize_order'])){
            $model->customizeOrder = $map['customize_order'];
        }
        return $model;
    }
    /**
     * @description bom是否ready
     * @var bool
     */
    public $bomReady;

    /**
     * @description embroidery是否ready
     * @var bool
     */
    public $embroideryReady;

    /**
     * @description 商家货号
     * @var string
     */
    public $goodsNo;

    /**
     * @description 唛架包是否ready
     * @var bool
     */
    public $markerReady;

    /**
     * @description 是否不需要BOM,除非明确设置为true，否则均为false
     * @var bool
     */
    public $noBom;

    /**
     * @description 是否不需要GSD,除非明确设置为true，否则均为false
     * @var bool
     */
    public $noGsd;

    /**
     * @description 是否不需要laser,除非明确设置为true，否则均为false
     * @var bool
     */
    public $noLaser;

    /**
     * @description 是否不需要唛架,除非明确设置为true，否则均为false
     * @var bool
     */
    public $noMarker;

    /**
     * @description 是否需要跳过sap,除非明确设置为true,否则均不跳过
     * @var bool
     */
    public $skipSap;

    /**
     * @description 是否跳过供应链相关,除非明确设置为true，否则均不跳过
     * @var bool
     */
    public $skipSupplyChain;

    /**
     * @description 是否为2C订单
     * @var bool
     */
    public $customizeOrder;

}
