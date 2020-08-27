<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddresumerecordCorpHrmEmployeeParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'title' => 'title',
        'content' => 'content',
        'kVContent' => 'k_v_content',
        'phoneUrl' => 'phone_url',
        'pcUrl' => 'pc_url',
        'webUrl' => 'web_url',
        'recordTimeStamp' => 'record_time_stamp',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->kVContent) {
            $res['k_v_content'] = $this->kVContent;
        }
        if (null !== $this->phoneUrl) {
            $res['phone_url'] = $this->phoneUrl;
        }
        if (null !== $this->pcUrl) {
            $res['pc_url'] = $this->pcUrl;
        }
        if (null !== $this->webUrl) {
            $res['web_url'] = $this->webUrl;
        }
        if (null !== $this->recordTimeStamp) {
            $res['record_time_stamp'] = $this->recordTimeStamp;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddresumerecordCorpHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['k_v_content'])){
            $model->kVContent = $map['k_v_content'];
        }
        if(isset($map['phone_url'])){
            $model->phoneUrl = $map['phone_url'];
        }
        if(isset($map['pc_url'])){
            $model->pcUrl = $map['pc_url'];
        }
        if(isset($map['web_url'])){
            $model->webUrl = $map['web_url'];
        }
        if(isset($map['record_time_stamp'])){
            $model->recordTimeStamp = $map['record_time_stamp'];
        }
        return $model;
    }
    /**
     * @description 被操作人userid
     * @var string
     */
    public $userid;

    /**
     * @description 成长记录title
     * @var string
     */
    public $title;

    /**
     * @description 成长记录第一条内容
     * @var string
     */
    public $content;

    /**
     * @description 厂长记录kv展示内容：json格式，顺序展示
     * @var string
     */
    public $kVContent;

    /**
     * @description 手机端url
     * @var string
     */
    public $phoneUrl;

    /**
     * @description pc端url
     * @var string
     */
    public $pcUrl;

    /**
     * @description webOA后台url
     * @var string
     */
    public $webUrl;

    /**
     * @description 20180428 零点零分零秒
     * @var int
     */
    public $recordTimeStamp;

}
