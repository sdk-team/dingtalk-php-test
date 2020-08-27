<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiImpaasRelationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'srcImOpenid' => 'src_im_openid',
        'dstImOpenids' => 'dst_im_openids',
    ];
    public function validate() {
        Model::validateRequired('srcImOpenid', $this->srcImOpenid, true);
        Model::validateRequired('dstImOpenids', $this->dstImOpenids, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->srcImOpenid) {
            $res['src_im_openid'] = $this->srcImOpenid;
        }
        if (null !== $this->dstImOpenids) {
            $res['dst_im_openids'] = $this->dstImOpenids;
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
        if(isset($map['dst_im_openids'])){
            if(!empty($map['dst_im_openids'])){
                $model->dstImOpenids = $map['dst_im_openids'];
            }
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
     * @var array
     */
    public $dstImOpenids;

}
