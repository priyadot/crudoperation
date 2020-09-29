<?php
class User2 extends CI_Controller
{
   public function index(){
        $this->load->model('User_model');
        $userdb = $this->User_model->all();
        $data = array();
        $data['userdb'] = $userdb;
        $this->load->view('list',$data);
   }

   
      
   public function create()
    {
         $this->load->model('User_model');
         $this->form_validation->set_rules('name','Name','required');
         $this->form_validation->set_rules('email','Email','required|valid_email');
         if ($this->form_validation->run() == false)  
         {
            $this->load->view('create');
         }
        else 
        {
         $formArray = array();
         $formArray['name'] = $this->input->post('name');
         $formArray['email'] = $this->input->post('email');
         

         $this->User_model->create($formArray);
         $this->session->set_flashdata('success','Record Added Successfully');
         redirect(base_url().'index.php/User2/index');
        }
    
      }

    public function edit($userId)
    {
      $this->load->model('User_model');
      $user = $this->User_model->getUser($userId);
      $data = array();
      $data['user'] = $user;

      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      if ($this->form_validation->run() == false)
       {
      $this->load->view('edit',$data);
       }
    else
     {
      $formArray = array();
      $formArray['name'] = $this->input->post('name');
      $formArray['email'] = $this->input->post('email');
      $this->User_model->updateUser($userId,$formArray);
      $this->session->set_flashdata('success','Record Updated Successfully');
      redirect(base_url().'index.php/User2/index');
     }
    } 

    public function delete($userId){
       $this->load->model('User_model');
       $user=$this->User_model->getuser($userId);
       if(empty($user)){
          $this->session->set_flashdata('failure','Record not found');
          redirect(base_url().'index.php/User2/index');
       }
          $this->User_model->deleteUser($userId);
          $this->session->set_flashdata('success','Record deleted successfully');
          redirect(base_url().'index.php/User2/index');
       }
   }  
   
 

 ?>

