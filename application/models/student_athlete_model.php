<?php
include_once APPPATH . 'libraries/Class.PayFlow.php';
class Student_athlete_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		//$this->load->library('upload');
		$this->load->library('image_lib');

	}

	function profile_image($Stu_ID) {

		$Stu_ProfileImage = $_FILES['Stu_ProfileImage']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_ProfileImage_' . $Stu_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Stu_ProfileImage')) {
			$Stu_ProfileImage = $this->upload->data(); //uploaded fiel name
			$UpdateFilename = array('Stu_ProfileImage' => $Stu_ProfileImage['file_name']);
			$this->db->where('Stu_ID', $Stu_ID);
			$this->db->update('student_athlete', $UpdateFilename);

			my_resize('./register_images/student_athlete/original/' . $Stu_ProfileImage['file_name'], './register_images/student_athlete/small/' . $Stu_ProfileImage['file_name'], 250, 250);
		}
	}

	function cover_image($Stu_ID) {
		$Stu_CoverImage = $_FILES['Stu_CoverImage']['name'];
		$config['upload_path'] = './register_images/student_athlete/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_CoverImage_' . $Stu_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Stu_CoverImage')) {
			$Stu_CoverImage = $this->upload->data(); //uploaded fiel name
			$UpdateFilename = array('Stu_CoverImage' => $Stu_CoverImage['file_name']);
			$this->db->where('Stu_ID', $Stu_ID);
			$this->db->update('student_athlete', $UpdateFilename);

			my_resize('./register_images/student_athlete/cover_original/' . $Stu_CoverImage['file_name'], './register_images/student_athlete/cover_small/' . $Stu_CoverImage['file_name'], 1400, 350);
		}
	}

	function PitchImage($Stu_ID) {

		$Stu_PitchImageName = $_FILES['Stu_PitchImageName']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_PitchImageName_' . $Stu_ID;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('Stu_PitchImageName')) {
			$Stu_PitchImageName = $this->upload->data();
			$PitchImageName = array('Stu_PitchImageName' => $Stu_PitchImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('student_athlete', $PitchImageName);

			my_resize('./register_images/student_athlete/original/' . $Stu_PitchImageName['file_name'], './register_images/student_athlete/small/' . $Stu_PitchImageName['file_name'], 180, 180);
		}

	}

	function HitImage($Stu_ID) {
		$this->load->library('upload');
		$Stu_HitImageName = $_FILES['Stu_HitImageName']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_HitImageName_' . $Stu_ID;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('Stu_HitImageName')) {
			$Stu_HitImageName = $this->upload->data();
			$HitImageName = array('Stu_HitImageName' => $Stu_HitImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('student_athlete', $HitImageName);

			my_resize('./register_images/student_athlete/original/' . $Stu_HitImageName['file_name'], './register_images/student_athlete/small/' . $Stu_HitImageName['file_name'], 180, 180);
		}

	}

	function FieldImage($Stu_ID) {
		$this->load->library('upload');
		$Stu_FieldImageName = $_FILES['Stu_FieldImageName']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_FieldImageName_' . $Stu_ID;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('Stu_FieldImageName')) {
			$Stu_FieldImageName = $this->upload->data();
			$FieldImageName = array('Stu_FieldImageName' => $Stu_FieldImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('student_athlete', $FieldImageName);
			my_resize('./register_images/student_athlete/original/' . $Stu_FieldImageName['file_name'], './register_images/student_athlete/small/' . $Stu_FieldImageName['file_name'], 180, 180);
		}
	}

	function Stu_Ins_Image($Stu_ID) {
		$this->load->library('upload');
		$Stu_PitchImageName = $_FILES['Stu_PitchImageName']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_Ins_Image' . $Stu_ID;

		$this->upload->initialize($config);

		if ($this->upload->do_upload('Stu_Ins_ImageName')) {
			$Stu_PitchImageName = $this->upload->data();
			$PitchImageName = array('Stu_Ins_ImageName' => $Stu_PitchImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('student_athlete', $PitchImageName);

			my_resize('./register_images/student_athlete/original/' . $Stu_PitchImageName['file_name'], './register_images/student_athlete/small/' . $Stu_PitchImageName['file_name'], 280, 230);
		}

	}

	function Stu_Act_Image($Stu_ID) {
		$this->load->library('upload');

		$Stu_Act_Image = $_FILES['Stu_Act_ImageName']['name'];
		$config['upload_path'] = './register_images/student_athlete/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Stu_Act_ImageName' . $Stu_ID;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('Stu_Act_ImageName')) {
			$Stu_Act_ImageName = $this->upload->data();
			$Stu_Act_Image = array('Stu_Act_ImageName' => $Stu_Act_ImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('student_athlete', $Stu_Act_Image);

			my_resize('./register_images/student_athlete/original/' . $Stu_Act_ImageName['file_name'], './register_images/student_athlete/small/' . $Stu_Act_ImageName['file_name'], 280, 230);
		}

	}

	public function payment_register() {

		if ($this->session->userdata('MyRecuritID')) {
			$UserID = $this->session->userdata('MyRecuritID');
		} else {
			$UserID = $this->session->userdata('UserID');
		}
		$PayFlow = new PayFlow('LiveLoveAloha', 'PayPal', 'LiveLoveAloha', 'dswtech1_', 'recurring');
		$PayFlow->setEnvironment('live');
		// 'USD', 'EUR', 'GBP', 'CAD', 'JPY', 'AUD'.

		$getUser = get_user_detail($UserID);
		$Student_data = get_user_data('student_athlete', array('Stu_CountryID', 'Stu_ZipCode'), $UserID);
		$County = get_row_data('country', 'CountryID', $Student_data['Stu_CountryID']);
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
		$ZipCode = $Student_data['Stu_ZipCode'];
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
				'smtp_host' => 'smtp.sendgrid.net',
				'smtp_user' => 'azure_647880b4c7148ba90798dcfac5e2e9cd@azure.com',
				'smtp_pass' => 'Y1GRlP1jgE85Ljg',
				'smtp_port' => 587,
				'crlf' => "\r\n",
				'newline' => "\r\n",
			);

			$this->email->initialize($config);
			$this->email->from('no-reply@recruitboard.com', 'MyRecruitBoard');
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
		$this->db->select('Stu_ProfileImage');
		$query = $this->db->get_where('student_athlete', array('Stu_ID' => $UserID))->row_array();
		return $query;
	}
	public function getStuID($UserID) {
		$this->db->select('Stu_ID', 'Stu_ProfileImage');
		$query = $this->db->get_where('student_athlete', array('UserID' => $UserID))->row_array();
		return $query;
	}

	public function Cover_Profile($UserID) {
		$this->db->select('Stu_CoverImage');
		$query = $this->db->get_where('student_athlete', array('Stu_ID' => $UserID))->row_array();
		return $query;
	}
	public function Cover_getStuID($UserID) {
		$this->db->select('Stu_ID', 'Stu_CoverImage');
		$query = $this->db->get_where('student_athlete', array('UserID' => $UserID))->row_array();
		return $query;
	}

}
