# TailDown

**近期暂停更新**

TailDown是一个PHP编写的，多版本分发版本库程序，后台可以发布版本，前台会列出所有已发布版本+简介及下载链接，还有公告功能

> [!TIP]
> 1.2.0正式版更新计划：
> - 支持S3、各大大厂云储存挂载支持
> - Markdown文档支持
> - 多项目支持

<!-- PROJECT SHIELDS -->
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<!-- PROJECT LOGO -->
<br />

<p align="center">
  <a href="https://github.com/YShenZe/TailDwon-PHP/">
    <img src="https://cdn.mengze.vip/gh/YShenZe/TailDwon-PHP@main/logo.png" alt="Logo" width="230" height="80">
  </a>

  <h3 align="center">"唯一的"项目版本库程序</h3>
  <p align="center">
    一个基于PHP的完全开源免费的项目版本库程序！
    <br />
    <a href="https://github.com/YShenZe/TailDwon-PHP/"><strong>探索本项目的文档 »</strong></a>
    <br />
    <br />
    <a href="https://mengze.vip">作者博客</a>
    ·
    <a href="https://github.com/YShenZe/TailDwon-PHP/issues">报告Bug</a>
    ·
    <a href="https://github.com/YShenZe/TailDwon-PHP/issues">提出新特性</a>
  </p>

</p>


 本篇README.MD面向网站运维者

## 目录

- [上手指南](#上手指南)
  - [开发前的配置要求](#开发前的配置要求)
  - [安装步骤](#安装步骤)
- [文件目录说明](#文件目录说明)
- [部署](#部署)
- [使用到的框架](#使用到的框架)
- [作者](#作者)
- [鸣谢](#鸣谢)
- [贡献者](#贡献者)
  - [如何参与开源项目](#如何参与开源项目)

### 上手指南

该项目的开发一般是重写UI，本项目全部使用TailwindCSS2.2.19默认样式开发，无冗余CSS，若要重写UI，上手非常简单。

###### 开发前的配置要求

1. PHP7.4~8.3开发环境
2. Web环境

###### **安装步骤**

1. Clone the repo

```sh
git clone https://github.com/YShenZe/TailDwon-PHP.git
```

### 文件目录说明

```filetree
PHP_WorkSpace
├── LICENSE
├── README.MD
├── /.github/
│  └── /ISSUE_TEMPLATE/
│  │  └── bug.yml
├── /public/
│  ├── /admin/
│  │  ├── /uploads/
│  │  ├── announcements.php
│  │  ├── dashboard.php
│  │  ├── header.php
│  │  ├── index.php
│  │  ├── login.php
│  │  ├── settings.php
│  │  ├── footer.php
│  │  └── versions.php│
│  ├── index.php
├── /src/
│  ├── auth.php
│  ├── database.php
│  ├── functions.php
│  └── helper.php
├── install.php
└── index.php

```

### 部署

克隆本仓库新建一个PHP站点，上传程序，访问首页，若没安装会转跳安装向导，安装好之后即可正常访问了。后台在域名/public/admin

### 使用到的框架

- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [TailwindCSS](https://www.tailwindcss.cn/)

### 作者

3987876774@qq.com

qq:3987876774

 *您也可以在贡献者名单中参看所有参与该项目的开发者。*

### 版权说明

该项目签署了MIT 授权许可，详情请参阅 [LICENSE](https://github.com/YShenZe/TailDwon-PHP/blob/main/LICENSE)

### 鸣谢

- [Choose an Open Source License](https://choosealicense.com)
- [GitHub Pages](https://pages.github.com)


## 贡献者
<p align="left">
<a href="https://github.com/YShenZe/TailDwon-PHP">
  <img src="https://github.com/YShenZe.png" alt="Avatar" width="40" height="40"/>
</a>
</p>

#### 如何参与开源项目

贡献使开源社区成为一个学习、激励和创造的绝佳场所。你所作的任何贡献都是**非常感谢**的。


1. Fork 本项目，然后发布并在本仓库Issue里宣传
2. 直接在Issue提出你的代码
3. 联系作者

<!-- links -->
[your-project-path]: YShenZe/TailDwon-PHP
[forks-shield]: https://img.shields.io/github/forks/YShenZe/TailDwon-PHP.svg?style=flat-square
[forks-url]: https://github.com/YShenZe/TailDwon-PHP/network/members
[stars-shield]: https://img.shields.io/github/stars/YShenZe/TailDwon-PHP.svg?style=flat-square
[stars-url]: https://github.com/YShenZe/TailDwon-PHP/stargazers
[issues-shield]: https://img.shields.io/github/issues/YShenZe/TailDwon-PHP.svg?style=flat-square
[issues-url]: https://img.shields.io/github/issues/YShenZe/TailDwon-PHP.svg
[license-shield]: https://img.shields.io/github/license/YShenZe/TailDwon-PHP.svg?style=flat-square
[license-url]: https://github.com/YShenZe/TailDwon-PHP/blob/main/LICENSE

[![mm_reward_qrcode_1743497808845.png](https://cdn.mengze.vip/gh/YShenZe/Blog-Static-Resource@main/images/mm_reward_qrcode_1743497808845.png)](https://cdn.mengze.vip/gh/YShenZe/Blog-Static-Resource@main/images/mm_reward_qrcode_1743497808845.png)