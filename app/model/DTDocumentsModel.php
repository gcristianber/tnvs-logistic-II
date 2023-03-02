<?php
class DTDocumentsModel{

    use Model;

    protected $table = "admin_dm_documents";
    protected $view_table = "admin_dm_documents_view";
    protected $allowed_size = 1000000;
    protected $allowed_ext = array("docx", "pdf", "pptx", "xlsx", "jpg", "jpeg", "png");

    public function renderViewData(){

        $query = "select * from $this->view_table";

		return $this->query($query);
    }

    public function insertCompose($compose){
        $id = $compose["document_id"];
        $title = $compose["title"];
        $content = $compose["content"];
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();

        $file_path = "uploads/".$id."/";
        mkdir($file_path);
        
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $content, false, false);
    
        $phpWord->save($file_path.$title.".docx", "Word2007");  

        $file_details = stat($file_path.$title.".docx");

        $data = [
            "document_id" => $id,
            "document_name" => $title.".docx",
            "document_size" => $file_details['size'],
            "document_extension" => "docx",
            "document_purpose" => $compose["purpose"],
            "category_id" => $compose["category"],
            "author_id" => "sa12345", //?Change this into the $_SESSION["user"]->user_id
            "date_created" => date("y-m-d h:i:s"),
        ];

        $this->insert($data);
    }

    public function checkCompose($compose){
        $this->errors = [];

        if(empty($compose["category"])){
            $this->errors["category"] = "Please select category!";
        }

        if(empty($compose["content"])){
            $this->errors["content"] = "The content is empty!";
        }

        if(empty($this->errors)){

           
            return true;
        }


        return false;
    }


    public function uploadFile($form, $file){

        date_default_timezone_set("Asia/Hong_Kong");

        $folder_id      = uniqid("doc");
        $make_new_path  = "uploads/".$folder_id."/";

        mkdir($make_new_path);

        $file_path = $make_new_path.$file["file"]["name"];
        move_uploaded_file($file["file"]["tmp_name"], $file_path);

        $file_ext = pathinfo($file["file"]["name"], PATHINFO_EXTENSION);

        $data = [
            "document_id" => $folder_id,
            "document_name" => $file["file"]["name"],
            "document_size" => $file["file"]["size"],
            "document_extension" => $file_ext,
            "document_purpose" => $form["document_purpose"],
            "category_id" => $form["document_category"],
            "author_id" => "sa12345", //!Change this into the $_SESSION["user"]->user_id
            "date_created" => date("y-m-d h:i:s"),
        ];

        $this->insert($data);
    }

    
    public function checkForm($form, $file){

        $this->errors = [];

        $file_ext = pathinfo($file["file"]["name"], PATHINFO_EXTENSION);

        if(empty($form["document_category"])){
            $this->errors["category"] = "Please select category!";
        }    

        if($file["file"]["size"] > $this->allowed_size){
            $this->errors["file"] = "File is too large!";
        }
        
        if(in_array($file_ext, $this->allowed_ext) == 0){
            $this->errors["file"] = "Invalid file extension!";
        }

        if($file["file"]["error"] === 4){
            $this->errors["file"] = "There's no file attached!";
        }

        if(empty($this->errors)){
            $this->uploadFile($form, $file);
            return true;
        }

        return false;

        
    }


}   