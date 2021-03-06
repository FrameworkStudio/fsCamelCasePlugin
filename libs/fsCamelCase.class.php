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

/**
 * Description of camelCaseClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 * @package fsCamelCasePlugin
 * @version 1.0.0
 */
class fsCamelCase {

  /**
   * Método principal para la conversión de texto a tipo camelCase
   * @param string $str
   * @param array $exclude
   * @return string
   */
  public function camelCase($str, $exclude = array()) {
    // replace accents by equivalent non-accents
    $str = $this->replaceAccents($str);
    // non-alpha and non-numeric characters become spaces
    $str = preg_replace('/[^a-z0-9' . implode("", $exclude) . ']+/i', ' ', $str);
    // uppercase the first character of each word
    $str = ucwords(trim($str));
    return lcfirst(str_replace(" ", "", $str));
  }

  private function replaceAccents($str) {
    $search = explode(",", "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ");
    $replace = explode(",", "c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE");
    return str_replace($search, $replace, $str);
  }

}
