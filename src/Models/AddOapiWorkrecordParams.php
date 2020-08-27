<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkrecordParams\formItemList;

class AddOapiWorkrecordParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'createTime' => 'create_time',
        'title' => 'title',
        'url' => 'url',
        'pcUrl' => 'pcUrl',
        'formItemList' => 'formItemList',
        'originatorUserId' => 'originator_user_id',
        'sourceName' => 'source_name',
        'pcOpenType' => 'pc_open_type',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('formItemList', $this->formItemList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->pcUrl) {
            $res['pcUrl'] = $this->pcUrl;
        }
        if (null !== $this->formItemList) {
            $res['formItemList'] = [];
            if(null !== $this->formItemList && is_array($this->formItemList)){
                $n = 0;
                foreach($this->formItemList as $item){
                    $res['formItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originatorUserId) {
            $res['originator_user_id'] = $this->originatorUserId;
        }
        if (null !== $this->sourceName) {
            $res['source_name'] = $this->sourceName;
        }
        if (null !== $this->pcOpenType) {
            $res['pc_open_type'] = $this->pcOpenType;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiWorkrecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['pcUrl'])){
            $model->pcUrl = $map['pcUrl'];
        }
        if(isset($map['formItemList'])){
            if(!empty($map['formItemList'])){
                $model->formItemList = [];
                $n = 0;
                foreach($map['formItemList'] as $item) {
                    $model->formItemList[$n++] = null !== $item ? formItemList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['originator_user_id'])){
            $model->originatorUserId = $map['originator_user_id'];
        }
        if(isset($map['source_name'])){
            $model->sourceName = $map['source_name'];
        }
        if(isset($map['pc_open_type'])){
            $model->pcOpenType = $map['pc_open_type'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 待办时间。Unix时间戳
     * @var int
     */
    public $createTime;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 待办跳转url
     * @var string
     */
    public $url;

    /**
     * @description pc端跳转url，不传则使用url参数
     * @var string
     */
    public $pcUrl;

    /**
     * @description 表单列表
     * @var array
     */
    public $formItemList;

    /**
     * @description 发起人id
     * @var string
     */
    public $originatorUserId;

    /**
     * @description 待办来源名称
     * @var string
     */
    public $sourceName;

    /**
     * @description 待办的pc打开方式。2表示在pc端打开，4表示在浏览器打开
     * @var int
     */
    public $pcOpenType;

    /**
     * @description 外部业务id，建议带上业务方来源字段，防止与其他业务方冲突
     * @var string
     */
    public $bizId;

}
