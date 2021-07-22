<?php
namespace Custom\Field\Setup;

use Magento\Customer\Model\Customer;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    private $eavSetupFactory;
    
    private $eavConfig;
    
    private $attributeResource;
    
    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Customer\Model\ResourceModel\Attribute $attributeResource
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
        $this->attributeResource = $attributeResource;
    }
    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->removeAttribute(Customer::ENTITY, "mobile");

        $attributeSetId = $eavSetup->getDefaultAttributeSetId(Customer::ENTITY);
        $attributeGroupId = $eavSetup->getDefaultAttributeGroupId(Customer::ENTITY);

        $attributesInfo = [
            'mobile' => [
            'type' => 'varchar',
            'label' => 'Mobile Number',
            'input' => 'text',
            'required' => true,
            'visible' => true,
            'user_defined' => true,
            'sort_order' => 990,
            'position' => 990,
            'system' => 0,
            ],
            'custtype' => [
                'type' => 'varchar',
                'label' => 'Category',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 991,
                'position' => 991,
                'system' => 0,
            ],
            'companyname' => [
                'type' => 'varchar',
                'label' => 'Company Name',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 992,
                'position' => 992,
                'system' => 0,
            ],
            'businesswebsite' => [
                'type' => 'varchar',
                'label' => 'Business Website',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 993,
                'position' => 993,
                'system' => 0,
            ],
            'industry' => [
                'type' => 'varchar',
                'label' => 'Industry',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 994,
                'position' => 994,
                'system' => 0,
            ],
            'noofyears' => [
                'type' => 'varchar',
                'label' => 'No of years in service',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 995,
                'position' => 995,
                'system' => 0,
            ],
            'noofemployee' => [
                'type' => 'varchar',
                'label' => 'No of employees',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 996,
                'position' => 996,
                'system' => 0,
            ],
            'lastfy' => [
                'type' => 'varchar',
                'label' => 'Last FY',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 997,
                'position' => 997,
                'system' => 0,
            ],
            'previoustothat' => [
                'type' => 'varchar',
                'label' => 'Previous to that',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 998,
                'position' => 998,
                'system' => 0,
            ],
            'address' => [
                'type' => 'varchar',
                'label' => 'Address',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 999,
                'position' => 999,
                'system' => 0,
            ],
            'city' => [
                'type' => 'varchar',
                'label' => 'City',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1000,
                'position' => 1000,
                'system' => 0,
            ],
            'state' => [
                'type' => 'varchar',
                'label' => 'State',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1001,
                'position' => 1001,
                'system' => 0,
            ],
            'pincode' => [
                'type' => 'varchar',
                'label' => 'Pincode',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1002,
                'position' => 1002,
                'system' => 0,
            ],
            'typeofcompany' => [
                'type' => 'varchar',
                'label' => 'Type of Company',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1003,
                'position' => 1003,
                'system' => 0,
            ],
            'msme' => [
                'type' => 'varchar',
                'label' => 'MSME',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1004,
                'position' => 1004,
                'system' => 0,
            ],
            'msmecertificate' => [
                'type' => 'varchar',
                'label' => 'MSME Declaration/ Certificate No',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1005,
                'position' => 1005,
                'system' => 0,
            ],
            'gstno' => [
                'type' => 'varchar',
                'label' => 'GST No.',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1006,
                'position' => 1006,
                'system' => 0,
            ],
            'panno' => [
                'type' => 'varchar',
                'label' => 'PAN No.',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1009,
                'position' => 1009,
                'system' => 0,
            ],
            'bankname' => [
                'type' => 'varchar',
                'label' => 'Bank Name',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1010,
                'position' => 1010,
                'system' => 0,
            ],
            'branchadress' => [
                'type' => 'varchar',
                'label' => 'Branch Address',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1011,
                'position' => 1011,
                'system' => 0,
            ],
            'branchcode' => [
                'type' => 'varchar',
                'label' => 'Branch Code',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1012,
                'position' => 1012,
                'system' => 0,
            ],
            'accno' => [
                'type' => 'varchar',
                'label' => 'Account Number',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1013,
                'position' => 1013,
                'system' => 0,
            ],
            'ifsccode' => [
                'type' => 'varchar',
                'label' => 'IFSC Code',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1014,
                'position' => 1014,
                'system' => 0,
            ],
            'micrno' => [
                'type' => 'varchar',
                'label' => 'MICR No.',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 1015,
                'position' => 1015,
                'system' => 0,
            ],
        ];

        foreach ($attributesInfo as $attributeCode => $attributeParams) {
            $eavSetup->addAttribute(Customer::ENTITY, $attributeCode, $attributeParams);
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, $attributeCode);
            $attribute->setData('attribute_set_id', $attributeSetId);
            $attribute->setData('attribute_group_id', $attributeGroupId);
            $attribute->setData('used_in_forms', [
                     'adminhtml_customer',
                     'customer_account_create',
                     'customer_account_edit',
                     'adminhtml_checkout',
                     'adminhtml_customer_address',
                     'customer_address_edit',
                     'customer_register_address'
                    ]);
                    
                    $this->attributeResource->save($attribute);
        }
        
        // $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'mobile');
        // $attribute->setData('attribute_set_id', $attributeSetId);
        // $attribute->setData('attribute_group_id', $attributeGroupId);

        /*
        //You can use this attribute in the following forms
        adminhtml_checkout
        adminhtml_customer
        adminhtml_customer_address
        customer_account_create
        customer_account_edit
        customer_address_edit
        customer_register_address
        */

        // $attribute->setData('used_in_forms', [
        //     'adminhtml_customer',
        //     'customer_account_create',
        //     'customer_account_edit'
        // ]);

        // $this->attributeResource->save($attribute);
    }
}
?>