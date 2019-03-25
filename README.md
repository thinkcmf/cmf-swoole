ThinkCMF Swoole 扩展
===============

## 更新日志

### 5.1.4-dev
* 增加`swoole_server_start`,`swoole_worker_start`,`swoole_websocket_on_open`,`swoole_websocket_on_close`钩子
* 增加`WebSocket`独立运行命令
* 增加`WebSocket onOpen`回调
* 修复`WebSocket`事件引起的数据库执行报错
* 修复`WebSocket`发送消息未判断是否为`WebSocket`连接
* 增加worker进程启动时自动初始化所有模块

### 5.1.3
* 修复文件更改后worker重启后部分请求cookie报错
* 修复data/config目录不存在时文件定时刷新报错
* 修复无法识别?s=app/controller/action路径
* `gitignore`过滤 composer.lock文件

