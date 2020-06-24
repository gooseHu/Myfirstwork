# Myfirstwork
 
利用laravel框架实现Todo应用

1、搭建Laravel环境

2、创建模型层

3、创建视图层

4、创建控制器层

5、创建路由

6、实现效果


>*1、搭建搭建Laravel环境*

>>	（1）安装phpstorm与laragon

>>	（2）使用laragon快速搭建laravel框架


*2、创建模型层*

	在views文件夹下新建layouts目录，并在此目录中新建app.blade.php作为布局模板，为其他页添加统一的Bootstrap导航栏。


*3、创建视图层*

	（1）resouces->views文件夹中创建todos目录新建index.blade.php展示Todos列表，引入bootstrap板块美化样式

	（2）在同目录下创建show.blade.php，展示单个Todo详情页

	（3）在同目录下创建新建页create.blade.php

	（4）在同目录下创建编辑页edit.blade.php


*4、创建控制器层*

	点击Laragon下方的Terminal,在终端中输入php artisan make:Controller TodoController,可新建控制器TodoController，并在其中定义index方法返回todos视图。同时可定义show，create，edit，delete，store，update等方法


*5、创建路由*

	在routes/web.php文件中添加路由


*6、实现效果*

详细内容可进入doc目录下查看