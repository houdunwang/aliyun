# 阿里云AliyunSdk
## aliyun
提供了常用的阿里云服务操作方法，是对阿里云官网SDK的封装。

## 阿里云直播
直播系统了很多接口，具体请参考[阿里官网手册](https://help.aliyun.com/document_detail/48207.html?spm=5176.7991389.632961.2.G5Hkk9)，下面我以一个接口来讲解使用方法，其他的使用请参考手册，其实就是传递些参数而已。

#### 查看某个域名下所有流的信息

```
//获取操作对象
$client  = \houdunwang\aliyun\Aliyun::client();
//实例化直播对象
$request = new \live\Request\V20161101\DescribeLiveStreamsPublishListRequest();
//下面是根据手册设置的参数，具体参数含义请查看手册 [阿里官网手册](https://help.aliyun.com/document_detail/48207.html?spm=5176.7991389.632961.2.G5Hkk9)

$request->setActionName('DescribeLiveStreamsPublishList');
$request->setDomainName('live.houdunren.com');
$request->setStartTime(\Carbon\Carbon::instance(new DateTime('2017-05-22 3:33:12'))->format('Y-m-d\TH:i:s\Z'));
$request->setEndTime(\Carbon\Carbon::instance(new DateTime('2017-05-23 3:33:12'))->format('Y-m-d\TH:i:s\Z'));
$response = $client->getAcsResponse($request);
print_r($response);
```