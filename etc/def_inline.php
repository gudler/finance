<?php
/*
*/
if(!defined('DEF_INLINE')){
	define('DEF_INLINE', true);//
	define('SUPER_ADMIN', 112620);
	
	define('INVITE_STATUS_NORMAL', 0);//未投资
	define('INVITE_STATUS_INVESTED', 1);//已投资
	define('INVITE_STATUS_GENERATED', 2);//已产生利息
	define('INVITE_STATUS_PENDING', -1);//待付息
	define('INVITE_STATUS_DONE', -2);//已付息(结束)

	define('SYSACCOUNT_INVITE_INTEREST', -1001);//系统银行账号：邀请获利

	//用户账户操作
	define('USRACCOUNT_ACTION_RECHARGE', 1);//充值
	define('USRACCOUNT_ACTION_OBSELL', 2);//债权出售
	define('USRACCOUNT_ACTION_WITHDRAW_ROLLBACK', 3);//提现失败，余额回滚
	define('USRACCOUNT_ACTION_REPAYMENT', 4);//兑付本金利息
	define('USRACCOUNT_ACTION_ADD_LEFT_DMAMOUNT', 5);//给用户返回低于100豪的债权转让金额
	define('USRACCOUNT_ACTION_LARGE_AMT_RECHARGE', 60);//大额充值，2018-04-09 换成转账充值
	define('USRACCOUNT_ACTION_OFFLINE_RECHARGE', 6);//线下充值
	define('USRACCOUNT_ACTION_PAY_EARLY', 7);//提前结清
	define('USRACCOUNT_ACTION_PAY_INTEREST_IMMEDIATELY', 8);//提前结清支付利息
	define('USRACCOUNT_ACTION_WITHDRAW_TUIPIAO_ROLLBACK', 9);//提现退票，余额回滚
	define('USRACCOUNT_ACTION_INVITE_INTEREST', 11);//兑付返佣
	define('USRACCOUNT_ACTION_AWARD', 12);//奖励
	define('USRACCOUNT_ACTION_SIGN_BONUS', 13);//签到奖金
	define('USRACCOUNT_ACTION_PAYBACK_TRADEFEE', 21);//返还交易手续费
	define('USRACCOUNT_ACTION_PAYBACK_DEPOSIT', 22);//退保证金
	define('USRACCOUNT_ACTION_PAYBACK_LOAN', 23);//退贷款扣款
	define('USRACCOUNT_ACTION_OFFLINE_WITHDRAW_ROLLBACK', 35);//转账提现失败，余额回滚
	define('USRACCOUNT_ACTION_WITHDRAW', -1);//提现
	define('USRACCOUNT_ACTION_OBBUY', -2);//债权购买
	define('USRACCOUNT_ACTION_RETURN_LOAN', -3);//还贷款
	define('USRACCOUNT_ACTION_RETURN_LOAN_PIECE', -4);//还部分贷款
	define('USRACCOUNT_ACTION_OFFLINE_WITHDRAW', -5);//转账提现
	
	//账户类别与状态
	define('USRACCOUNT_STATUS_NORMAL', 0);//正常账户
	define('USRACCOUNT_STATUS_OFFLINE', 1);//非线上账户
	define('USRACCOUNT_STATUS_EGG', -1);//未绑卡用户
	
	//用户账户历史记录类型
	define('USRHIST_TYPE_BUY', 1);//购买
	define('USRHIST_TYPE_SELL', 2);//出售
	define('USRHIST_TYPE_DONE', 3);//结清
	define('USRHIST_TYPE_RECHARGE', 4);//充值
	define('USRHIST_TYPE_WITHDRAW', 5);//提现
	define('USRHIST_TYPE_RECHARGE_AND_WITHDRAW', 9);//充值与提现

	//用户还款条目状态 0:正常;1:已还;-1:已逾期;
	define('LOAN_REPAYMENT_STATUS_NORMAL', 0);//正常
	define('LOAN_REPAYMENT_STATUS_RETURNED', 1);//已还
	define('LOAN_REPAYMENT_STATUS_PAYEARLY', 2);//已提前结清
	define('LOAN_REPAYMENT_STATUS_OVERDUED', -1);//已逾期

	define('LOAN_INFO_STATUS_NORMAL', 0);//正常
	define('LOAN_INFO_STATUS_RETURNED', 1);//已结清
	define('LOAN_INFO_STATUS_ADVANCE_PAID', 2);//已提前结清
	define('LOAN_INFO_STATUS_OVERDUED', -1);//已逾期

	// define('USRHOLD_TYPE_ALL', 0);//所有债权
	// define('USRHOLD_TYPE_HOLDING', 1);//所持债权
	// define('USRHOLD_TYPE_SELLING', 2);//转让中债权
	// define('USRHOLD_TYPE_DONE', 3);//已结清债权
	// define('USRHOLD_TYPE_TRANSFERABLE', 4);//可转让债权

	// define('USRHOLD_CATE_ALL', 0);//所有分类
	// define('USRHOLD_CATE_EAGLEEYED', 1);//分类：鹰眼宝
	// define('USRHOLD_CATE_FASTENTRY', 2);//分类：易购宝
	// define('USRHOLD_CATE_DIRECT', 3);//分类：直接购买
	
	define('MSGTPL_OBLBUY_OK', 'oblbuy_ok');//消息模板：债权购买成功
	define('MSGTPL_OBLSELL_OK', 'oblsell_ok');//消息模板：债权转让成功
	define('MSGTPL_WITHDRAW_OK', 'withdraw_ok');//消息模板：提现成功
	define('MSGTPL_WITHDRAW_FAILED', 'withdraw_failed');//消息模板：提现失败
	define('MSGTPL_RECHARGE_OK', 'recharge_ok');//消息模板：充值成功
	define('MSGTPL_REPAYMENT_OK', 'repayment_ok');//消息模板：收益到账
	define('MSGTPL_PAYSIGNBONUS_OK', 'paysignbonus_ok');//消息模板：签到金到账
	define('MSGTPL_ROOKPRIN_OK', 'rookprin_ok');//消息模板：新人专享本金到账
	define('MSGTPL_PAYINVITER_OK', 'payinviter_ok');//消息模板：邀请奖励到账
	define('MSGTPL_PAY_BINDCARDINVITEE_OK', 'pay_bindcardinvitee_ok');//消息模板：被邀请注册绑卡奖励到账
	define('MSGTPL_PAY_BUYLONGINVITER_OK', 'pay_buylonginviter_ok');//消息模板：邀请成功奖励到账
	define('MSGTPL_LOAN_REPAYMENT_OK', 'loan_repayment_ok');//消息模板：还款成功
	define('MSGTPL_LOAN_REPAYMENT_PIECE_OK', 'loan_repayment_piece_ok');//消息模板：部分还款成功
	define('MSGTPL_LOAN_REPAYMENT_OK2', 'loan_repayment_ok2');//消息模板：还款成功2
	define('MSGTPL_LOAN_REPAYMENT_PIECE_OK2', 'loan_repayment_piece_ok2');//消息模板：部分还款成功2
	define('MSGTPL_LOAN_REPAYMENT_TIME_LESS_AMOUNT', 'loan_repayment_time_less_amount');//消息模板：还款将到期余额不足提醒
	define('MSGTPL_LOAN_REPAYMENT_TIME_OVERDUE', 'loan_repayment_time_overdue');//消息模板：还款逾期余额不足提醒
	define('MSGTPL_PAYBACK_TRADEFEE_OK', 'payback_tradefee_ok');//消息模板：返还手续费
	define('MSGTPL_OBL_PAIDEARLY', 'obl_paidearly');//消息模板：债权提前结清
	define('MSGTPL_OBL_PAIDEARLY_INTEREST', 'obl_paidearly_interest');//消息模板：债权提前结清
	define('MSGTPL_BUYER_NO_ENOUGH_MONEY', 'buyer_no_enough_money');//消息模板：中转账户余额不足
	define('MSGTPL_SELLER_APPOINTMENT', 'seller_appointment');//消息模板：用户债权转让预约
	define('MSGTPL_WITHDRAW_TP', 'withdraw_tp');//消息模板：提现退票
	
	/*＊
	 *	用户持有债权状态：
	 *	持有
	 *	售完
	 *	到期结清
	 */
	define('USROBL_STATUS_IN_HELD', 0);//持有
	define('USROBL_STATUS_SOLD', -1);//债权已售完
	define('USROBL_STATUS_DONE', 1);//债权到期结清

	define('TRADEFEE_PAYBACK_STATUS_NORMAL', 0);//未付
	define('TRADEFEE_PAYBACK_STATUS_PAID', 1);//已付

	define('INTEREST_STATUS_NORMAL', 0);//未付息
	define('INTEREST_STATUS_PERIOD_PAID', 1);//当期已付
	define('INTEREST_STATUS_BOUNS_PAID', 2);//奖励已付
	define('INTEREST_STATUS_WITHOUT_BOUNS', 3);//有出售无奖励
	define('INTEREST_STATUS_PAYEARLY', 4);//提前结清利息直接发放
	define('INTEREST_STATUS_MANUAL', -1);//人工处理

	define('OBL_REPAYEMNT_STATUS_NORMAL', 0);//信息录入
	define('OBL_REPAYEMNT_STATUS_PAID', 1);//已兑付
	define('OBL_REPAYEMNT_STATUS_PAID_EARLY', 2);//提前结清

	define('REPAY_DATES_STATUS_NORMAL', 0);//信息录入
	define('REPAY_DATES_STATUS_OBL_UPDATED', 1);//债权已更新
	define('REPAY_DATES_STATUS_OBL_PAID', 2);//债权已兑付

	define('USR_SIGN_STATUS_NORMAL', 0);//用户签到信息录入
	define('USR_SIGN_STATUS_PAID', 1);//用户签到奖励已兑付
	define('USR_SIGN_STATUS_FAILED', -1);//用户签到奖励失败
	

	//用户银行卡状态
	define('USRBANKACC_STATUS_NOTVALID', 1);//刚输入，未验证
	define('USRBANKACC_STATUS_VALID', 2);//已验证，可用
	define('USRBANKACC_STATUS_INVALID', 3);//验证未通过
	define('USRBANKACC_STATUS_EXPIRED', -2);//已过期
	define('USRBANKACC_STATUS_REMOVED', -1);//已删除
	define('USRBANKACC_STATUS_INUSE', 0);//使用中

	//银行卡状态
	define('BANK_CARD_OK', 0);//银行卡可用
	define('BANK_CARD_INVALID', -1);//无效的银行卡
	define('BANK_CARD_NOT_SUPPORT', 1);//不支持的银行卡
	define('BANK_CARD_TYPE_NOT_SUPPORT', -2);//不支持的卡类型

	define('BANK_CARD_TYPE_DEBIT_CARD', 1);//借记卡
	define('BANK_CARD_TYPE_CREDIT_CARD', 2);//信用卡
	define('BANK_CARD_TYPE_QUASI_CREDIT_CARD', 3);//准贷记卡
	define('BANK_CARD_TYPE_SPECIAL_CARD', 9);//专用卡
	define('BANK_CARD_TYPE_INVALID', -3);//非法卡号

	//充值状态
	define('RECHARGE_STATUS_ORDER_CREATED', 0);//开放
	define('RECHARGE_STATUS_CANCELED', -1);//已取消
	define('RECHARGE_STATUS_EXPIRED', -2);//已过期
	define('RECHARGE_STATUS_NOT_EXISTS', -3);//对方系统内不存在
	define('RECHARGE_STATUS_PAY_FAILED', -4);//支付失败
	define('RECHARGE_STATUS_FAILED', -5);//失败
	define('RECHARGE_STATUS_PAID', 1);//已支付
	define('RECHARGE_STATUS_DONE', 2);//完成

	define('OFFLINE_RECHARGE_STATUS_ORDER_CREATED', 0);//开放
	define('OFFLINE_RECHARGE_STATUS_NOTICE_PAID', 1);//告知我司已支付
	define('OFFLINE_RECHARGE_STATUS_NOTICED_LOCAL_SRV', 2);//已通知内部服务器
	define('OFFLINE_RECHARGE_STATUS_PAID_VERIFIED', 3);//已验证
	define('OFFLINE_RECHARGE_STATUS_IN_PROCESS', 4);//服务器处理充值数据中
	define('OFFLINE_RECHARGE_STATUS_DONE', 100);//充值完成
	define('OFFLINE_RECHARGE_STATUS_FAILD', -1);//失败
	define('OFFLINE_RECHARGE_STATUS_CASE_NOT_FOUND', -2);//未查到充值记录
	define('OFFLINE_RECHARGE_COMM_STATUS_IN_PROCESS', 4);
	define('OFFLINE_RECHARGE_COMM_STATUS_FINISHED', 100);
	define('OFFLINE_RECHARGE_COMM_STATUS_TYPE_NOT_ALLOWED', -10);
	define('OFFLINE_RECHARGE_COMM_STATUS_NOT_EXISTS', -11);
	define('OFFLINE_RECHARGE_COMM_STATUS_MOBILE_NOT_REGISTER', -12);
	define('OFFLINE_RECHARGE_COMM_STATUS_VERIFY_FAILED', -13);
	define('OFFLINE_RECHARGE_COMM_STATUS_FAILED', -14);
	define('OFFLINE_RECHARGE_COMM_STATUS_MONEY_ERROR', -15);
	
	//充值订单状态
	define('RECHARGE_ORDER_OK', 0);//订单已支付
	define('RECHARGE_ORDER_NOT_EXISTS', -1);//订单不存在
	define('RECHARGE_ORDER_EXPIRED', -2);//订单已过期
	define('RECHARGE_ORDER_PAY_FAILED', -3);//订单支付失败


	//提现状态
	define('WITHDRAW_STATUS_ORDER_CREATED', 0);//开放
	define('WITHDRAW_STATUS_CANCELED', -1);//已取消
	define('WITHDRAW_STATUS_FAILED', -2);//提现失败
	define('WITHDRAW_STATUS_ACCOUNT_ROLLBACK', 1);//账号提现失败，余额已回滚
	define('WITHDRAW_STATUS_DONE', 2);//完成
	define('WITHDRAW_STATUS_TUIPIAO_ROLLBACK', 3);//提现退票，余额回滚

	//提现订单状态
	define('WITHDRAW_ORDER_OK', 0);//订单已支付
	define('WITHDRAW_ORDER_NOT_EXISTS', -1);//订单不存在
	define('WITHDRAW_ORDER_EXPIRED', -2);//订单已过期
	define('WITHDRAW_ORDER_PAY_FAILED', -3);//订单支付失败

	define('WITHDRAW_BANKINFO_CREATED', 0);//补充信息新生产
	define('WITHDRAW_BANKINFO_CONFIRMED', 1);//补充信息已确认
	define('WITHDRAW_BANKINFO_EXPIRED', -1);//补充信息已过期
	
	//提现退票状态
	define('WITHDRAW_TUIPIAO_CREATED', 0);//退票订单新创建
	define('WITHDRAW_TUIPIAO_ILLEGAL', -1);//退票订单非法
	define('WITHDRAW_TUIPIAO_CONFIRMED', 1);//退票订单已确认
	define('WITHDRAW_TUIPIAO_DONE', 2);//退票订单已完成

	//债权状态
	define('OBL_STATUS_OPEN', 0);//开放
	define('OBL_STATUS_SOLDOUT', -1);//售空
	define('OBL_STATUS_CLOSED', -2);//关闭
	define('OBL_STATUS_DONE', 1);//完成

	define('OBL_SYSTEM_UID', 1);//将系统看成一个用户，其UID为1

	//自动处理队列状态
	define('AUTO_PROCESS_STATUS_NORMAL', 0);//交易待处理
	define('AUTO_PROCESS_STATUS_DONE', 1);//交易成功
	define('AUTO_PROCESS_STATUS_CANCEL', -1);//交易取消

	//用户性别
	define('USER_GENDER_MALE', 1);//男性
	define('USER_GENDER_FEMALE', 0);//女性
	define('USER_GENDER_SECRET', 10);//保密

	//等额本息、等额本金、到期还本付息、到期还本每月付息
	define('REPAYMENT_PRINCIPAL_AND_INTEREST_EQUAL', 1);//等额本息
	define('REPAYMENT_EQUAL_PRINCIPAL', 2);//等额本金
	define('REPAYMENT_PRINCIPAL_AND_INTEREST_AT_MATURITY', 3);//到期还本付息
	define('REPAYMENT_PRINCIPAL_AT_MATURITY_REGULAR_INTEREST_PAYMENT', 4);//到期还本按期付息

	define('UOB_SELLING_YES', 1);//用户债权出售中
	define('UOB_SELLING_NO', 0);//用户债权不出售

	define('UOB_INOUT_NOCHANGE', 0);
	define('UOB_INOUT_BUY', 1);
	define('UOB_INOUT_SELL', -1);
	define('UOB_INOUT_REPAYMENT', -2);

	define('SMS_CODE_TYPE_REG', 'reg');
	define('SMS_CODE_TYPE_RESET_LOGINPW', 'reset_loginpw');
	define('SMS_CODE_TYPE_RESET_PAYPW', 'reset_paypw');
	define('SMS_CODE_TYPE_WITHDRAW', 'withdraw');
	define('SMS_CODE_TYPE_INFOCHG', 'infochange');
	define('SMS_CODE_TYPE_CARDMOBICHG', 'cardmobichange');
	define('SMS_CODE_TYPE_OFFLINE_RECHARGE', 'offline_recharge');
	define('SMS_CODE_TYPE_CHANGE_CARD', 'change_card');
	define('SMS_CODE_TYPE_BIND_OFFLINE_CARD', 'bind_offline_card');


	define('TRADE_FREQ_LIMIT_TIMES', 3);//交易频率限制，次数
	define('TRADE_FREQ_LIMIT_SEC', 30);//交易频率限制，时常
	define('TRADE_INQUEUE_COUNT_LIMIT', 5);//交易队列长度限制
	define('TRADE_INQUEUE_AMOUNT_RATE_LIMIT', 1);//交易队列金额比例限制，1表示等额限制，2表示2倍放大限制
	define('TRADE_OBL_AMOUNT_LIMIT_MIN', 200*10000);//单次债权交易最小金额限制 200元 * 10000基数单位
	define('TRADE_OBL_AMOUNT_LIMIT_MAX', 1000000000*10000);//单次债权交易最大金额限制 1,000,000,000元 * 10000基数单位
	define('TRADE_ROOKIE_AMOUNT_LIMIT_MIN', 100*10000);//新手体验交易最小金额限制 100元 * 10000基数单位
	define('TRADE_ROOKIE_AMOUNT_LIMIT_MAX', 2500*10000);//新手体验交易最大金额限制 666元 * 10000基数单位
	define('TRADE_EAGLEEYED_AMOUNT_LIMIT_MIN', 100*10000);//鹰眼宝交易最小金额限制 100元 * 10000基数单位
	define('TRADE_FAST_ENTRY_AMOUNT_LIMIT_MIN', 200*10000);//易购宝交易最小金额限制 200元 * 10000基数单位
	define('TRADE_QUEUE_EAGLEEYED_AMOUNT_USER_CAP', 500000*10000);//当债权售完后，鹰眼宝队列每个用户金额限制 1,000,000元 * 10000基数单位
	define('TRADE_QUEUE_EAGLEEYED_AMOUNT_TOTAL_CAP', 10000000*10000);//当债权售完后，鹰眼宝队列总金额限制 10,000,000元 * 10000基数单位
	define('TRADE_QUEUE_FAST_ENTRY_AMOUNT_USER_CAP', 10000000*10000);//当债权售完后，易购宝队列每个用户金额限制 100,000,000元 * 10000基数单位
	define('TRADE_QUEUE_FAST_ENTRY_AMOUNT_TOTAL_CAP', 10000000*10000);//当债权售完后，易购宝队列总金额限制 100,000,000元 * 10000基数单位
	define('TRADE_QUEUE_ROOKIE_AMOUNT_INQUEUE_CAP', 20000*10000);//当债权售完后，新人专享队列总金额限制 20,000元 * 10000基数单位
	define('TRADE_QUEUE_ROOKIE_AMOUNT_TOTAL_CAP', 50000*10000);//当日新人专享总金额限制 50,000元 * 10000基数单位

	define('TRADE_AUTOSHIFT_AMOUNT_LIMIT_MIN', 10*10000);//自动转投最低金额限制 10元 * 10000基数单位

	define('AUTO_UP_OBL_MIN_LEFT_AMT', 200*10000*10000);//自动上债权程序限额，200万元
	// 2018-05-10,从10元修改成100元
	define('AUTOBUYER_SELL_AMOUNT_LIMIT_MIN', 100*10000);//自动购买卖出账号账号内锁定金额限制，100元

	define('LIMIT_ACC_SAME_USER', 3);//同账号最多账户限制
	
	define('RECHARGE_LIMIT_MIN', 100*100);//最小充值金额限制 100元 * 100单位分
	define('RECHARGE_LIMIT_MAX', 50000*100);//最高充值金额限制 50,000元 * 100单位分
	define('OFFLINE_RECHARGE_LIMIT_MIN', 1*100);//最小转账金额限制 1元 * 100单位分
	define('OFFLINE_RECHARGE_LIMIT_MAX', 20000000*100);//最高转账金额限制 20,000,000元 * 100单位分
	
	define('WITHDRAW_LIMIT_MIN', 100*100);//单次最小提现金额限制 100元 * 100单位分
	define('WITHDRAW_LIMIT_MAX', 500000*100);//单次最高提现金额限制 500,000元 * 100单位分
	define('WITHDRAW_LIMIT_TODAY_TOTAL_MAX', 500000*100);//当日最高提现金额限制 500,000元 * 100单位分
	define('WITHDRAW_LIMIT_MONTH_TOTAL_MAX', 2000000*100);//当月最高提现金额限制 2,000,000元 * 100单位分

	define('WITHDRAW_LIMIT_FEE_FREE_TIMES', 2);//当月最高免费提现次数
	define('WITHDRAW_FEE', 2*100);//提现手续费 2元 * 100单位分

	define('TRADE_CACHE_OBLI_TIMEOUT', 300);//债权信息缓存时间
	
	/*状态: 0, 待处理; 1, 交易成功; -1, 交易失败;  -11, 交易失败，用户余额不足; -12, 交易失败，债权余额不足; -13, 交易失败，数据出错。*/
	define('TRADE_STATUS_NORMAL', 0);//交易待处理
	define('TRADE_STATUS_PROCESSOR_LOCKED', 9);//处理器锁定交易，进行处理中
	define('TRADE_STATUS_DONE', 1);//交易成功
	define('TRADE_STATUS_DONE_LESS_AMOUNT', 2);//交易成功，但金额为债权余额
	define('TRADE_STATUS_FAILED', -1);//交易失败，原因未知
	define('TRADE_STATUS_FAILED_USER_AMOUNT_SHORT', -11);//交易失败，用户余额不足
	define('TRADE_STATUS_FAILED_OBL_AMOUNT_SHORT', -12);//交易失败，债权余额不足
	define('TRADE_STATUS_FAILED_DB_ERROR', -13);//交易失败，数据出错
	define('TRADE_STATUS_FAILED_OBL_SOLDOUT', -14);//交易失败，债权售空
	define('TRADE_STATUS_FAILED_OBL_HOLD_SOLDOUT', -15);//交易失败，对方所持债权售空
	define('TRADE_STATUS_CANCELED', -2);//交易取消
	define('WITHDRAW_STATUS_NOT_EXISTS', -999);//交易不存在

	define('TRADE_VIA_DIRECT_BUY_OBLIGATION', 1);//直接通过购买债权购买产品
	define('TRADE_VIA_EAGLEEYED', 2);//通过鹰眼宝购买产品
	define('TRADE_VIA_FAST_ENTRY', 3);//通过易购宝购买产品
	define('TRADE_VIA_AUTOSHIFT_EAGLEEYED', 4);//通过自动转投鹰眼宝购买产品
	define('TRADE_VIA_AUTOSHIFT_FAST_ENTRY', 5);//通过自动转投易购宝购买产品
	define('TRADE_VIA_AMOUNT_SHIFT', 6);//通过余额转投易购宝购买产品
	define('TRADE_VIA_ROOKIE', 11);//通过新人专享购买产品

	define('KEY_VIA_TYPE_DIRECT', 'direct');//直接购买
	define('KEY_VIA_TYPE_EAGLEEYED', 'eagleeyed');//鹰眼宝
	define('KEY_VIA_TYPE_FAST_ENTRY', 'fast_entry');//易购宝
	define('KEY_VIA_TYPE_OTHER', 'other');//其它

	define('TRADE_AUTOSHIFT_NONE', 0);//自动转投无
	define('TRADE_AUTOSHIFT_EAGLEEYED', 2);//自动转投鹰眼宝
	define('TRADE_AUTOSHIFT_FAST_ENTRY', 3);//自动转投易购宝
	
	define('TRADE_FAST_ENTRY_MAX_PERIOD', 36);//易购宝最长封闭期

	//债权标签定义
	define('OBL_LABLE_BUY_ALL_PERIOD', 'BUY_ALL_PERIOD');//债权标签：可买断

	//PUSH 消息常量定义
	define('APP_VIEW_METHOD_INNERVIEW', 'innerview');//视图：app内页
	define('APP_VIEW_METHOD_WEBVIEW', 'webview');//视图：web页
	
	define('APP_PUSH_STATUS_NORMAL', 0);//消息状态：正常
	define('APP_PUSH_STATUS_SENT', 1);//消息状态：已发送
	define('APP_PUSH_STATUS_CLICKED', 2);//消息状态：已点击
	define('APP_PUSH_STATUS_FAILED', -1);//消息状态：发送失败

	define('APP_PUSH_TYPE_NORMAL', 2);
	define('APP_PUSH_SOUND_NORMAL', 'defalut');

	define('APP_INNERVIEW_ACCOUNT', 'account');//账户管理页面
	define('APP_INNERVIEW_BINDCARD', 'bindCard');//绑定银行卡页面
	define('APP_INNERVIEW_EAGLEEYED', 'eagleEyed');//鹰眼宝详情页面
	define('APP_INNERVIEW_FASTENTRY', 'fastEntry');//易购宝(快速通道)详情页面
	define('APP_INNERVIEW_HELDLIST', 'heldList');//持有债权列表页面
	define('APP_INNERVIEW_INQUEUELIST', 'inQueueList');//排队列表页面
	define('APP_INNERVIEW_INVITEFRIENDS', 'inviteFriends');//邀请好友页面
	define('APP_INNERVIEW_LOGIN', 'login');//登录页面
	define('APP_INNERVIEW_MESSAGELIST', 'messageList');//消息列表页面
	define('APP_INNERVIEW_MINE', 'mine');//我的页面
	define('APP_INNERVIEW_OBLIGATIONDETAIL', 'obligationDetail');//债权详情页面
	define('APP_INNERVIEW_OBLIGATIONLIST', 'obligationList');//债权列表页面
	define('APP_INNERVIEW_RECOMMEND', 'recommend');//推荐页面
	define('APP_INNERVIEW_ROOKIE', 'rookie');//新人专享详情页面
	define('APP_INNERVIEW_TRADERECORDLIST', 'tradeRecordList');//交易记录列表页面
	// 同步APP端的定义
	define('APP_INNERVIEW_CHANGEPASSWORD', 'changepassword');//修改交易密码页面
	define('APP_INNERVIEW_CHANGELOGPASSWORD', 'changeLogpassword');//修改登录密码页面
	define('APP_INNERVIEW_CALCULATOR', 'calculator');//理财计算器页面
	define('APP_INNERVIEW_INTRODUCE', 'introduce');//平台介绍页面
	// 新定义
	define('APP_INNERVIEW_SHARE', 'share');//通用分享页面 share?id=20171031121212&url=http://www.xxxx.com
	
	// 邀请者奖励支付状态定义
	define ('INVITER_BONUS_REPAYMENT_STATUS_NORMAL',0); // 记录创建，未支付状态
	define ('INVITER_BONUS_REPAYMENT_STATUS_PAID',1); // 已经支付
	define ('INVITER_BONUS_REPAYMENT_STATUS_FAILED',-1); // 支付失败
	

	// 定义新邀请活动常量
	define ('EVENT_NEW_INVITE_START_TIME','2017-12-09 00:00:00');
	define ('EVENT_NEW_INVITE_END_TIME','2019-12-09 00:00:00');
	// 计划上线债权状态
	define('OBL_PLAN_STATUS_NORMAL', 0);//正常
	define('OBL_PLAN_STATUS_DONE', 1);//已经上线
	define('OBL_PLAN_STATUS_FAILED', -1);//上线失败

	// 买入交易时间
	!defined('TRANSACTION_OPEN_HOUR') && define('TRANSACTION_OPEN_HOUR', 8);
	!defined('TRANSACTION_CLOSE_HOUR') && define('TRANSACTION_CLOSE_HOUR', 23);
	// 债权卖出交易时间
	!defined('TRANSACTION_SELL_OPEN_TIME') && define('TRANSACTION_SELL_OPEN_TIME', '09:00:00');
	!defined('TRANSACTION_SELL_CLOSE_TIME') && define('TRANSACTION_SELL_CLOSE_TIME', '16:30:00');

	// Banner状态 2018-03-13 
	define('BANNER_STATUS_NORMAL', 0);//正常
	define('BANNER_STATUS_DOWN', -1);//已经下线，不显示
	// Banner位置定义 2018-03-13
	define('BANNER_POSITION_APP_STARTUP', 'app_startup'); //APP启动页面
	define('BANNER_POSITION_APP_HOME', 'app_home'); //APP首页
	define('BANNER_POSITION_APP_OBLIGATION', 'app_obligation'); //APP债权理财页面
	define('BANNER_POSITION_WEB_HOME', 'web_home'); //官网首页
	// 邮件通知状态定义 2018-04-25
	define('EMAIL_NOTIFY_STATUS_NORMAL', 0);//邮件通知状态：正常
	define('EMAIL_NOTIFY_STATUS_SENT', 1);//邮件通知状态：已发送
	define('EMAIL_NOTIFY_STATUS_FAILED', -1);//邮件通知状态：发送失败

	// 用户债权转让预约功能 2018-05-15
	define('SYS_FEATURE_USER_SELL_APPOINTMENT',1);//启用标志
	define('USER_SELL_APPOINTMENT_AMOUNT_LIMIT',500000*1000);//债权转让金额条件，单笔或者单次之和超过50W
	define('SELLING_CHANNEL_NORMAL',0); //卖出正常通道
	define('SELLING_CHANNEL_APPOINTMENT',1);//卖出预约通道
	// selling_channel_queue status 定义
	define('SCQ_STATUS_NORMAL',0);//正常状态
	define('SCQ_STATUS_DONE',1);//完成状态
	define('SCQ_STATUS_FAILED',-1);//失败状态

	// 2018-08-23,69豪车整合
	define('APP_DEFAULT','');//确省APP定义，按鹰眼理财处理
	define('APP_YYLC','yylc');//鹰眼理财APP定义
	define('APP_69HC','69hc');//69豪车APP定义

}
