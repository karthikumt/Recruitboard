<?php
include_once APPPATH . 'libraries/Class.PayFlow.php';

class Juco_transfer_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		//$this->load->library('upload');
		$this->load->library('image_lib');

	}

	function profile_image($Juco_ID) {
		$Juco_ProfileImage = $_FILES['Juco_ProfileImage']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_ProfileImage_' . $Juco_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Juco_ProfileImage')) {
			$Juco_ProfileImage = $this->upload->data(); //uploaded fiel name
			$UpdateFilename = array('Juco_ProfileImage' => $Juco_ProfileImage['file_name']);
			$this->db->where('Juco_ID', $Juco_ID);
			$this->db->update('juco_transfer', $UpdateFilename);

			my_resize('./register_images/juco_transfer/original/' . $Juco_ProfileImage['file_name'], './register_images/juco_transfer/small/' . $Juco_ProfileImage['file_name'], 250, 250);
		}
	}

	function cover_image($Juco_ID) {
		$Juco_CoverImage = $_FILES['Juco_CoverImage']['name'];
		$config['upload_path'] = './register_images/juco_transfer/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_CoverImage_' . $Juco_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Juco_CoverImage')) {
			$Juco_CoverImage = $this->upload->data(); //uploaded fiel name
			$UpdateFilename = array('Juco_CoverImage' => $Juco_CoverImage['file_name']);
			$this->db->where('Juco_ID', $Juco_ID);
			$this->db->update('juco_transfer', $UpdateFilename);

			my_resize('./register_images/juco_transfer/cover_original/' . $Juco_CoverImage['file_name'], './register_images/juco_transfer/cover_small/' . $Juco_CoverImage['file_name'], 1400, 350);
		}
	}

	function PitchImage($Juco_ID) {

		$Juco_PitchImageName = $_FILES['Juco_PitchImageName']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_PitchImageName_' . $Juco_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Juco_PitchImageName')) {
			$Juco_PitchImageName = $this->upload->data();
			$PitchImageName = array('Juco_PitchImageName' => $Juco_PitchImageName['file_name']);
			$this->db->where('UserID', $Juco_ID);
			$this->db->update('juco_transfer', $PitchImageName);

			my_resize('./register_images/juco_transfer/original/' . $Juco_PitchImageName['file_name'], './register_images/juco_transfer/small/' . $Juco_PitchImageName['file_name'], 180, 180);
		}

	}

	function HitImage($Juco_ID) {
		$this->load->library('upload');
		$Juco_HitImageName = $_FILES['Juco_HitImageName']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_HitImageName_' . $Juco_ID;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('Juco_HitImageName')) {
			$Juco_HitImageName = $this->upload->data();
			$HitImageName = array('Juco_HitImageName' => $Juco_HitImageName['file_name']);
			$this->db->where('UserID', $Juco_ID);
			$this->db->update('juco_transfer', $HitImageName);

			my_resize('./register_images/juco_transfer/original/' . $Juco_HitImageName['file_name'], './register_images/juco_transfer/small/' . $Juco_HitImageName['file_name'], 180, 180);
		}

	}

	function FieldImage($Juco_ID) {
		$this->load->library('upload');
		$Juco_FieldImageName = $_FILES['Juco_FieldImageName']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_FieldImageName_' . $Juco_ID;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('Juco_FieldImageName')) {
			$Juco_FieldImageName = $this->upload->data();
			$FieldImageName = array('Juco_FieldImageName' => $Juco_FieldImageName['file_name']);
			$this->db->where('UserID', $Juco_ID);
			$this->db->update('juco_transfer', $FieldImageName);
			my_resize('./register_images/juco_transfer/original/' . $Juco_FieldImageName['file_name'], './register_images/juco_transfer/small/' . $Juco_FieldImageName['file_name'], 180, 180);
		}
	}

	function Juco_Ins_Image($Juco_ID) {

		$this->load->library('upload');
		$Juco_PitchImageName = $_FILES['Juco_PitchImageName']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_Ins_Image' . $Juco_ID;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('Juco_Ins_ImageName')) {
			$Juco_PitchImageName = $this->upload->data();
			$PitchImageName = array('Juco_Ins_ImageName' => $Juco_PitchImageName['file_name']);
			$this->db->where('UserID', $Juco_ID);
			$this->db->update('juco_transfer', $PitchImageName);

			my_resize('./register_images/juco_transfer/original/' . $Juco_PitchImageName['file_name'], './register_images/juco_transfer/small/' . $Juco_PitchImageName['file_name'], 280, 230);
		}

	}

	function Juco_Act_Image($Juco_ID) {
		$this->load->library('upload');
		$Juco_Act_Image = $_FILES['Juco_Act_ImageName']['name'];
		$config['upload_path'] = './register_images/juco_transfer/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Juco_Act_ImageName' . $Juco_ID;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('Juco_Act_ImageName')) {
			$Juco_Act_ImageName = $this->upload->data();
			$Juco_Act_Image = array('Juco_Act_ImageName' => $Juco_Act_ImageName['file_name']);
			$this->db->where('UserID', $Juco_ID);
			$this->db->update('juco_transfer', $Juco_Act_Image);

			my_resize('./register_images/juco_transfer/original/' . $Juco_Act_ImageName['file_name'], './register_images/juco_transfer/small/' . $Juco_Act_ImageName['file_name'], 280, 230);
		}

	}

	public function payment_register() {

		if ($this->session->userdata('MyRecuritID')) {
			$UserID = $this->session->userdata('MyRecuritID');
		} else {
			$UserID = $this->session->userdata('UserID');
		}
		$PayFlow = new PayFlow('LiveLoveAloha', 'PayPal', 'LiveLoveAloha', 'dswtech1_', 'recurring');
		$PayFlow->setEnvironment('test');
		// 'USD', 'EUR', 'GBP', 'CAD', 'JPY', 'AUD'.

		$getUser = get_user_detail($UserID);
		$Student_data = get_user_data('juco_transfer', array('Juco_CountryID', 'Juco_ZipCode'), $UserID);
		$County = get_row_data('country', 'CountryID', $Student_data['Juco_CountryID']);
		$CCName = $this->input->post('CardNames');
		$CCNumber = $this->input->post('CardNumbers');
		$CCMonth = $this->input->post('ExpMonths');
		$CCYear = $this->input->post('ExpYears');
		$CVC = $this->input->post('CuvNos');
		$PaymentType = $this->input->post('PaymentType');
		if ($PaymentType == 1) {
			$PaidAmt = "9.99";
			$Fre = 'MONT';}
		if ($PaymentType == 2) {
			$PaidAmt = "99.99";
			$Fre = 'YEAR';}
		if ($PaymentType == 3) {
			$PaidAmt = "199.99";
			$Fre = 'YEAR';}

		$ZipCode = "";
		$CurrCode = 'USD';
		$Email = $getUser['UserEmail'];
		$LastName = $getUser['LastName'];
		$FirstName = $getUser['FirstName'];
		$CountryName = $County['CountryName'];
		$ZipCode = 94303; //$Student_data['Juco_ZipCode'];
		date_default_timezone_set("UTC");
		$date_catea = date("Y-m-d H:i:s", time());

		if ($PaymentType == 3) {
			$PayFlow->setTransactionType('S');

		} else {
			$PayFlow->setTransactionType('R');
			$PayFlow->setProfilePayPeriod($Fre);
			$PayFlow->setProfileAction('A');
			$PayFlow->setProfileName($FirstName . $LastName);
			$PayFlow->setProfileStartDate(date('mdY', strtotime("+1 day")));
			$PayFlow->setOptionalTransactionType('S');
			$PayFlow->setProfileTerm(0);
			$PayFlow->setExtraAmount($PaidAmt, FALSE);
		}

		$PayFlow->setPaymentMethod('C'); // A = Automated clearinghouse, C = Credit card, D = Pinless debit, K = Telecheck, P = PayPal.
		$PayFlow->setPaymentCurrency('USD'); // 'USD', 'EUR', 'GBP', 'CAD', 'JPY', 'AUD'.

		$PayFlow->setCustomerFirstName($FirstName);
		$PayFlow->setCustomerLastName($LastName);
		$PayFlow->setCustomerZip($ZipCode);
		$PayFlow->setCustomerCountry($CountryName);
		$PayFlow->setCustomerEmail($Email);
		$PayFlow->setPaymentComment('Recurring Payment');

		$PayFlow->setAmount($PaidAmt, FALSE);

		$PayFlow->setCCNumber($CCNumber);
		$PayFlow->setCVV($CVC);
		$PayFlow->setExpiration($CCMonth . $CCYear);
		$PayFlow->setPaymentComment('Recurring Payment');

		if ($PayFlow->processTransaction()) {

			$Payment = $PayFlow->getResponse();
			if ($this->session->userdata('MyRecuritID')) {
				$UserID = $this->session->userdata('MyRecuritID');
			} else {
				$UserID = $this->session->userdata('UserID');
			}

			if ($PaymentType == 3) {
				$Tranjection = $Payment['PNREF'];
			} else {
				$Tranjection = $Payment['PROFILEID'];
			}

			$data = array(
				'Payment' => $Tranjection,
				'Step' => 11,
				'IsComplated' => 1,
				'PaymentType' => $PaymentType,
				'PaymentDate' => date('Y-m-d H:i:s'),
				'ReferenceID' => $Payment['RPREF'],
				'ResponceMessage' => $Payment['RESPMSG'],
				'TranjectionRef' => $Payment['TRXPNREF'],
				'PaypalRef' => $Payment['PPREF'],
				'CorelationID' => $PaidAmt['CORRELATIONID'],
			);

			$this->db->where(array('UserID' => $UserID));
			$this->db->update('user_register', $data);

			if ($this->session->userdata('MyRecuritID')) {
				$UserID = $this->session->userdata('MyRecuritID');
			} else {
				$UserID = $this->session->userdata('UserID');
			}

			$this->db->select('UserEmail');
			$this->db->select('FirstName');
			$this->db->select('LastName');
			$this->db->where('UserID', $UserID);
			$q = $this->db->get('user_register');
			$UserEmail = $q->row_array();

			$maildata['url'] = base_url();
			$maildata['User'] = $UserEmail['FirstName'] . " " . $UserEmail['LastName'];
			$maildata['Tranjection'] = $Tranjection;
			$mesg = $this->load->view('mail_template/tranjection', $maildata, true);
			$config = array(
				'charset' => 'utf-8',
				'wordwrap' => TRUE,
				'mailtype' => 'html',
				'protocol' => 'smtp',
			  	'smtp_host' => SMTP_HOST,
			  	'smtp_user' => SMTP_USER,
			  	'smtp_pass' => SMTP_PASSWORD,
			  	'smtp_port' => SMTP_PORT,
				'crlf' => "\r\n",
				'newline' => "\r\n",
			);

			$this->email->initialize($config);
			$this->email->from(FROM_EMAIL, 'MyRecruitBoard');
			$this->email->to($UserEmail['UserEmail']);
			$this->email->subject('Thank you for your Payment.');
			$this->email->message($mesg);
			$this->email->send();
			return 1;

		} else {
			$Payment = $PayFlow->getResponse();
			$this->session->set_flashdata('errormessage', $Payment['RESPMSG']);
			redirect(base_url() . 'student_athlete/payment');
		}

	}
	public function Profile($UserID) {
		$this->db->select('Juco_ProfileImage');
		$query = $this->db->get_where('juco_transfer', array('Juco_ID' => $UserID))->row_array();
		return $query;
	}
	public function getJucoID($UserID) {
		$this->db->select('Juco_ID', 'Juco_ProfileImage');
		$query = $this->db->get_where('juco_transfer', array('UserID' => $UserID))->row_array();
		return $query;
	}

	public function Cover_Profile($UserID) {
		$this->db->select('Juco_CoverImage');
		$query = $this->db->get_where('juco_transfer', array('Juco_ID' => $UserID))->row_array();
		return $query;
	}
	public function Cover_getJucoID($UserID) {
		$this->db->select('Juco_ID', 'Juco_CoverImage');
		$query = $this->db->get_where('juco_transfer', array('UserID' => $UserID))->row_array();
		return $query;
	}

}
