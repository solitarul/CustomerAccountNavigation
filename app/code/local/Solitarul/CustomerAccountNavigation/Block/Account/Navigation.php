<?php
/**
 * @author Solitarul
 */
class Solitarul_CustomerAccountNavigation_Block_Account_Navigation extends Mage_Customer_Block_Account_Navigation
{
    /**
     * Description : Unset the link by name in customer navigation
     * @author Solitarul
     * @param Name of the link to be removed
     * @return link is removed.
     */
    public function removeLinkByName($name)
    {
        unset($this->_links[$name]);
        return $this;
    }
}