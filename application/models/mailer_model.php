<?php

class Mailer_model extends CI_Model {

    /**
     * sendEmail
     * @author Subho Ghose
     * @param --- $data - information to place in the mail 
     * $templateName - html template to use in mail body          
     * @return --- none
     * modified by ----- Subho Ghose
     * date --- 06/02/2015 (mm/dd/yyyy  )
     */
    function sendEmail($data, $templateName) {
        //echo "<pre>";
        //print_r($data);

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['user_full_name']);
        $this->email->to($data['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailScripts/' . $templateName, $data, true);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
        $this->email->clear();
        //redirect('web_welcome/member_signup');
    }

}

?>
