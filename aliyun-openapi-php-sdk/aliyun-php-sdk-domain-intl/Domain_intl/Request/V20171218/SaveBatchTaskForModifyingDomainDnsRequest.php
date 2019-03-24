<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Domain_intl\Request\V20171218;

class SaveBatchTaskForModifyingDomainDnsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveBatchTaskForModifyingDomainDns", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $userClientIp;

	private  $DomainNames;

	private  $DomainNameServers;

	private  $lang;

	private  $aliyunDns;

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getDomainNames() {
		return $this->DomainNames;
	}

	public function setDomainNames($DomainNames) {
		$this->DomainNames = $DomainNames;
		for ($i = 0; $i < count($DomainNames); $i ++) {	
			$this->queryParameters["DomainName.".($i+1)] = $DomainNames[$i];
		}
	}

	public function getDomainNameServers() {
		return $this->DomainNameServers;
	}

	public function setDomainNameServers($DomainNameServers) {
		$this->DomainNameServers = $DomainNameServers;
		for ($i = 0; $i < count($DomainNameServers); $i ++) {	
			$this->queryParameters["DomainNameServer.".($i+1)] = $DomainNameServers[$i];
		}
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getAliyunDns() {
		return $this->aliyunDns;
	}

	public function setAliyunDns($aliyunDns) {
		$this->aliyunDns = $aliyunDns;
		$this->queryParameters["AliyunDns"]=$aliyunDns;
	}
	
}