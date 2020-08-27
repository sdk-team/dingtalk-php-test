<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbysourceidOapiWorkspaceTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class extension extends Model {
    protected $_name = [
        'commentCount' => 'comment_count',
        'filePath' => 'file_path',
        'other' => 'other',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->commentCount) {
            $res['comment_count'] = $this->commentCount;
        }
        if (null !== $this->filePath) {
            $res['file_path'] = $this->filePath;
        }
        if (null !== $this->other) {
            $res['other'] = $this->other;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return extension
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['comment_count'])){
            $model->commentCount = $map['comment_count'];
        }
        if(isset($map['file_path'])){
            $model->filePath = $map['file_path'];
        }
        if(isset($map['other'])){
            $model->other = $map['other'];
        }
        return $model;
    }
    /**
     * @description 评论数
     * @var string
     */
    public $commentCount;

    /**
     * @description 附件地址
     * @var string
     */
    public $filePath;

    /**
     * @description 用户可扩展的字段
     * @var string
     */
    public $other;

}
