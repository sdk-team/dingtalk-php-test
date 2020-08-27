<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels;

class UploadOapiPlanetomFeedsParams extends Model {
    protected $_name = [
        'feedAppId' => 'feed_app_id',
        'userPhone' => 'user_phone',
        'feedInfoModels' => 'feed_info_models',
    ];
    public function validate() {
        Model::validateRequired('feedAppId', $this->feedAppId, true);
        Model::validateRequired('userPhone', $this->userPhone, true);
        Model::validateRequired('feedInfoModels', $this->feedInfoModels, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->feedAppId) {
            $res['feed_app_id'] = $this->feedAppId;
        }
        if (null !== $this->userPhone) {
            $res['user_phone'] = $this->userPhone;
        }
        if (null !== $this->feedInfoModels) {
            $res['feed_info_models'] = [];
            if(null !== $this->feedInfoModels && is_array($this->feedInfoModels)){
                $n = 0;
                foreach($this->feedInfoModels as $item){
                    $res['feed_info_models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UploadOapiPlanetomFeedsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['feed_app_id'])){
            $model->feedAppId = $map['feed_app_id'];
        }
        if(isset($map['user_phone'])){
            $model->userPhone = $map['user_phone'];
        }
        if(isset($map['feed_info_models'])){
            if(!empty($map['feed_info_models'])){
                $model->feedInfoModels = [];
                $n = 0;
                foreach($map['feed_info_models'] as $item) {
                    $model->feedInfoModels[$n++] = null !== $item ? feedInfoModels::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 内容对应的应用ID
     * @var int
     */
    public $feedAppId;

    /**
     * @description 提交人的手机号码
     * @var string
     */
    public $userPhone;

    /**
     * @description 课程列表
     * @var array
     */
    public $feedInfoModels;

}
