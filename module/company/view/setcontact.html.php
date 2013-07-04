<?php
/**
 * The browse view file of block module of XiRangEPS.
 *
 * @copyright   Copyright 2013-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     company
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<form method="post" id="ajaxForm">
  <table class="table table-bordered table-form">
    <caption><?php echo $lang->company->setContact;?></caption> 
    <tr>
      <th class="w-150px"><?php echo $lang->company->address?></th> 
      <td><?php echo html::input('address', $contact->address, 'class="text-1"');?></td> 
    </tr>
    <tr>
      <th><?php echo $lang->company->phone;?></th> 
      <td><?php echo html::input('phone', $contact->phone, 'class="text-1"');?></td> 
    </tr>
    <tr>
      <th><?php echo $lang->company->email;?></th> 
      <td><?php echo html::input('email', $contact->email, 'class="text-1"');?></td> 
    </tr>
    <tr>
      <th><?php echo $lang->company->fax;?></th> 
      <td><?php echo html::input('fax', $contact->fax, 'class="text-1"');?></td> 
    </tr>
    <tr>
      <th><?php echo $lang->company->qq;?></th> 
      <td><?php echo html::input('qq', $contact->qq, 'class="text-1"');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->company->weixin;?></th> 
      <td><?php echo html::input('weixin', $contact->weixin, 'class="text-1"');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->company->weibo;?></th> 
      <td><?php echo html::input('weibo', $contact->weibo, 'class="text-1"');?></td>
    </tr>
     <tr>
      <th><?php echo $lang->company->wangwang;?></th> 
      <td><?php echo html::input('wangwang', $contact->wangwang, 'class="text-1"');?></td>
    </tr>
    <tr>
      <td colspan="2" class="a-center">
        <?php echo html::submitButton();?>
        <span id="responser"></span>
      </td>
    </tr>
  </table>
</form>
<?php include '../../common/view/footer.admin.html.php';?>
