<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper singleProductPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <?php echo $this->fetch('library/page_menu.lbi'); ?>
    
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
    
    
    <form id="shoppingCartWrapper" class="shoppingCartWrapper" action="#" method="post">
      <fieldset>
        
        <div class="shoppingCartProductWrapper"> <a  href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-1.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜品</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-1" class="shoppingCartProductNumber" name="product-1" value="1">
              <span class="shoppingCartProductPrice">￥25</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-2.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜品</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-2" class="shoppingCartProductNumber" name="product-2" value="2">
              <span class="shoppingCartProductPrice">￥50</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a  href="singleProduct.html" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-3.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="singleProduct.html" class="shoppingCartProductTitle">微茜甜品III</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-3" class="shoppingCartProductNumber" name="product-3" value="1">
              <span class="shoppingCartProductPrice">￥110</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartInfoWrapper"> <span class="shoppingCartProductsNumber">购物车:3件产品</span> <span class="shoppingCartProductsTotal">总共: ￥185</span> </div>
        
        
        <div class="shoppingCartButtonsWrapper"><a href="" class="shoppingCartEmptyButton">清空购物车</a>
          <a href="" class="shoppingCartEmptyButton">更新购物车</a>
          <input type="button" value="去付款" onclick="javascript:window.location.href='checkout.html' "  class="shoppingCartCheckoutButton">
        </div>
      </fieldset>
    </form>
     
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> <a href="login.html" class="accountButton"></a><a href="" class="shoppingCartButton"></a><a href="" class="mainMenuButton"></a></div>
    </div>
     
    
    
    <div class="pageContentWrapper"> 
      
      
      <h3 class="pageTitle" style="margin-top:20px;"><?php echo $this->_var['goods']['goods_style_name']; ?></h3>
       
      
      
      <div class="singleProductGalleryWrapper">
        <div class="singleProductGallery"> 
          <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="singleProductGalleryItem currentSingleProductGalleryItem" alt="<?php echo $this->_var['goods']['goods_name']; ?>"> 
          <?php if ($this->_var['pictures']): ?> 
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
          <?php if ($this->_foreach['no']['iteration'] > 1): ?>
          <img src="<?php echo $this->_var['picture']['img_url']; ?>" class="singleProductGalleryItem" alt="<?php echo $this->_var['picture']['img_desc']; ?>"> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?>
        </div>
        <ul class="singleProductGalleryMenu">
          <li class="currentSingleProductGalleryMenuItem"><a href="<?php echo $this->_var['goods']['goods_img']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a></li>

          <?php if ($this->_var['pictures']): ?> 
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
          <?php if ($this->_foreach['no']['iteration'] > 1): ?>
          <li><a href="#"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['picture']['img_desc']; ?>" /></a></li>
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?>
        </ul>
      </div>
      
      
      <div class="pageBreak"></div>

      <div class="drop-downWrapper">
        <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?>
       <span class="drop-downText" data-label="选择口味">选择口味</span>

        <div class="drop-downItemsWrapper"> 
           
          <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
          <?php if ($this->_var['cfg']['GOODSATTR_STYLE'] == 1): ?> 
          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
          <input type="hidden" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
          <span for="spec_value_<?php echo $this->_var['value']['id']; ?>" class="drop-downItem" data-value=""><?php echo $this->_var['value']['label']; ?></span>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?> 
              <?php else: ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</label>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?> 
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

      <div class="drop-downWrapper"> <span class="drop-downText" data-label="选择数量">选择数量</span>
        <div class="drop-downItemsWrapper">
        <span class="drop-downItem" data-value="1">1</span>
        <span class="drop-downItem" data-value="2">2</span>
        <span class="drop-downItem" data-value="3">3</span>
        <span class="drop-downItem" data-value="4">4</span>
        <span class="drop-downItem" data-value="6">6</span>
        <span class="drop-downItem" data-value="8">8</span>
        <span class="drop-downItem" data-value="10">10</span> </div>
        <input type="hidden" name="drop-downField" class="drop-downField" value="all">
      </div>
      

      <div class="goods-num"> <span class="pull-left"><?php echo $this->_var['lang']['number']; ?>：</span> 
        <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
        <div class="input-group pull-left wrap"><span class="input-group-addon sup" onClick="changePrice('1')">-</span>
          <input type="text" class="form-contro form-num"  name="number" id="goods_number" autocomplete="off" value="1" onFocus="back_goods_number()"  onblur="changePrice('2')"/>
          <span class="input-group-addon plus" onClick="changePrice('3')">+</span></div>
        <?php else: ?>
        <input type="text" class="form-contro form-num" readonly value="<?php echo $this->_var['goods']['goods_number']; ?> "/>
        <?php endif; ?> 
      </div>

      <a href="javascript:addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)" class="singleProductPurchaseButton">(
        <?php echo $this->_var['goods']['shop_price_formated']; ?> 
        )<?php echo $this->_var['lang']['buy_now']; ?></a> 
      <a href="javascript:void(0)" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT' class="singleProductPurchaseButton">添加到收藏</a> 
      
      <div class="accordionWrapper"> 
        
        <div class="accordionItemWrapper"> <a href="" class="accordionButton"><span class="accordionButtonIcon"></span><span class="accordionButtonTitle">详细信息</span></a>
          <div class="accordionContentWrapper">
          <p>test test test关于提拉米苏的由来，有一个温馨的故事：二战时期，一个意大利士兵要出征了，可是家里已经什么都没有了</p>
        </div>
         
      </div>
       
    </div>
    
    
  </div>
  <div class="footerDecoration"></div>
    
     <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
     
</div>


<script type="text/javascript" src="__TPL__/js/lefttime.js"></script> 
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){Code.photoSwipe('a', '#Gallery');}, false);


/*倒计时*/
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;
var use_how_oos = <?php echo C('use_how_oos');?>;
onload = function(){
  changePrice(2);
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
function back_goods_number(){
 var goods_number = document.getElementById('goods_number').value;
  document.getElementById('back_number').value = goods_number;
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(type)
{
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  if(type == 1){qty--;}
  if(type == 3){qty++;}
  if(qty <=0 ){qty=1;}
  if(!/^[0-9]*$/.test(qty)){qty = document.getElementById('back_number').value;}
  document.getElementById('goods_number').value = qty;
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  $.get('<?php echo url("goods/price");?>', {'id':goodsId,'attr':attr,'number':qty}, function(data){
    changePriceResponse(data);
  }, 'json');
}


/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/*判断user-tab是否距顶，距顶悬浮*/
var nav_tabs_top = $(".user-tab .nav-tabs").offset().top;//获取nav-tabs距离顶部的位
function func_scroll(){//定义一个事件效果置
  var documentTop = $(document).scrollTop();//获取滚动条距离顶部距离
  if(nav_tabs_top <= documentTop){
    $(".user-tab").addClass("user-tab-fixed");
    $("#is-nav-tabs").css("display","block");
  }else{
    $(".user-tab").removeClass("user-tab-fixed");
    $("#is-nav-tabs").css("display","none");    
  }
}

window.onscroll = function () {
   func_scroll();
}
</script> 
<script type="text/javascript">
        TouchSlide({ 
          slideCell:"#picScroll",
          titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
          autoPage:"true", //自动分页
          pnLoop:"false", // 前后按钮不循环
          switchLoad:"_src" //切换加载，真实图片路径为"_src" 
        });
      </script>
</body>
</html>

