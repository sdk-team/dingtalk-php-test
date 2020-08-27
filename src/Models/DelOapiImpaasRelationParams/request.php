<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DelOapiImpaasRelationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'srcImOpenid' => 'src_im_openid',
        'dstImOpenid' => 'dst_im_openid',
        'isDoubleWay' => 'is_double_way',
    ];
    public function validate() {
        Model::validateRequired('srcImOpenid', $this->srcImOpenid, true);
        Model::validateRequired('dstImOpenid', $this->dstImOpenid, true);
        Model::validateRequired('isDoubleWay', $this->isDoubleWay, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->srcImOpenid) {
            $res['src_im_openid'] = $this->srcImOpenid;
        }
        if (null !== $this->dstImOpenid) {
            $res['dst_im_openid'] = $this->dstImOpenid;
        }
        if (null !== $this->isDoubleWay) {
            $res['is_double_way'] = $this->isDoubleWay;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['src_im_openid'])){
            $model->srcImOpenid = $map['src_im_openid'];
        }
        if(isset($map['dst_im_openid'])){
            $model->dstImOpenid = $map['dst_im_openid'];
        }
        if(isset($map['is_double_way'])){
            $model->isDoubleWay = $map['is_double_way'];
        }
        return $model;
    }
    /**
     * @description 发送者的im的openid
     * @var string
     */
    public $srcImOpenid;

    /**
     * @description 接受者的im的openid
     * @var string
     */
    public $dstImOpenid;

    /**
     * @description 是否双向关系
     * @var bool
     */
    public $isDoubleWay;

}
