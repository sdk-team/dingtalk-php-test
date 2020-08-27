<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiCustomerserviceMessageParams;

use AlibabaCloud\Tea\Model;

class message extends Model {
    protected $_name = [
        'cmsId' => 'cms_id',
        'content' => 'content',
        'contentType' => 'content_type',
        'buId' => 'bu_id',
        'messageCreateAt' => 'message_create_at',
        'messageId' => 'message_id',
        'sessionSource' => 'session_source',
        'sid' => 'sid',
    ];
    public function validate() {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('contentType', $this->contentType, true);
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('messageId', $this->messageId, true);
        Model::validateRequired('sessionSource', $this->sessionSource, true);
        Model::validateRequired('sid', $this->sid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cmsId) {
            $res['cms_id'] = $this->cmsId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->buId) {
            $res['bu_id'] = $this->buId;
        }
        if (null !== $this->messageCreateAt) {
            $res['message_create_at'] = $this->messageCreateAt;
        }
        if (null !== $this->messageId) {
            $res['message_id'] = $this->messageId;
        }
        if (null !== $this->sessionSource) {
            $res['session_source'] = $this->sessionSource;
        }
        if (null !== $this->sid) {
            $res['sid'] = $this->sid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return message
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cms_id'])){
            $model->cmsId = $map['cms_id'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['content_type'])){
            $model->contentType = $map['content_type'];
        }
        if(isset($map['bu_id'])){
            $model->buId = $map['bu_id'];
        }
        if(isset($map['message_create_at'])){
            $model->messageCreateAt = $map['message_create_at'];
        }
        if(isset($map['message_id'])){
            $model->messageId = $map['message_id'];
        }
        if(isset($map['session_source'])){
            $model->sessionSource = $map['session_source'];
        }
        if(isset($map['sid'])){
            $model->sid = $map['sid'];
        }
        return $model;
    }
    /**
     * @description 会员id
     * @var string
     */
    public $cmsId;

    /**
     * @description 消息内容
     * @var string
     */
    public $content;

    /**
     * @description /**      * 文本      */     TEXT(1),      /**      * 图片      */     IMAGE(2),      /**      * 视频      */     VIDEO(3),      /**      * 链接      */     LINK(4),      /**      * 语音      */     VOICE(5),      /**      * markdown      */     MARK_DOWN(6),      /**      * 交互式卡片      */     ACTION_CARD(7),      /**      * 富文本      */     RICH_TEXT(8),      /**      * 文件      */     FILE(9),      /**      * 消息已读      */     MSG_READ(10)
     * @var int
     */
    public $contentType;

    /**
     * @description 会员所属组织
     * @var string
     */
    public $buId;

    /**
     * @description 消息生成时间
     * @var int
     */
    public $messageCreateAt;

    /**
     * @description 消息id
     * @var string
     */
    public $messageId;

    /**
     * @description 会话来源
     * @var string
     */
    public $sessionSource;

    /**
     * @description 会话id
     * @var string
     */
    public $sid;

}
