<?php
namespace Bizspice\PreviousNext\Controller\Index;
include_once('Mailin.php');
use Magento\Framework\Controller\ResultFactory;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}
   
	public function execute()
	{
        
       
        $post = (array) $this->getRequest()->getPost();
        if (!empty($post)) {

            
        $name =  $post['pname'];
        $fname =  $post['fname'];
        $lname =  $post['lname'];
        $email =  $post['email'];
        $contactno =  $post['contactno'];
        $qunt =  $post['qunty'];
        $price = $post['pprice'];
        //$imageURL = $this->getViewFileUrl('images/contact.jpg');
        $mailin = new \CMailin('https://api.sendinblue.com/v2.0','Qr7hK8HRLNGJFvSY');

            $data = array( "to" => array('saroj.dash@ajatus.co.in'=>$name),
			"from" => array("go@sampley.in","Sampley"),
            "cc" => array($email=>$fname),
            "replyto" => array($email=>$fname),
			"subject" => "Order Details",
			"html" => '
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            
            <tr>
                <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                <td align="center">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#e2e2e2">
                       <img src="https://sampley.in/pub/media/logo/stores/1/Sampley_Logo-resize.png" class="img-responsive">
                    </td>
                </tr>
                </table>
                </td>
            </tr>
                        <tr>
                            <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#F44336">
                                <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:400px;">
                                        <tr>
                                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                                <h1 style="font-size:20px; font-weight: 800; margin: 0; color: #ffffff;">Your material equiry is recieved !</h1>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                               
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                    <tr>
                                        <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> 
                                        <p>We are so thankful to you for choosing Sampley !</p>
                                        <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                                            <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Thank You For Your Order! </h2>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td align="left" style="padding-top: 20px;">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Order Details # </td>
                                                    <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> &#8377;'.$price.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> Product Name </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> '.$name.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> First Name </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> '.$fname.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Last Name </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> '.$lname.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Email </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> '.$email.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Contact No </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> '.$contactno.' </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Quantity </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> '.$qunt.' </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="padding-top: 20px;">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                    <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> &#8377;'.$price.' </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                          <td>
                              <p>We shall connect with you shortly with best possible prices and available quantities.
                              Thank you for your patience !</p>
                              <p>Sampley - A building material focused marketplace platform to source best products information, product samples and brand authorized material suppliers and certified applicators.</p>
                              <p>All at one place in a click!</p>
                          </td>
                       </tr>
                                </table>
                            </td>
                        </tr>
                       
                        <tr>
                            <td align="center" style=" padding: 35px; background-color: #ff7361;" bgcolor="#1b9ba3">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                    <tr>
                                        <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                            <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;"> Simply speed up business !  </h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding: 25px 0 15px 0;">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> <a href="https://sampley.ajatus.in" target="_blank" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #F44336; padding: 15px 30px; border: 1px solid #F44336; display: block;">Log in to sampley</a> </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                       
                    </table>
                </td>
            </tr>
        </table>
            '
            );

        $mailin->send_email($data);
		
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl('/success');
        return $resultRedirect;

        }
        
		
        $this->_view->loadLayout();
        $this->_view->renderLayout();
	}
}