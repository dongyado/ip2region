ip2region - ip到地区的映射库

数据聚合了一些知名ip到地名查询提供商的数据，这些是他们官方的的准确率，经测试着实比纯真啥的准确多了。
每次聚合一下数据需要1-2天，会不定时更新。

原项目:
* github: https://github.com/lionsoul2014/ip2region
* git@osc: https://git.oschina.net/lionsoul/ip2region.git

#ip2region extension for php
为了实现更快的查速度，编写了ip2region的PHP扩展。

### 版本支持

* php5 ： tag php5
* phpng ： tag phpng


### 安装步骤
* 在php ext/目录下
    
        git clone https://git.oschina.net/monsterkiller/ip2region.git

* 在ext/ip2region下，运行 

        phpize
        ./configure
        make && sudo make install

* 配置ip2region.ini 指定db_file路径，(cli 或者 fpm)
    
        extension=ip2region.so
        ip2region.db_file=/path/to/ip2region.db

* 测试 

在ext/ip2region/下运行
    
        php ip2region.php

### 使用

参考ip2region/ip2region.php
