<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Datastream;

class OracleProfile extends \Google\Model
{
  public $connectionAttributes;
  public $databaseService;
  public $hostname;
  public $password;
  public $port;
  public $username;

  public function setConnectionAttributes($connectionAttributes)
  {
    $this->connectionAttributes = $connectionAttributes;
  }
  public function getConnectionAttributes()
  {
    return $this->connectionAttributes;
  }
  public function setDatabaseService($databaseService)
  {
    $this->databaseService = $databaseService;
  }
  public function getDatabaseService()
  {
    return $this->databaseService;
  }
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  public function getHostname()
  {
    return $this->hostname;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setPort($port)
  {
    $this->port = $port;
  }
  public function getPort()
  {
    return $this->port;
  }
  public function setUsername($username)
  {
    $this->username = $username;
  }
  public function getUsername()
  {
    return $this->username;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OracleProfile::class, 'Google_Service_Datastream_OracleProfile');
