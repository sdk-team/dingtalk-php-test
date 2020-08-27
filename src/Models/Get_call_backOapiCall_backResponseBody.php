<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_call_backOapiCall_backResponseBody extends Model {
    protected $_name = [
        'url' => 'url',
        'aesKey' => 'aes_key',
        'token' => 'token',
        'callBackTag' => 'call_back_tag',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->aesKey) {
            $res['aes_key'] = $this->aesKey;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->callBackTag) {
            $res['call_back_tag'] = $this->callBackTag;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_call_backOapiCall_backResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['aes_key'])){
            $model->aesKey = $map['aes_key'];
        }
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['call_back_tag'])){
            if(!empty($map['call_back_tag'])){
                $model->callBackTag = $map['call_back_tag'];
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 接收事件回调的url
     * @var string
     */
    public $url;

    /**
     * @description 数据加密密钥。用于回调数据的加密，长度固定为43个字符，从a-z, A-Z, 0-9共62个字符中选取,您可以随机生成，ISV(服务提供商)推荐使用注册套件时填写的EncodingAESKey
     * @var string
     */
    public $aesKey;

    /**
     * @description 加解密需要用到的token，ISV(服务提供商)推荐使用注册套件时填写的token，普通企业可以随机填写
     * @var string
     */
    public $token;

    /**
     * @description 需要监听的事件类型，有20种，“user_add_org”, “user_modify_org”, “user_leave_org”,“org_admin_add”, “org_admin_remove”, “org_dept_create”, “org_dept_modify”, “org_dept_remove”, “org_remove”, “chat_add_member”, “chat_remove_member”, “chat_quit”, “chat_update_owner”, “chat_update_title”, “chat_disband”, “chat_disband_microapp”, “check_in”,“bpms_task_change”,“bpms_instance_change”,,“label_user_change”,“label_conf_add”, “label_conf_modify”,“label_conf_del”,
     * @var array
     */
    public $callBackTag;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
