<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProjectInviteShareurlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'h5UrlGroup' => 'h5_url_group',
        'h5UrlCircle' => 'h5_url_circle',
        'expireSeconds' => 'expire_seconds',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->h5UrlGroup) {
            $res['h5_url_group'] = $this->h5UrlGroup;
        }
        if (null !== $this->h5UrlCircle) {
            $res['h5_url_circle'] = $this->h5UrlCircle;
        }
        if (null !== $this->expireSeconds) {
            $res['expire_seconds'] = $this->expireSeconds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['h5_url_group'])){
            $model->h5UrlGroup = $map['h5_url_group'];
        }
        if(isset($map['h5_url_circle'])){
            $model->h5UrlCircle = $map['h5_url_circle'];
        }
        if(isset($map['expire_seconds'])){
            $model->expireSeconds = $map['expire_seconds'];
        }
        return $model;
    }
    /**
     * @description 群专属链接
     * @var string
     */
    public $h5UrlGroup;

    /**
     * @description 圈子专属链接
     * @var string
     */
    public $h5UrlCircle;

    /**
     * @description 该二维码有效时间，以秒为单位。 最大不超过2592000（即30天）。
     * @var int
     */
    public $expireSeconds;

}
