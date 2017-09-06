<?php
$root = dirname(dirname(__DIR__));
Yii::setAlias('@root', $root);
Yii::setAlias('@common', $root . '/common');
Yii::setAlias('@frontend', $root . '/frontend');
Yii::setAlias('@backend', $root . '/backend');
Yii::setAlias('@console', $root . '/console');

Yii::setAlias('@app_config_path', __DIR__ . '/settings');