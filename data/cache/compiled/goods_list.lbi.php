

<?php if ($this->_var['show_asynclist'] == 1): ?>
<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
  <ul id="J_ItemList">
    <li class="single_item"></li>
    <a href="javascript:;" class="get_more"></a>
  </ul>
</div>
<?php else: ?>

    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>

     
        <div class="portfolioTwoItemWrapper"> <a href="<?php echo $this->_var['goods']['url']; ?>" class="portfolioTwoItemImageWrapper"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>"></a>
          <div class="portfolioTwoItemInfoWrapper">
            <h4 class="portfolioTwoItemTitle"><?php echo $this->_var['goods']['name']; ?>[<?php echo $this->_var['goods']['shop_price']; ?>]</h4>
          </div>
        </div>
      
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?> 



 

