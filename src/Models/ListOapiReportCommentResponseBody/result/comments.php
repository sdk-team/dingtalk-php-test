<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiReportCommentResponseBody\result;

use AlibabaCloud\Tea\Model;

class comments extends Model {
    protected $_name = [
        'createTime' => 'create_time',
        'content' => 'content',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return comments
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 评论时间
     * @var string
     */
    public $createTime;

    /**
     * @description 评论内容
     * @var string
     */
    public $content;

    /**
     * @description 评论人id
     * @var string
     */
    public $userid;

}
