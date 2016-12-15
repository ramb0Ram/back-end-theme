# BackEndTheme plugin for CakePHP

## Installation

After install Cakephp 3, go to plugin and clone the project

```
git submodule add git@github.com:ramb0Ram/back-end-theme.git BackEndTheme
```

Load on bootstrap.php

```
Plugin::load('BackEndTheme', ['bootstrap' => true, 'routes' => true]);
```

Set theme on AppController::beforeRender:

```
$this->viewBuilder()->theme('BackEndTheme');
```
