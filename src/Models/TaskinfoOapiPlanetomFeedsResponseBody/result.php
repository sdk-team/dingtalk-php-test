<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TaskinfoOapiPlanetomFeedsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'title' => 'title',
        'success' => 'success',
        'processMsg' => 'process_msg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->processMsg) {
            $res['process_msg'] = $this->processMsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['process_msg'])){
            $model->processMsg = $map['process_msg'];
        }
        return $model;
    }
    /**
     * @description 课程标题
     * @var string
     */
    public $title;

    /**
     * @description 结果
     * @var bool
     */
    public $success;

    /**
     * @description 课程处理结果
     * @var string
     */
    public $processMsg;

}
