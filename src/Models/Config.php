<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

/**
 * Model for initing client
 */
class Config extends Model {
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->session) {
            $res['session'] = $this->session;
        }
        if (null !== $this->suiteTicket) {
            $res['suiteTicket'] = $this->suiteTicket;
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->readTimeout) {
            $res['readTimeout'] = $this->readTimeout;
        }
        if (null !== $this->connectTimeout) {
            $res['connectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->httpProxy) {
            $res['httpProxy'] = $this->httpProxy;
        }
        if (null !== $this->httpsProxy) {
            $res['httpsProxy'] = $this->httpsProxy;
        }
        if (null !== $this->serverUrl) {
            $res['serverUrl'] = $this->serverUrl;
        }
        if (null !== $this->noProxy) {
            $res['noProxy'] = $this->noProxy;
        }
        if (null !== $this->maxIdleConns) {
            $res['maxIdleConns'] = $this->maxIdleConns;
        }
        if (null !== $this->userAgent) {
            $res['userAgent'] = $this->userAgent;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Config
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['accessKeyId'])){
            $model->accessKeyId = $map['accessKeyId'];
        }
        if(isset($map['accessKeySecret'])){
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if(isset($map['session'])){
            $model->session = $map['session'];
        }
        if(isset($map['suiteTicket'])){
            $model->suiteTicket = $map['suiteTicket'];
        }
        if(isset($map['corpId'])){
            $model->corpId = $map['corpId'];
        }
        if(isset($map['readTimeout'])){
            $model->readTimeout = $map['readTimeout'];
        }
        if(isset($map['connectTimeout'])){
            $model->connectTimeout = $map['connectTimeout'];
        }
        if(isset($map['httpProxy'])){
            $model->httpProxy = $map['httpProxy'];
        }
        if(isset($map['httpsProxy'])){
            $model->httpsProxy = $map['httpsProxy'];
        }
        if(isset($map['serverUrl'])){
            $model->serverUrl = $map['serverUrl'];
        }
        if(isset($map['noProxy'])){
            $model->noProxy = $map['noProxy'];
        }
        if(isset($map['maxIdleConns'])){
            $model->maxIdleConns = $map['maxIdleConns'];
        }
        if(isset($map['userAgent'])){
            $model->userAgent = $map['userAgent'];
        }
        return $model;
    }
    public $accessKeyId;

    public $accessKeySecret;

    public $session;

    public $suiteTicket;

    public $corpId;

    public $readTimeout;

    public $connectTimeout;

    public $httpProxy;

    public $httpsProxy;

    public $serverUrl;

    public $noProxy;

    public $maxIdleConns;

    public $userAgent;

}
