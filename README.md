ThinkCMF Swoole 扩展
===============
本扩展是基于`topthink/think-swoole`优化，方便ThinkCMF用户快速使用上swoole，原则上你可以使用相同的代码同时支持`PHP-FPM`和`Swoole`。 它让你的项目同时拥有swoole的高性能和ThinkPHP快速开发的特性，你可以开发高性能的API服务，也可以拥有 websocket。
## 安装 swoole
详细的 swoole安装可以参考swoole官方文档，https://wiki.swoole.com/wiki/page/6.html

## 安装 ThinkCMF
详细的ThinkCMF安装可以参考ThinkCMF安装文档，https://www.kancloud.cn/thinkcmf/doc5_1/957743

## 安装 cmf-swoole扩展
```
composer require thinkcmf/cmf-swoole
```
## 启动 swoole
cd到程序根目录，执行如下命令：
```
php think swoole
```
swoole启动后会输出如下内容：
```
Starting swoole http server...
Swoole http server started: http://0.0.0.0:9501;
You can exit with `CTRL-C`
```
此时 swoole就启动成功了！
swoole默认端口是9501，监听所有 ip。在浏览器中输入 swoole所在主机的 ip加端口9501，就可以访问页面了。
 如果想关闭，只要按 `CTRL+C`组合键就可以关闭 swoole了。

##  守护进程方式启动 swoole
同样cd到程序根目录，但要执行如下命令：
```
php think swoole -d
```
此 swoole会以后台守护进程的方式运行，要想停止 swoole就要使用下面的命名了：
```
php think swoole stop
```


## 指定IP和端口号
默认IP是`0.0.0.0`，默认端口是`9501`
### 指定swoole IP
```
php think swoole -H 127.0.0.1
```
或
```
php think swoole --host=127.0.0.1
```
### 指定swoole端口
```
php think swoole -p 9502
```
或
```
php think swoole --port=9502
```

## 重启 swoole
```
php think swoole restart
```
## 优雅重载swoole
此种方式会平滑地重启所有 worker进程
```
php think swoole reload
```
# Swoole API
## 启动 swoole api服务
swoole下 RESTful和普通 web服务是分开的；默认 IP:`0.0.0.0`，默认端口:`9502`
```
php think swoole:api
```
同样支持守护模式
```
php think swoole:api -d
```
指定 IP和端口
```
php think swoole:api -d -p 9502 -H 127.0.0.1
```
停止api服务
```
php think swoole:api  stop
```
重启api服务
```
php think swoole:api   restart
```
重载api服务
```
php think swoole:api    reload
```

## 项目案例
### ThinkCMF WebSocket Demo:
WebSocket演示插件 http://im.yyw66.cn/ws.html 


## 更新日志

### 6.0.0 
* coding~
