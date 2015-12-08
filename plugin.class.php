<?php

/* 
 * Copyright 2015 Julian Lasso <ingeniero.julianlasso@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace fsCamelCasePlugin;

use FStudio\fsPlugin;
use FStudio\myConfig as config;

/**
 * Plugin para el manejo de la librería camelCase para Framework Studio
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 * @package fsCamelCasePlugin
 * @version 1.0.0
 */
class plugin extends fsPlugin {

  public function __construct(config $config) {
    parent::__construct($config);
    require_once $config->getPath() . 'libs/plugins/fsCamelCasePlugin/libs/fsCamelCasePlugin.class.php';
  }

}
