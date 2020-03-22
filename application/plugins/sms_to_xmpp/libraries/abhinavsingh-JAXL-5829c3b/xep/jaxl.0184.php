<?php
/**
 * Jaxl (Jabber XMPP Library)
 *
 * Copyright (c) 2009-2010, Abhinav Singh <me@abhinavsingh.com>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Abhinav Singh nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package jaxl
 * @subpackage xep
 * @author Abhinav Singh <me@abhinavsingh.com>
 * @copyright Abhinav Singh
 * @link http://code.google.com/p/jaxl
 */
	
	/**
	 * XEP-0184 Message Receipts
	*/
	class JAXL0184 {
		
		public static $ns = 'urn:xmpp:receipts';
		
		public static function init($jaxl) {
			$jaxl->features[] = self::$ns;
            
            JAXLXml::addTag('message', 'request', '//message/request/@xmlns');
			JAXLXml::addTag('message', 'received', '//message/received/@xmlns');
			JAXLXml::addTag('message', 'receivedId', '//message/received/@id');

			$jaxl->addPlugin('jaxl_get_message', array('JAXL0184', 'handleMessage'));
		}
		
		public static function requestReceipt() {
			$payload = '<request xmlns="'.self::$ns.'"/>';
			return $payload;
		}
		
		public static function handleMessage($payloads, $jaxl) {
			foreach($payloads as $payload) {
				if($payload['request'] == self::$ns) {
					$child = array();
					$child['payload'] = '<received xmlns="'.self::$ns.'" id="'.$payload['id'].'"/>';
					XMPPSend::message($jaxl, $payload['from'], $payload['to'], $child, false, false);
				}
			}
			return $payloads;
		}
		
	}
	
?>
