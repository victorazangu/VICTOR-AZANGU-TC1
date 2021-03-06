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

namespace Google\Service\CloudDeploy;

class Release extends \Google\Collection
{
  protected $collection_key = 'targetSnapshots';
  public $annotations;
  protected $buildArtifactsType = BuildArtifact::class;
  protected $buildArtifactsDataType = 'array';
  public $createTime;
  protected $deliveryPipelineSnapshotType = DeliveryPipeline::class;
  protected $deliveryPipelineSnapshotDataType = '';
  public $description;
  public $etag;
  public $labels;
  public $name;
  public $renderEndTime;
  public $renderStartTime;
  public $renderState;
  public $skaffoldConfigPath;
  public $skaffoldConfigUri;
  public $skaffoldVersion;
  protected $targetArtifactsType = TargetArtifact::class;
  protected $targetArtifactsDataType = 'map';
  protected $targetRendersType = TargetRender::class;
  protected $targetRendersDataType = 'map';
  protected $targetSnapshotsType = Target::class;
  protected $targetSnapshotsDataType = 'array';
  public $uid;

  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param BuildArtifact[]
   */
  public function setBuildArtifacts($buildArtifacts)
  {
    $this->buildArtifacts = $buildArtifacts;
  }
  /**
   * @return BuildArtifact[]
   */
  public function getBuildArtifacts()
  {
    return $this->buildArtifacts;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param DeliveryPipeline
   */
  public function setDeliveryPipelineSnapshot(DeliveryPipeline $deliveryPipelineSnapshot)
  {
    $this->deliveryPipelineSnapshot = $deliveryPipelineSnapshot;
  }
  /**
   * @return DeliveryPipeline
   */
  public function getDeliveryPipelineSnapshot()
  {
    return $this->deliveryPipelineSnapshot;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRenderEndTime($renderEndTime)
  {
    $this->renderEndTime = $renderEndTime;
  }
  public function getRenderEndTime()
  {
    return $this->renderEndTime;
  }
  public function setRenderStartTime($renderStartTime)
  {
    $this->renderStartTime = $renderStartTime;
  }
  public function getRenderStartTime()
  {
    return $this->renderStartTime;
  }
  public function setRenderState($renderState)
  {
    $this->renderState = $renderState;
  }
  public function getRenderState()
  {
    return $this->renderState;
  }
  public function setSkaffoldConfigPath($skaffoldConfigPath)
  {
    $this->skaffoldConfigPath = $skaffoldConfigPath;
  }
  public function getSkaffoldConfigPath()
  {
    return $this->skaffoldConfigPath;
  }
  public function setSkaffoldConfigUri($skaffoldConfigUri)
  {
    $this->skaffoldConfigUri = $skaffoldConfigUri;
  }
  public function getSkaffoldConfigUri()
  {
    return $this->skaffoldConfigUri;
  }
  public function setSkaffoldVersion($skaffoldVersion)
  {
    $this->skaffoldVersion = $skaffoldVersion;
  }
  public function getSkaffoldVersion()
  {
    return $this->skaffoldVersion;
  }
  /**
   * @param TargetArtifact[]
   */
  public function setTargetArtifacts($targetArtifacts)
  {
    $this->targetArtifacts = $targetArtifacts;
  }
  /**
   * @return TargetArtifact[]
   */
  public function getTargetArtifacts()
  {
    return $this->targetArtifacts;
  }
  /**
   * @param TargetRender[]
   */
  public function setTargetRenders($targetRenders)
  {
    $this->targetRenders = $targetRenders;
  }
  /**
   * @return TargetRender[]
   */
  public function getTargetRenders()
  {
    return $this->targetRenders;
  }
  /**
   * @param Target[]
   */
  public function setTargetSnapshots($targetSnapshots)
  {
    $this->targetSnapshots = $targetSnapshots;
  }
  /**
   * @return Target[]
   */
  public function getTargetSnapshots()
  {
    return $this->targetSnapshots;
  }
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Release::class, 'Google_Service_CloudDeploy_Release');
