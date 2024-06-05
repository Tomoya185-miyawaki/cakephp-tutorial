# コンテナのベースとしてamazonlinux:2023を指定
FROM amazonlinux:2023

# インストール可能なパッケージの一覧を更新
RUN yum -y update

# 最新版のnginxをインストール
RUN yum -y install nginx

ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]
