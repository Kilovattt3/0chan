<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-02-08 15:37:16                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoVideo extends Attachment
	{
		protected $service = null;
		protected $serviceId = null;
		protected $videoId = null;
		protected $previewUrl = null;
		
		/**
		 * @return AttachmentEmbedService
		**/
		public function getService()
		{
			if (!$this->service && $this->serviceId) {
				$this->service = new AttachmentEmbedService($this->serviceId);
			}
			
			return $this->service;
		}
		
		public function getServiceId()
		{
			return $this->service
				? $this->service->getId()
				: $this->serviceId;
		}
		
		/**
		 * @return Video
		**/
		public function setService(AttachmentEmbedService $service)
		{
			$this->service = $service;
			$this->serviceId = $service ? $service->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return Video
		**/
		public function setServiceId($id)
		{
			$this->service = null;
			$this->serviceId = $id;
			
			return $this;
		}
		
		/**
		 * @return Video
		**/
		public function dropService()
		{
			$this->service = null;
			$this->serviceId = null;
			
			return $this;
		}
		
		public function getVideoId()
		{
			return $this->videoId;
		}
		
		/**
		 * @return Video
		**/
		public function setVideoId($videoId)
		{
			$this->videoId = $videoId;
			
			return $this;
		}
		
		public function getPreviewUrl()
		{
			return $this->previewUrl;
		}
		
		/**
		 * @return Video
		**/
		public function setPreviewUrl($previewUrl)
		{
			$this->previewUrl = $previewUrl;
			
			return $this;
		}
	}
?>