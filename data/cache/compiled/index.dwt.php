<?php echo $this->fetch('library/page_header.lbi'); ?>
    
    <div class="websiteWrapper">
      
      <div class="pageWrapper homePageWrapper">
        
        <div class="mainMenuOuterWrapper">
          
          <ul class="mainMenuWrapper">
            <li class="currentPage">
              <a href="index.php">
                首页
              </a>
            </li>
            <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?> 
            <li>
              <a href="<?php echo $this->_var['nav']['url']; ?>">
                <?php echo $this->_var['nav']['name']; ?>
              </a>
            </li>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          
          <div class="mainMenuBottomDecoration">
          </div>
        </div>
        
        
        <form id="shoppingCartWrapper" class="shoppingCartWrapper" action="#"
        method="post">
          <fieldset>
            
            <div class="shoppingCartProductWrapper">
              <a href="singleProduct.html" class="shoppingCartProductImageWrapper">
                <img src="__TPL__/images/content/shoppingCartProductImage-1.jpg" class="shoppingCartProductImage"
                alt="">
              </a>
              <div class="shoppingCartProductInfoWrapper">
                <a href="singleProduct.html" class="shoppingCartProductTitle">
                  微茜糕点
                </a>
                <div class="shoppingCartProductButtonsWrapper">
                  <input type="text" id="shoppingCartProductNumber-1" class="shoppingCartProductNumber"
                  name="product-1" value="1">
                  <span class="shoppingCartProductPrice">
                    ￥25
                  </span>
                  <a href="" class="shoppingCartRemoveProductButton">
                  </a>
                </div>
              </div>
            </div>
            
            
            <div class="shoppingCartProductWrapper">
              <a href="singleProduct.html" class="shoppingCartProductImageWrapper">
                <img src="__TPL__/images/content/shoppingCartProductImage-2.jpg" class="shoppingCartProductImage"
                alt="">
              </a>
              <div class="shoppingCartProductInfoWrapper">
                <a href="singleProduct.html" class="shoppingCartProductTitle">
                  微茜糕点
                </a>
                <div class="shoppingCartProductButtonsWrapper">
                  <input type="text" id="shoppingCartProductNumber-2" class="shoppingCartProductNumber"
                  name="product-2" value="2">
                  <span class="shoppingCartProductPrice">
                    ￥50
                  </span>
                  <a href="" class="shoppingCartRemoveProductButton">
                  </a>
                </div>
              </div>
            </div>
            
            
            <div class="shoppingCartProductWrapper">
              <a href="singleProduct.html" class="shoppingCartProductImageWrapper">
                <img src="__TPL__/images/content/shoppingCartProductImage-3.jpg" class="shoppingCartProductImage"
                alt="">
              </a>
              <div class="shoppingCartProductInfoWrapper">
                <a href="singleProduct.html" class="shoppingCartProductTitle">
                  微茜糕点III
                </a>
                <div class="shoppingCartProductButtonsWrapper">
                  <input type="text" id="shoppingCartProductNumber-3" class="shoppingCartProductNumber"
                  name="product-3" value="1">
                  <span class="shoppingCartProductPrice">
                    ￥110
                  </span>
                  <a href="" class="shoppingCartRemoveProductButton">
                  </a>
                </div>
              </div>
            </div>
            
            
            <div class="shoppingCartInfoWrapper">
              <span class="shoppingCartProductsNumber">
                购物车:3件产品
              </span>
              <span class="shoppingCartProductsTotal">
                总共: ￥185
              </span>
            </div>
            
            <div class="shoppingCartButtonsWrapper">
              <a href="" class="shoppingCartEmptyButton">
                清空购物车
              </a>
              <a href="" class="shoppingCartEmptyButton">
                更新购物车
              </a>
              <input type="button" value="去付款" onclick="javascript:window.location.href='checkout.html' "
              class="shoppingCartCheckoutButton">
            </div>
          </fieldset>
        </form>
        
        
        <div class="headerOuterWrapper">
          <div class="headerWrapper">
            <a href="<?php echo url('user/index');?>" class="accountButton">
            </a>
            <a href="<?php echo url('flow/cart');?>" class="shoppingCartButton">
            </a>
            <a href="" class="mainMenuButton">
            </a>
          </div>
          <div class="headerDecoration">
          </div>
          
          <a href="" class="mainLogo">
            <img src="__TPL__/images/common/mainLogo.png" alt="" />
          </a>
          
        </div>
        
        
        <div class="pageContentWrapper">
          
          <?php echo $this->fetch('library/search.lbi'); ?>
          
          
          <div class="sliderOuterWrapper">
            <div class="sliderWrapper">
              <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </div>
            <a href="" class="sliderControl previousSlideButton">
            </a>
            <a href="" class="sliderControl nextSlideButton">
            </a>
          </div>
          
          <div class="textBreakBottom">
          </div>
          <div class="selectWrapper">
           <div class="menu">
              <ul>

                <li class="father-li">
                  <a class="" href="javascript:void(0)">
                    甜点类别
                  </a>
                  <ul style="display:black;">
                    <li>
                      <a href="<?php echo url('index.php?m=default&c=category&a=index&id=13');?>">
                        全部系列
                      </a>
                    </li>
                    <?php $_from = $this->_var['categories']['13']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
                    <li><a href="<?php echo $this->_var['rec_data']['url']; ?>"><?php echo $this->_var['rec_data']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <li class="line">
                    </li>
                    <li>
                      <a href="<?php echo url('index.php?m=default&c=category&a=index&id=2');?>">
                        全部用途
                      </a>
                    </li>
                    <?php $_from = $this->_var['categories']['2']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
                    <li><a href="<?php echo $this->_var['rec_data']['url']; ?>"><?php echo $this->_var['rec_data']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
          
          <h4 class="sectionTitle">
            春季新品:
            <a href="<?php echo url('index.php?m=default&c=category&a=index&id=');?>" class="sectionTitleLink">
              更多 &raquo;
            </a>
          </h4>
          <div class="homeProductsWrapper">

          <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <div class="homeProductWrapper">
                <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
              <div class="homeProductInfoWrapper">
                <span class="homeProductTitle">
                  <?php echo $this->_var['goods']['short_style_name']; ?>
                </span>
                <a href="<?php echo $this->_var['goods']['url']; ?>" class="homePurchaseButton">
                  (<?php if ($this->_var['goods']['promote_price'] != ""): ?>

                 <?php echo $this->_var['goods']['promote_price']; ?>

                 <?php else: ?>

                 <?php echo $this->_var['goods']['shop_price']; ?>

                 <?php endif; ?>) 购买
                </a>
              </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          
          <div class="textBreakBottom">
          </div>
          
          <h4 class="sectionTitle">
            特色推荐:
            <a href="<?php echo url('index.php?m=default&c=category&a=index&id=');?>" class="sectionTitleLink">
              更多 &raquo;
            </a>
          </h4>
          <div class="homeProductsWrapper">
            <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
              <div class="homeProductWrapper">
                  <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
                <div class="homeProductInfoWrapper">
                  <span class="homeProductTitle">
                    <?php echo $this->_var['goods']['short_style_name']; ?>
                  </span>
                  <a href="<?php echo $this->_var['goods']['url']; ?>" class="homePurchaseButton">
                    (<?php if ($this->_var['goods']['promote_price'] != ""): ?>

                   <?php echo $this->_var['goods']['promote_price']; ?>

                   <?php else: ?>

                   <?php echo $this->_var['goods']['shop_price']; ?>

                   <?php endif; ?>) 购买
                  </a>
                </div>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           
          </div>
          
          <div class="pageBreak">
          </div>
          
          <div class="accordionWrapper">
            
            <div class="accordionItemWrapper">
              <a href="" class="accordionButton">
                <span class="accordionButtonIcon">
                </span>
                <span class="accordionButtonTitle">
                  我如何订一个蛋糕?
                </span>
              </a>
              <div class="accordionContentWrapper">
                <div class="accordionContent">
                  <p>
                    所有蛋糕订单可以发电子邮件给我们,这是更快和更高效的服务比面对面咨询。所有的邮件都回复在12小时内,我们的一个设计师,所以如果你已经有了一个主意你想要的,只是去我们的联系我们页面并完成表格我们很乐意给你一个报价。如果你想订货,我们需要一个完整的储备你的付款日期。
                    <br>
                    所有蛋糕订单可以发电子邮件给我们,这是更快和更高效的服务比面对面咨询。所有的邮件都回复在12小时内,我们的一个设计师,所以如果你已经有了一个主意你想要的,只是去我们的联系我们页面并完成表格我们很乐意给你一个报价。如果你想订货,我们需要一个完整的储备你的付款日期。
                  </p>
                </div>
              </div>
            </div>
            
            
            <div class="accordionItemWrapper">
              <a href="" class="accordionButton">
                <span class="accordionButtonIcon">
                </span>
                <span class="accordionButtonTitle">
                  你的退款和取消政策是什么？
                </span>
              </a>
              <div class="accordionContentWrapper">
                <div class="accordionContent">
                  <p>
                    所有蛋糕订单可以发电子邮件给我们,这是更快和更高效的服务比面对面咨询。所有的邮件都回复在12小时内,我们的一个设计师,所以如果你已经有了一个主意你想要的,只是去我们的联系我们页面并完成表格我们很乐意给你一个报价。如果你想订货,我们需要一个完整的储备你的付款日期。
                  </p>
                </div>
              </div>
            </div>
            
            
            <div class="accordionItemWrapper">
              <a href="" class="accordionButton">
                <span class="accordionButtonIcon">
                </span>
                <span class="accordionButtonTitle">
                  下单以后多长时间能收到？
                </span>
              </a>
              <div class="accordionContentWrapper">
                <div class="accordionContent">
                  <p>
                    所有蛋糕订单可以发电子邮件给我们,这是更快和更高效的服务比面对面咨询。所有的邮件都回复在12小时内,我们的一个设计师,所以如果你已经有了一个主意你想要的,只是去我们的联系我们页面并完成表格我们很乐意给你一个报价。如果你想订货,我们需要一个完整的储备你的付款日期。
                  </p>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        
        <div class="footerDecoration">
        </div>
        
       <?php echo $this->fetch('library/page_footer.lbi'); ?> 
        
      </div>
      
    </div>
    
    <script type="text/javascript">
    get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
    </script>
  </body>
</html>