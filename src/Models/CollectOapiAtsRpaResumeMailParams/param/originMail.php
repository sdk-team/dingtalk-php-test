<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param;

use AlibabaCloud\Tea\Model;

class originMail extends Model {
    protected $_name = [
        'fromMailAddress' => 'from_mail_address',
        'bodyHtml' => 'body_html',
        'title' => 'title',
        'mailAddress' => 'mail_address',
        'fromMailAlias' => 'from_mail_alias',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fromMailAddress) {
            $res['from_mail_address'] = $this->fromMailAddress;
        }
        if (null !== $this->bodyHtml) {
            $res['body_html'] = $this->bodyHtml;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->mailAddress) {
            $res['mail_address'] = $this->mailAddress;
        }
        if (null !== $this->fromMailAlias) {
            $res['from_mail_alias'] = $this->fromMailAlias;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return originMail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['from_mail_address'])){
            $model->fromMailAddress = $map['from_mail_address'];
        }
        if(isset($map['body_html'])){
            $model->bodyHtml = $map['body_html'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['mail_address'])){
            $model->mailAddress = $map['mail_address'];
        }
        if(isset($map['from_mail_alias'])){
            $model->fromMailAlias = $map['from_mail_alias'];
        }
        return $model;
    }
    /**
     * @description 发件人邮件地址，可选
     * @var string
     */
    public $fromMailAddress;

    /**
     * @description 邮件正文，可选
     * @var string
     */
    public $bodyHtml;

    /**
     * @description 邮件标题，可选
     * @var string
     */
    public $title;

    /**
     * @description 邮件地址，可选
     * @var string
     */
    public $mailAddress;

    /**
     * @description 发件人姓名
     * @var string
     */
    public $fromMailAlias;

}
