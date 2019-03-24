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

class SaveBatchTaskForCreatingOrderRenewRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "SaveBatchTaskForCreatingOrderRenew", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $userClientIp;

	private  $OrderRenewParams;

	private  $lang;

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getOrderRenewParams() {
		return $this->OrderRenewParams;
	}

	public function setOrderRenewParams($OrderRenewParams) {
		$this->OrderRenewParams = $OrderRenewParams;
		for ($i = 0; $i < count($OrderRenewParams); $i ++) {	
			$this->queryParameters['OrderRenewParam.' . ($i + 1) . '.DomainName'] = $OrderRenewParams[$i]['DomainName'];
			$this->queryParameters['OrderRenewParam.' . ($i + 1) . '.CurrentExpirationDate'] = $OrderRenewParams[$i]['CurrentExpirationDate'];
			$this->queryParameters['OrderRenewParam.' . ($i + 1) . '.SubscriptionDuration'] = $OrderRenewParams[$i]['SubscriptionDuration'];

		}
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}
	
}