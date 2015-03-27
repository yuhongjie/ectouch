

<div class="pageNumbersOuterWrapper">
  <div class="pageNumbersWrapper">
    <?php if ($this->_var['pager']['page_number']): ?>
      <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'num');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['num']):
?>
   <a class="pageNumber <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>currentPageNumber<?php endif; ?>" href="<?php echo $this->_var['num']; ?>" <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>selected<?php endif; ?> ><?php echo $this->_var['key']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
   <span class="pageNumber">...</span>
   <a href="<?php echo empty($this->_var['pager']['page_prev']) ? '#' : $this->_var['pager']['page_prev']; ?>" class="pageNumber">&laquo;</a> 
   <a href="<?php echo empty($this->_var['pager']['page_next']) ? '#' : $this->_var['pager']['page_next']; ?>" class="pageNumber">&raquo;</a> 
 </div>
</div>
