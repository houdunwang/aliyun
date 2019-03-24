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
namespace Mts\Request\V20140618;

class SubmitEditingJobsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "SubmitEditingJobs", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $outputBucket;

	private  $resourceOwnerId;

	private  $editingJobOutputs;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $outputLocation;

	private  $ownerId;

	private  $editingInputs;

	private  $pipelineId;

	public function getOutputBucket() {
		return $this->outputBucket;
	}

	public function setOutputBucket($outputBucket) {
		$this->outputBucket = $outputBucket;
		$this->queryParameters["OutputBucket"]=$outputBucket;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getEditingJobOutputs() {
		return $this->editingJobOutputs;
	}

	public function setEditingJobOutputs($editingJobOutputs) {
		$this->editingJobOutputs = $editingJobOutputs;
		$this->queryParameters["EditingJobOutputs"]=$editingJobOutputs;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOutputLocation() {
		return $this->outputLocation;
	}

	public function setOutputLocation($outputLocation) {
		$this->outputLocation = $outputLocation;
		$this->queryParameters["OutputLocation"]=$outputLocation;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getEditingInputs() {
		return $this->editingInputs;
	}

	public function setEditingInputs($editingInputs) {
		$this->editingInputs = $editingInputs;
		$this->queryParameters["EditingInputs"]=$editingInputs;
	}

	public function getPipelineId() {
		return $this->pipelineId;
	}

	public function setPipelineId($pipelineId) {
		$this->pipelineId = $pipelineId;
		$this->queryParameters["PipelineId"]=$pipelineId;
	}
	
}