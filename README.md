# laravel-bbs-v5.8
Laravel BBS based on Laravel v5.8.*

## .gitignore

```
$ vi .gitignore

.idea
/node_modules
/public/css
/public/fonts
/public/hot
/public/js
/public/storage
/storage/*.key
/vendor

.env
.env.bak
.env.old
.env.save
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
yarn.lock

```

## composer

```
$ vi composer.json

.
.
.
"autoload": {
    "psr-4": {
        "App\\": "app/"
    },
    "classmap": [
        "database/seeds",
        "database/factories"
    ],
    "files": [
        "app/helpers.php"
    ]
},
"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/"
    }
},
.
.
.

$ composer config -g repo.packagist composer https://packagist.laravel-china.org

$ composer create-project laravel/laravel laravelBbsV5.8 --prefer-dist "5.8.*"

$ composer dumpautoload
# OR:
$ composer dump-autoload
```

## yarn

```
$ yarn config set registry https://registry.npm.taobao.org

$ yarn install
# OR:
$ yarn install --no-lockfile

# Font Awesome
$ yarn add @fortawesome/fontawesome-free
```

## npm

```
# Dev Mode:
$ npm run watch-poll &
# Kill this job:
$ kill %1

# 常见问题:
Additional dependencies must be installed. This will only take a moment.
Running: yarn add vue-template-compiler --dev --production=false

# 解决方案:
$ yarn add vue-template-compiler --dev --production=false

# Prod Mode:
$ npm run production
```
