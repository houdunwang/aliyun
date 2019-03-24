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
namespace Cms\Request\V20180308;

class DisableEventRuleRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "DisableEventRule", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $RuleNamess;

	private  $ruleName;

	public function getRuleNamess() {
		return $this->RuleNamess;
	}

	public function setRuleNamess($RuleNamess) {
		$this->RuleNamess = $RuleNamess;
		for ($i = 0; $i < count($RuleNamess); $i ++) {	
			$this->queryParameters["RuleNames.".($i+1)] = $RuleNamess[$i];
		}
	}

	public function getRuleName() {
		return $this->ruleName;
	}

	public function setRuleName($ruleName) {
		$this->ruleName = $ruleName;
		$this->queryParameters["RuleName"]=$ruleName;
	}
	
}