<?php namespace Houdunwang\Aliyun\Build\Mail;

/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
class App
{
    public function request()
    {
        return new \Dm\Request\V20151123\SingleSendMailRequest();
    }
}
