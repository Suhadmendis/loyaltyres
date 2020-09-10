<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\TeacherModel;
 
class Teacher extends Controller
{
 
    public function index()
    {    
        $model = new TeacherModel();
 
        $data = $model->orderBy('id', 'DESC')->findAll();
        
        // return view('list', $data);



        
        echo json_encode($data);
    }    
 
    public function create()
    {    
        return view('add');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new TeacherModel();
		
        $data = [
            'name'  => $this->request->getVar('textName'),
			'address'  => $this->request->getVar('txtAddress'),
			'tel'  => $this->request->getVar('txtTel'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('teacher') );
    }
 
    public function edit($id = null)
    {
      
     $model = new TeacherModel();
 
     $data['teacher'] = $model->where('id', $id)->first();
 
     return view('edit', $data);
    }
 
    public function update()
    {  
 
		helper(['form', 'url']);
		 
		$model = new TeacherModel();

		$id = $this->request->getVar('id');

		 $data = [
			'name'  => $this->request->getVar('textName'),
			'address'  => $this->request->getVar('txtAddress'),
			'tel'  => $this->request->getVar('txtTel'),
			];

		$save = $model->update($id,$data);

		return redirect()->to( base_url('teacher') );
    }
 
    public function delete($id = null){
		$model = new TeacherModel();
		$data['user'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('teacher') );
    }
}

?>