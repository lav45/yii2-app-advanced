<?php
$root = dirname(__DIR__, 2);
Yii::setAlias('@root', $root);
Yii::setAlias('@common', $root . '/common');
Yii::setAlias('@www', $root . '/www');
Yii::setAlias('@admin', $root . '/admin');
Yii::setAlias('@console', $root . '/console');

Yii::setAlias('@app_config_path', __DIR__ . '/settings');
