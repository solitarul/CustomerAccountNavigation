# CustomerAccountNavigation
Small module for removing unnecessary links from Magento Customer Account

It removes:
- Recurring Profiles
- Billing Agrements
- My Applications

Tested with Magento version 1.9.1.0

You can remove more links by adding more actions like this in app\design\frontend\base\default\layout\solitarul_customeraccountnavigation.xml:

            </action>
            <action method="removeLinkByName">
                <name>link_name</name>
            </action>

You can find here all available link names: https://github.com/Aproducktion/Magento-Remove-Dashboard-Links
