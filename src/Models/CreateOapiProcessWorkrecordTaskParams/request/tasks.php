<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordTaskParams\request;

use AlibabaCloud\Tea\Model;

class tasks extends Model {
    protected $_name = [
        'userid' => 'userid',
        'url' => 'url',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tasks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 跳转url
     * @var string
     */
    public $url;

}
