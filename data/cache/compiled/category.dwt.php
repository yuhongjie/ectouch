<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="websiteWrapper"> 
  
  <div class="pageWrapper portfolioTwoPageWrapper"> 
    
    <div class="mainMenuOuterWrapper"> 
      
      <ul class="mainMenuWrapper">
        <ul class="mainMenuWrapper">
        <li class="currentPage"><a href="index.php">首页</a></li>
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
      </ul>
      
      <div class="mainMenuBottomDecoration"></div>
    </div>
     
    
    
    <form id="shoppingCartWrapper" class="shoppingCartWrapper" action="#" method="post">
      <fieldset>
        
        <div class="shoppingCartProductWrapper"> <a  href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-1.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product One</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-1" class="shoppingCartProductNumber" name="product-1" value="1">
              <span class="shoppingCartProductPrice">$25</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-2.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product Two</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-2" class="shoppingCartProductNumber" name="product-2" value="2">
              <span class="shoppingCartProductPrice">$50</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartProductWrapper"> <a  href="" class="shoppingCartProductImageWrapper"><img src="__TPL__/images/content/shoppingCartProductImage-3.jpg" class="shoppingCartProductImage" alt=""></a>
          <div class="shoppingCartProductInfoWrapper"> <a href="" class="shoppingCartProductTitle">Product Three</a>
            <div class="shoppingCartProductButtonsWrapper">
              <input type="text" id="shoppingCartProductNumber-3" class="shoppingCartProductNumber" name="product-3" value="1">
              <span class="shoppingCartProductPrice">$110</span><a href="" class="shoppingCartRemoveProductButton"></a> </div>
          </div>
        </div>
         
        
        
        <div class="shoppingCartInfoWrapper"> <span class="shoppingCartProductsNumber">Products: 3</span> <span class="shoppingCartProductsTotal">Total: $235</span> </div>
        
        
        <div class="shoppingCartButtonsWrapper"><a href="" class="shoppingCartEmptyButton">Empty</a>
          <input type="submit" value="Checkout" id="shoppingCartCheckoutButton" class="shoppingCartCheckoutButton">
        </div>
      </fieldset>
    </form>
     
    
    
    <div class="headerOuterWrapper">
      <div class="headerWrapper"> <a href="login.html" class="accountButton"></a><a href="" class="shoppingCartButton"></a><a href="" class="mainMenuButton"></a></div>
      <div class="headerDecoration"></div>
      
       
      <a href="" class="mainLogo"><img src="__TPL__/images/common/mainLogo.png" alt="" /></a> 
       
    </div>
     
    
    
    <div class="portfolioTwoWrapper">
      <div class="headerBreak"></div>

      <div class="selectWrapper">
        <div class="menu">
            <ul>
            <li class="father-li"><a class="" href="javascript:void(0)">产品分类</a>
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
      <div class="list-title">
        <div class="bread-nav">
          <?php echo $this->fetch('library/ur_here.lbi'); ?> 
        </div>
        <div class="view-mode">
          <a class="list" href="portfolioOneColumn.html"><i class=" icon-th-list"></i></a> 
          <a class="grid active" href="javascript:void(0)"><i class=" icon-th-large"></i></a>  
        </div> 
      </div>
       
      
      <div class="portfolioTwoItemsWrapper"> 
        <?php echo $this->fetch('library/goods_list.lbi'); ?> 
      </div>
       
    </div>
     
    
    
    <?php echo $this->fetch('library/page.lbi'); ?> 
    
    
    <div class="footerDecoration"></div>
    
    <?php echo $this->fetch('library/page_footer.lbi'); ?> 
     
    
  </div>
   
</div>

<script type="text/javascript">
if( <?php echo $this->_var['show_asynclist']; ?> == 1){
  get_asynclist('<?php echo url('category/asynclist', array('id'=>$this->_var['id'], 'brand'=>$this->_var['brand_id'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'], 'keywords'=>$this->_var['keywords']));?>' , '__TPL__/images/loader.gif');
 }
</script>
</body>
</html>

