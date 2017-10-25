<?php namespace houdunwang\aliyun;

/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
include_once __DIR__.'/../aliyun-openapi-php-sdk-master/aliyun-php-sdk-core/Config.php';

class Aliyun
{
    /**
     * 获取阿里云执行请求客户端
     *
     * @return \DefaultAcsClient
     */
    public function client()
    {
        $regionId        = "cn-hangzhou";
        $accessKeyId     = "你自己的ID";
        $accessKeySecret = "你自己的key_secret";
        $iClientProfile  = \DefaultProfile::getProfile($regionId, $accessKeyId, $accessKeySecret);

        return new \DefaultAcsClient($iClientProfile);
    }
}