<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiImpaasRelationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'srcImOpenid' => 'src_im_openid',
        'dstImOpenid' => 'dst_im_openid',
        'isDoubleWay' => 'is_double_way',
        'beginTime' => 'begin_time',
        'endTime' => 'end_time',
    ];
    public function validate() {
        Model::validateRequired('srcImOpenid', $this->srcImOpenid, true);
        Model::validateRequired('dstImOpenid', $this->dstImOpenid, true);
        Model::validateRequired('isDoubleWay', $this->isDoubleWay, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
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
        if (null !== $this->beginTime) {
            $res['begin_time'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
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
        if(isset($map['begin_time'])){
            $model->beginTime = $map['begin_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        return $model;
    }
    /**
     * @description 发送者钉钉的openid
     * @var string
     */
    public $srcImOpenid;

    /**
     * @description 接收者钉钉的openid
     * @var string
     */
    public $dstImOpenid;

    /**
     * @description 是否双向关系
     * @var bool
     */
    public $isDoubleWay;

    /**
     * @description 时间戳精确到毫秒
     * @var int
     */
    public $beginTime;

    /**
     * @description 时间戳精确到毫秒
     * @var int
     */
    public $endTime;

}
