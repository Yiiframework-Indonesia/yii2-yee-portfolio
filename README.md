# yii2-yee-portfolio

##Yee CMS - Portfolio Module

####Backend module for managing portfolio 

This module is part of Yee CMS (based on Yii2 Framework).

Portfolio module lets you easily create portfolio on your site. 

Installation
------------

- Install [Yee Media Module](https://github.com/yeesoft/yii2-yee-media) if it is not installed yet.

- Either run

```
composer require --prefer-dist yiid/yii2-yee-portfolio "*"
```

or add

```
"yiid/yii2-yee-portfolio": "*"
```

to the require section of your `composer.json` file.

- Run migrations

```php
yii migrate --migrationPath=@vendor/yiid/yii2-yee-portfolio/migrations/
```

Configuration
------
- In your backend config file

```php
'modules'=>[
	'post' => [
		'class' => 'yiid\portfolio\PortfolioModule',
	],
],
```

Dashboard widget
-------  

You can use dashboard widget to display short information about recent activity in the module.

Add this code in your control panel dashboard to display widget:
```php
echo \yeesoft\post\widgets\dashboard\Posts::widget();
```

Screenshots
-------  

[Flickr - Yee CMS Post Module](https://www.flickr.com/photos/134050409@N07/sets/72157656324703598)
