<?php
!defined('SRVRSA_PRIVATE_KEY') && define('SRVRSA_PRIVATE_KEY', '-----BEGIN RSA PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAN22Ik9V4L5QKxYcf8lef3fW8OjV+FTwszmfhts4HM8u+x3VhP1d2qU3VgXqR5wJYtyavhzEergpwhHH0TfOow86F06r+A0WCJllk7j0G/PXeYdBT8IaI9dsoDCpl/P0EIQ79j9MQDw4A5Oxud5YOemzT3Rh/mqZWUop+F3y6U5jAgMBAAECgYEArgZVPfKJerhQaYWrI/NBmF4lMI0q4/kepJ876fxMWK9muk8rmPg/M6mQown2dVrEt6XajZgHP2C/jNdLuENApq/fo/xA3tP9/XptWmeLHJQBaQwt70bgmY3frJFqVT5YzoZzn8hdL7oD6mBFnC4VJFTN6lpAZNYlr2zZurJZUQECQQD1/wllXUFSmvVTqg5owUMfsgnIefmOV7skq9gzdLbwcArdU9wmvLo9xYT4O+QOuwVLg0wB3nCokJcWBMCmyfiBAkEA5rpHW0XqQrH0/KxvbFPljHLCObZZXEG2+b3R61iwPk4unYCuBi5sOpdgCTEoMpEmMjBH2LVlxnh1mDuyiXf04wJAYYJ4vP9cN1xJRqKwF4IUE2pFSnxfGbdY7U5Y4vyuz1v6UoU9TPWedYHoFWXYHqavkKE47by4t3ipCwdTPkntAQJALo8+oQuNx2Gz511AquKPOvVZfl3u0HAuZV1JxC1Ee345Z+00sOijTHuJlLFHxFSIGa6mgPOyEwfx6wN49savMwJAEM3M3EXp7w7il4iM4Txlf5ijlz2hHjwJrvN1QgPGsEMjMs3o00u0LBVYDcCtToMRT4qg01+aajBfb4n7dhT85w==
-----END RSA PRIVATE KEY-----');

!defined('SRVRSA_PUBLIC_KEY') && define('SRVRSA_PUBLIC_KEY', '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDdtiJPVeC+UCsWHH/JXn931vDo1fhU8LM5n4bbOBzPLvsd1YT9XdqlN1YF6kecCWLcmr4cxHq4KcIRx9E3zqMPOhdOq/gNFgiZZZO49Bvz13mHQU/CGiPXbKAwqZfz9BCEO/Y/TEA8OAOTsbneWDnps090Yf5qmVlKKfhd8ulOYwIDAQAB
-----END PUBLIC KEY-----');

!defined('SRVRSA_PASSWD') && define('SRVRSA_PASSWD', 'iloveyylc');

!defined('MDHASH_KEY') && define('MDHASH_KEY', 'Iamsurewewouldsuccess');

!defined('PATH_PAYMENT_NETWORK_LOG') && define('PATH_PAYMENT_NETWORK_LOG', DIR_LOG . 'payment_network.log');

!defined('RATE_OF_OBLIGATION') && define('RATE_OF_OBLIGATION', 0.081);
!defined('RATE_OF_EAGLEEYED') && define('RATE_OF_EAGLEEYED', 0.0528);
!defined('RATE_OF_ROOKIE') && define('RATE_OF_ROOKIE', 0.2888);

!defined('RATE_OF_OVERDUE') && define('RATE_OF_OVERDUE', 0.003);

$config = array
	(
		'mysql' => array
			(
				'writable' => array
					(
						'host' => '127.0.0.1',
						'user' => 'root',
						'passwd' => '',
						'charset' => 'utf8',
						'dbname' => 'yylc'
					),
				'readonly' => array
					(
						array
							(
								'host' => '127.0.0.1',
								'user' => 'root',
								'passwd' => '',
								'charset' => 'utf8',
								'dbname' => 'yylc',
								'weight' => 10
							),
						array
							(
								'host' => '127.0.0.1',
								'user' => 'root',
								'passwd' => '',
								'charset' => 'utf8',
								'dbname' => 'yylc',
								'weight' => 2
							)
					)
			),
		'memcached' => array /* servers */
			(
				array /* server */
					(
						'127.0.0.1',/* ip */
						11211, /* port */
						10 /* weight */
					)
			),
		'cnlsecrets' => array
			(
				'ios' => '4ffa40ddde003dcbd76e442f59696743',
				'android' => '53bfc031aac9a661f8fa5358e1a157bc',
				'web' => '1612a455563855497d9175ff83cf3d46',
				// 2018-08-23,69豪车整合
				// 增加 69hc 约定秘钥
				'69hc'=> '92926a6f13cb8e6b181922d292dc7817',
			),
		'tester_ips' => array(
				'127.0.0.1' => 0,
				'116.231.159.96' => 0,
				'192.168.' => 8
			),
		'front_ips' => array(
				'127.0.0.1' => 0,
				'116.231.159.96' => 0,
			),
		'mdsms' => array /* sms channels */
			(
				array /* channel info */
					(
						'appkey' => '23336011',
						'secret' => 'efb1916e051911c9ae41ee1c1f424f50',
						'sign' => '鹰眼理财'
					),
				array // 2018-08-23,69豪车整合
					(
						'appkey' => '25040546',
						'secret' => '1186e047f0fb70e8e8556f467b5f86c8',
					)
			),
		'projcar' => array(
				'image_folder' => '/yylcsrv/images/projcar/',
				'image_web_root' => 'http://img.yylc.com/projcar/',
			),
		'upload' => array(
				'image_folder' => '/yylcsrv/api_center/entrance/useruploaded/',
				'image_web_entry' => '/useruploaded/',
			),
		'payment_fuiou' => array(
			'mchid' => '0002900F0096235',
			'mchkey' => '5old71wihg2tqjug9kkpxnhx9hiujoqj',
			'sslcert' => '/cacert/apiclient_cert.pem', //https 证书
			'sslkey' => '/cacert/apiclient_key.pem', //https 证书
			'reurl' => 'http://callback.eagleeyedfinance.com/fuiou/reurl', //重新支付 URL，重新支付时跳转到的商户页面地址
			'backurl' => 'http://callback.eagleeyedfinance.com/fuiou/backurl', //后台通知 URL，商户接收支付结果的后台通知地址
			'homeurl' => 'http://callback.eagleeyedfinance.com/fuiou/homeurl', //页面通知 URL，支付成功后跳转到的商户页面地址
			'timeout' => 30 //异步通知url，根据实际设定
			),
		'payment_fuiou_perpay' => array(
			'mchid' => '0002900F0345178',
			'mchkey' => '123456',
			'sslcert' => '/cacert/apiclient_cert.pem', //https 证书
			'sslkey' => '/cacert/apiclient_key.pem', //https 证书
			'timeout' => 30 //异步通知url，根据实际设定
			)
	);

$config['xtransfer'] = array(
	'url' => 'http://www.tester.com/x.php?method=',
	'key' => '39f845dcc8b2aa5ac16a9b1710d387a9',
	'iv' => 'xxnn32x60z668523',
	);

$config['email_notify'] = array(
	'email' => array(
		'host' => 'smtp.exmail.qq.com',
		'port' => 465,
		'secure' => 'ssl',
		'user' => '',
		'password' => '',
		'from' => '',
		'name' => '鹰眼理财测试平台',
	),
	'buyer_no_enough_money' => array (
		'to' => '',
		'cc' => ''
	),
	'seller_appointment' => array (
		'to' => '',
		'cc' => '',
	),
	'withdraw_tp' => array (
		'to' => '',
		'cc' => '',
	),
);
