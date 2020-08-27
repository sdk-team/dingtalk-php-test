<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiImpaasRelationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'endTime' => 'end_time',
        'beginTime' => 'begin_time',
        'dstImOpenid' => 'dst_im_openid',
        'srcImOpenid' => 'src_im_openid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->beginTime) {
            $res['begin_time'] = $this->beginTime;
        }
        if (null !== $this->dstImOpenid) {
            $res['dst_im_openid'] = $this->dstImOpenid;
        }
        if (null !== $this->srcImOpenid) {
            $res['src_im_openid'] = $this->srcImOpenid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['begin_time'])){
            $model->beginTime = $map['begin_time'];
        }
        if(isset($map['dst_im_openid'])){
            $model->dstImOpenid = $map['dst_im_openid'];
        }
        if(isset($map['src_im_openid'])){
            $model->srcImOpenid = $map['src_im_openid'];
        }
        return $model;
    }
    /**
     * @description endTime
     * @var int
     */
    public $endTime;

    /**
     * @description beginTime
     * @var int
     */
    public $beginTime;

    /**
     * @description dstImOpenid
     * @var string
     */
    public $dstImOpenid;

    /**
     * @description srcImOpenid
     * @var string
     */
    public $srcImOpenid;

}
