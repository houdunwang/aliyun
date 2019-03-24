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
namespace CCC\Request\V20170705;

class CreatePredictiveJobsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "CreatePredictiveJobs", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $instanceId;

	private  $skillGroupId;

	private  $strategyJson;

	private  $JobsJsons;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getSkillGroupId() {
		return $this->skillGroupId;
	}

	public function setSkillGroupId($skillGroupId) {
		$this->skillGroupId = $skillGroupId;
		$this->queryParameters["SkillGroupId"]=$skillGroupId;
	}

	public function getStrategyJson() {
		return $this->strategyJson;
	}

	public function setStrategyJson($strategyJson) {
		$this->strategyJson = $strategyJson;
		$this->queryParameters["StrategyJson"]=$strategyJson;
	}

	public function getJobsJsons() {
		return $this->JobsJsons;
	}

	public function setJobsJsons($JobsJsons) {
		$this->JobsJsons = $JobsJsons;
		for ($i = 0; $i < count($JobsJsons); $i ++) {	
			$this->queryParameters["JobsJson.".($i+1)] = $JobsJsons[$i];
		}
	}
	
}