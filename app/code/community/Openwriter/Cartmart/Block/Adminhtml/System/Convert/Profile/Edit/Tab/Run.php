<?php
class OpenWriter_Cartmart_Block_Adminhtml_System_Convert_Profile_Edit_Tab_Run extends Mage_Adminhtml_Block_System_Convert_Profile_Edit_Tab_Run
{
    public function __construct()
    {
        parent::__construct();
        
        /**Code For Vendor**/
        $isVendor = Mage::helper('marketplace')->isVendor();//current user is vendor or not
        
        $model = Mage::registry('current_convert_profile');

        if($isVendor && $model->getDirection()=='export')
        {
        		$this->setTemplate('marketplace/system/convert/profile/run.phtml');
        }
    }
    
    
}
?>
