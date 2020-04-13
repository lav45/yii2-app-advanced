<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both admin and www
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
admin
    assets/              contains application assets such as JavaScript and CSS
    config/              contains admin configurations
    controllers/         contains Web controller classes
    models/              contains admin-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for admin application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
www
    assets/              contains application assets such as JavaScript and CSS
    config/              contains www configurations
    controllers/         contains Web controller classes
    models/              contains www-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for www application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains www widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

## Install

```
~$ docker volume create postgres-12
~$ docker network create site --subnet 172.30.0.0/16
```

Install docker-compose if it was not installed earlier
```
~$ sudo curl -L "https://github.com/docker/compose/releases/download/1.25.4/docker-compose-$(uname -s)-$(uname -m)" -o /usr/bin/docker-compose
~$ sudo chmod +x /usr/bin/docker-compose
```

Start the container build process
```
~$ env UID=$(id -u) GID=$(id -g) docker-compose build --pull --force-rm
~$ docker-compose up -d --remove-orphans
```

```
~$ export PATH=".:$PATH"

~$ init --env=dev --overwrite=a
~$ composer install --prefer-dist
~$ yii migrate --interactive=0

~$ yii user/create admin admin
```

Load config
```
~$ yii config config.json
```

Add new hosts to log in to the site
```
172.30.0.2      www.site.com admin.site.com
172.30.0.4      postgres.site.com
```