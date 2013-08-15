<?php $page = "start" ?>
<?php $title="支付页"?>
<?php include("../common/order-meta.php"); ?>
</head>
<body class="order cnbtn">
<?php include("../common/order-header.html"); ?>


<div class="wrap">
    <!-- 操作步骤 -->
    <ol class="ui-step ui-step-3">
        <li class="ui-step1 ui-step-start">
            <div class="ui-step-arrow">
                <i class="arrow_r1"></i>
                <i class="arrow_r2"></i>
            </div>
            <span class="ui-step-text">1.填写订单信息</span>
        </li>
        <li class="ui-step2 ui-step-active">
            <div class="ui-step-arrow">
                <i class="arrow_r1"></i>
                <i class="arrow_r2"></i>
            </div>
            <span class="ui-step-text">2.选择付款方式付款</span>
        </li>
        <li class="ui-step3 ui-step-end">
            <div class="ui-step-arrow">
                <i class="arrow_r1"></i>
                <i class="arrow_r2"></i>
            </div>
            <span class="ui-step-text">3.预订成功</span>
        </li>
    </ol> <!-- //操作步骤 -->
    
    
    <div class="order-main border">
        <div class="main">
            <div class="hr_a"></div>
            <div class="c-title">
                <h3>您预订：东方明珠广播电视塔二球、上海历史发展陈列馆【亲子/家庭 套票】</h3>
                <div class="total-price">
                    <span class="price-num"><dfn>459080</dfn> 元</span>
                    <strong>订单金额：</strong>
                </div>
            </div>
            
            <!-- 订单列表 -->
            <div class="order-list hide">
                <div class="dot_line"></div>
                
                <!-- 订单信息 -->
                <div class="c-title"><h4>订单信息</h4></div>
                <table class="table-full order-buy">
                    <thead>
                        <tr>
                            <th>订单号</th>
                            <th>游玩日期</th>
                            <th>游玩人数</th>
                            <th>产品信息</th>
                        </tr>
                    </thead>
                    <tbody class="table-vtop">
                        <tr>
                            <td>5201236</td>
                            <td>2013-6-21</td>
                            <td>2</td>
                            <td>
                                <p>万盛黑山谷生态旅游区门票成人票&nbsp;&nbsp;<span class="num"><dfn>&yen;270</dfn>&times;<i class="price">1</i></span></p>
                                <p>万盛黑山谷生态旅游区门票儿童票&nbsp;&nbsp;<span class="num"><dfn>&yen;130</dfn>&times;<i class="price">1</i></span></p>
                                <p>平安国内长途10日游意外险（特惠型）(国内)&nbsp;&nbsp;<span class="num"><dfn>&yen;35</dfn>&times;<i class="price">2</i></span></p>
                                <p>全场满500减20优惠券&nbsp;&nbsp;<span class="num save-price"><dfn>- &yen;<b>50</b></dfn></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- //订单列表 -->
            
        </div> <!-- //.main -->
            
        <!-- 支付方式 -->
        <div class="lightbox paybox clearfix">
            <span class="view-details">
                订单详情<i class="arrow"></i>
            </span>
            <span class="timebox">
                剩余付款时间：<b class="countdown red">44分22秒</b>
            </span>
            <div class="paytips">
                <h3>友情提示</h3>
                <p>您的预订信息已提交，请在 <b class="red">2012-07-30 12:00</b> 前完成付款，否则系统将自动取消您的订单。</p>
            </div>
            <div class="dot_line"></div>
            
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用驴妈妈存款账户余额</label></div>
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用驴妈妈储值卡</label></div>
            <div class="check-text"><label class="checkbox inline"><input class="input-checkbox" name="ownpro" type="checkbox">使用奖金账户余额</label> <small>可使用<b>50</b>元</small></div>
            
            
            <!-- 选择支付方式 -->
            <div class="payment form-inline">
                <div class="pay-title ui-tab-trigger">
                    <h4 class="pay-price">您还需继续付款 <dfn><i>4100</i></dfn> 元</h4>
                    <ul class="tabnav clearfix">
                    	<li class="selected"><a href="javascript:;">支付平台</a></li>
                    	<li><a href="javascript:;">其他方式</a></li>
                    </ul>
                </div>
                <div class="tab-switch payment-list">
                    <div class="tabcon">
<!-- 下面列表供参考使用
现提供以下标识对应关系：
如不存在标识，则取其官网域名为标识，若是银行则用大写字母

如：支付宝官网为alipay.com取alipay
    中国工商银行 取 ICBC
若为快捷支付，添加 -quick 后缀，如：.ABC-quick
若为信用卡，添加 -credit 后缀，如：.CMB-credit


.alipay     支付宝    
.shengpay   盛付通 
.tenpay     财付通
.cmpay      手机支付
.unionpay   银联支付
.lakala     拉卡拉

.ABC        中国农业银行
.BJBANK     北京银行
.BJRCB      北京农村商业银行
.BOC        中国银行
.BOSH       
.CCB        中国建设银行
.CEB        中国广大银行
.CGB        广发银行
.CIB        兴业银行 
.CITIC      
.CMB        招商银行
.CMBC       中国民生银行
.COMM       交通银行
.DBSCN    
.ECITIC     中信银行  
.FUDIAN     富滇银行
.GDB        
.HSBC       
.HXBANK         
.ICBC       中国工商银行
.JSBANK
.KLB
.NBCB       宁波银行
.HZBANK     杭州银行
.NJCB       南京银行 
.PSBC       中国邮政储蓄银行
.PINGAN     平安银行
.SDB        
.SHBANK     上海银行
.SJBANK     
.SPABANK    
.SPDB       浦发银行
.WZCB       温州银行

-->
                        <ul class="bank-list clearfix">
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank alipay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                        </ul>
                        <div class="dot_line"></div>
                        <ul class="bank-list clearfix">
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank alipay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                            <li><label class="radio inline"><input class="input-radio" name="bankpay" type="radio"><i class="icon-bank shengpay"></i></label></li>
                        </ul>
                    </div>
                    <div class="tabcon">
                        
                    </div>
                </div>
                <div class="order-btn"><button class="btn btn-big btn-orange">&nbsp;&nbsp;&nbsp;&nbsp;下一步&nbsp;&nbsp;&nbsp;&nbsp;</button></div>
            </div> <!-- //选择支付方式 -->
            
        </div> <!-- //支付方式 -->
        
    </div>
    
    
</div>

<?php include("../common/order-footer.php"); ?>

</body>
</html>